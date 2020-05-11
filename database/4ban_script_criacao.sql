/*
drop database if exists 4ban;
create database 4ban;
use 4ban;
*/

create table Tag (
tag_id serial not null,
tag_nome varchar (15) not null,
tag_descricao varchar (255),
primary key(tag_id)
);
create table Usuario(
usuario_id serial not null,
usuario_login varchar(255),
usuario_senha varchar(255),
usuario_username varchar(255),
usuario_adm boolean,
usuario_data_cadastro date,
primary key (usuario_id)
);

create table Postagem(
postagem_id serial not null,
postagem_titulo varchar(255),
postagem_up int,
postagem_down int,
postagem_data_publicacao date,
postagem_texto varchar(500),
fk_Usuario_ususario_id int,
primary key (postagem_id),
foreign key (fk_Usuario_ususario_id) references Usuario(usuario_id)
);
/*talvez coloque o campo para imagem*/

create table Comentario(
comentario_id serial not null,
comentario_data_publicacao date,
comentario_texto varchar(500),
comentario_fixado boolean,
fk_Comentario_comentario_id int,
fk_Postagem_postagem_id int,
fk_Usuario_usuario_id int,
primary key (comentario_id),
foreign key (fk_Comentario_comentario_id) references Comentario(comentario_id),
foreign key (fk_Postagem_postagem_id) references Postagem(postagem_id),
foreign key (fk_Usuario_usuario_id) references Usuario(usuario_id)
);

create table tag_has_postagem(
fk_Tag_tag_id int not null, 
fk_Postagem_postagem_id int not null,
primary key(fk_Tag_tag_id, fk_Postagem_postagem_id),
foreign key (fk_Tag_tag_id) references Tag(tag_id),
foreign key (fk_Postagem_postagem_id) references Postagem(postagem_id)
);
