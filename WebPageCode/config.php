<?php 

//url aquispe
define('URL_SITIO', 'http://localhost/DoDesingRepository/WebPageCode');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AZwsZDOI6UNqEHSqUi_LdhYV1xQho6ZqOsVH6Eqo3YATOUgrYb3rmVogxoBT4zpZk8LcWuhgpIaHtS2O',     // ClientID
        'EOGNqoHCYDPAv1SZMherxHhKjN-5092UXSLHYm74_9bM1dLSc0q7QVYqbOyrPBAXqH6XMCD9t1OOeRdF'      // ClientSecret
    )
);

