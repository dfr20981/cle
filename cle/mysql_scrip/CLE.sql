CREATE database IF NOT exists CLE;

USE CLE;

CREATE table IF NOT exists USER_ROOT(
 id int auto_increment not null,
 nombre text(45) not null,
 partenon text(45) not null,
 materno text(45) not null,
 tel int(10) not null,
 numcontrol int(9) not null,
 email varchar(155) not null,
 contraseña varchar(155) not null,
 puesto text(155) not null,
 primary key(id)
)ENGINE  =INNODB;

create table if not exists alumnos(
id int auto_increment not null,
nombre text(45) not null,
partenon text(45) not null,
materno text(45) not null,
tel int(10) not null,
email varchar(155) not null,
contraseña varchar(155) not null,
numcontrol int(9) not null,
grupo nvarchar(155) not null,
nivelingles nvarchar(155),
calificasion int(10),
 primary key(id)
)engine =INNODB;

create table if not exists profesores(
id int auto_increment not null,
nombre text(45) not null,
partenon text(45) not null,
materno text(45) not null,
tel int(10) not null,
email varchar(155) not null,
contraseña varchar(155) not null,
grupoasignado varchar(155),
calificasionexamen int(10)not null,
primary key(id)
)engine =INNODB;