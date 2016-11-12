create database store;

create table usuarios(usuario_id integer auto_increment primary key, nombre varchar(50),password varchar(15),tipo integer);

insert into usuarios(nombre,password,tipo) values ('admin','admin',0),('henry','henry1997',1);

create table stock(stock_id integer auto_increment primary key,producto varchar(90),precio integer,cantidad integer);

insert into stock(producto,precio,cantidad)values('PlayStation4',6000,989),('Xbox one',5999,10),('Xbox 360',1000,1000),('pc',10500,8),('monitor',1000,10),('mouse',100,10),('gabinete',300,9),('teclado',200,10),('leds',200,900),('iphone7',17000,10);

create table carrito(stock_id integer,cantidadCom integer);