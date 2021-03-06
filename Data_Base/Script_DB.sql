-- Creacion de la base de datos:
create schema Admin_Historial_Vehicular_DB;

-- Poner en uso la base de datos:
use Admin_Historial_Vehicular_DB;

-- Crear las tablas con sus respectivos campos:
create table clientes(id_cliente varchar(10) not null, nomb_cliente varchar(20) not null, apell_cliente varchar(25) not null,
tel_cliente varchar(10) not null, correo_cliente varchar(45) not null, ciudad_cliente varchar(20) not null,
primary key (id_cliente));

create table vehiculos(id_vehiculo varchar(6) not null, ref_vehiculo varchar(20) not null, marca_vehiculo varchar(20) not null,
mod_vehiculo varchar(4) not null, idpro_vehiculo varchar(10) not null,
primary key (id_vehiculo),
foreign key (idpro_vehiculo) references clientes(id_cliente));

create table operarios(id_operario varchar(10) not null, nomb_operario varchar(20) not null, apell_operario varchar(25) not null,
idcargo_operario int not null,
primary key (id_operario),
foreign key (idcargo_operario) references cargos(id_cargo));

create table cargos(id_cargo int not null auto_increment, nomb_cargo varchar(20) not null,
primary key (id_cargo));

create table servicios(id_servicio int not null auto_increment, nomb_servicio varchar(20) not null,
primary key (id_servicio));

create table servicios_detalle(id_detalle int not null auto_increment, fecha_detalle date not null,
idvehi_detalle varchar(6) not null, idpro_detalle varchar(10) not null, idservicio_detalle int not null,
observ_detalle varchar(100) not null, idope_detalle varchar(10) not null,
primary key (id_detalle),
foreign key (idvehi_detalle) references vehiculos(id_vehiculo),
foreign key (idpro_detalle) references clientes(id_cliente),
foreign key (idservicio_detalle) references servicios(id_servicio),
foreign key (idope_detalle) references operarios(id_operario));

create table usuarios(id_usuario int not null auto_increment, nomb_usuario varchar(10) not null, cont_usuiario varchar(6) not null,
rol_usuario varchar(10) not null,
primary key (id_usuario));


















