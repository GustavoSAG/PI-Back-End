drop database if exists registro;

create database registro;

use registro;

create table roles(
id int (2) not null primary key auto_increment,
rol varchar (50) not null);

create table usuarios(
id int (11) not null primary key auto_increment,
username varchar (50) not null,
password varchar (50) not null,
rol_id int (2) not null,
foreign key (rol_id) references roles (id));

insert into roles(id,rol)
values('1','admin');
insert into roles(id,rol)
values('2','user');

insert into usuarios(id,username,password,rol_id)
values('1','Admin','123456',1);
insert into usuarios(id,username,password,rol_id)
values('2','Gustavo','123456',2);