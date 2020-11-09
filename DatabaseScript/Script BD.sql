create database sitio;
use sitio;
show tables;
show databases;

create table categoría (id_categoría int (1), nombre_artículo varchar (20), descripción_categoría varchar (255));
create table producto (id_producto int, id_categoría int (1), nombre_producto varchar (50), descripción_producto varchar(255), tipo varchar(30), vista_producto blob);
create table usuario (id_usuario int, id_rol int, id_suscripción int, nombre_usuario varchar (255), dirección varchar (255), teléfono long, correo_electrónico varchar (255), clave_interbancaria long);
create table suscripción (id_suscripción int, id_usuario int, fecha datetime, precio int, duración_meses int (12));
create table rol (id_rol int, nombre_rol varchar (255), descripción_rol varchar (255));

-- Llaves primarias
-- alter table T1 add constraint Nombre unique key (C1);
alter table categoría add constraint categoría_uk unique key (id_categoría);
alter table producto add constraint producto_uk unique key (id_producto);
alter table usuario add constraint usuario_uk unique key (id_usuario);
alter table suscripción add constraint suscripción_uk unique key (id_suscripción);
alter table rol add constraint rol_uk unique key (id_rol);

-- Llaves foráneas
-- alter table T1 add constraint Nombre foreign key (C de T1) references T2 (C de T2);

alter table producto add constraint producto_categoría_fk foreign key (id_categoría) references categoría (id_categoría);
alter table usuario add constraint usuario_rol_fk foreign key (id_rol) references rol (id_rol);
alter table usuario add constraint usuario_suscripción_fk foreign key (id_suscripción) references suscripción (id_suscripción);
alter table suscripción add constraint suscripción_usuario foreign key (id_usuario) references usuario (id_usuario);

