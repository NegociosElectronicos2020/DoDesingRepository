<?php 
include("conexion.php");
$con=conectarBD();

//echo "Se realizo la conexion exitosamente";
session_start();
  if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');}
if(!isset($_GET['producto'], $_GET['precio'])) { exit("Error dentro de los datos del producto");}
 
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
require 'config.php';
$producto = $_GET['producto'];
$precio = $_GET['precio'];
$envio = 0;
$total = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');

$articulo = new Item();
$articulo->setName($producto)
      ->setCurrency('MXN')
      ->setQuantity(1)
      ->setPrice($precio);      
      
$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));
$detalles = new Details();
$detalles->setShipping($envio)
          ->setSubtotal($precio);       
          
$cantidad = new Amount();
$cantidad->setCurrency('MXN')
          ->setTotal($total)
          ->setDetails($detalles);
          
$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
               ->setItemList($listaArticulos)
               ->setDescription('Pago ')
               ->setInvoiceNumber(uniqid());               

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/estatusPago.php?exito=true")
              ->setCancelUrl(URL_SITIO . "/estatusPago.php?exito=false");              
              
$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));    
     try { $pago->create($apiContext); } 
     catch (PayPal\Exception\PayPalConnectionException $pce) {      
       echo '<pre>';print_r(json_decode($pce->getData()));exit;}

$aprobado = $pago->getApprovalLink();
header("Location: {$aprobado}");