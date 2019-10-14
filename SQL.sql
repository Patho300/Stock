/*
crear tablas 11/10/2019
*/

create table usuario (

id_usuario int(255) auto_increment not null,
nombre VARCHAR(50)null,
apellido VARCHAR(25)null,
usuario VARCHAR(10)null,
contraseña VARCHAR(9)not null,
id_perfil int(255) not null,

constraint pk_usuario primary key(id_usuario),
constraint fk_pefil foreign key(id_perfil) references perfil(id_perfil)


)engine=InnoDB;




create table perfil(

id_perfil int(255) not null,
descripcion_perfil VARCHAR (25),

constraint pk_perfil primary key(id_perfil)

)engine=InnoDB;









