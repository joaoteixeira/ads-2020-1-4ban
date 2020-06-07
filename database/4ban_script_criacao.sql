/*
--drop database if exists 4ban;
create database 4ban;
use 4ban;
*/

create table Tag (
tag_id integer AUTO_INCREMENT not null,
tag_nome varchar (15) not null,
tag_descricao varchar (255),
primary key(tag_id)
);

create table Usuario(
usuario_id integer AUTO_INCREMENT not null,
usuario_email varchar(255),
usuario_login varchar(255),
usuario_senha varchar(255),
usuario_username varchar(255),
usuario_adm boolean,
usuario_data_cadastro date,
primary key (usuario_id)
);

create table Postagem(
postagem_id integer AUTO_INCREMENT not null,
postagem_titulo varchar(255),
postagem_up int,
postagem_down int,
postagem_data_publicacao date,
postagem_texto varchar(500),
fk_usuario_id int,
primary key (postagem_id),
foreign key (fk_usuario_id) references Usuario(usuario_id)
);
/*talvez coloque o campo para imagem*/

create table Comentario(
comentario_id integer AUTO_INCREMENT not null,
comentario_data_publicacao date,
comentario_texto varchar(500),
comentario_fixado boolean,
fk_comentario_id int,
fk_postagem_id int,
fk_usuario_id int,
primary key (comentario_id),
foreign key (fk_comentario_id) references Comentario(comentario_id),
foreign key (fk_postagem_id) references Postagem(postagem_id),
foreign key (fk_usuario_id) references Usuario(usuario_id)
);

create table tag_has_postagem(
fk_tag_id int not null, 
fk_postagem_id int not null,
primary key(fk_tag_id, fk_postagem_id),
foreign key (fk_tag_id) references Tag(tag_id),
foreign key (fk_postagem_id) references Postagem(postagem_id)
);
