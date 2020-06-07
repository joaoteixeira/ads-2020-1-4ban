--relação postagem e suas tags
create view post_tags as
select postagem.postagem_id, postagem.postagem_titulo,
	tag.tag_id, tag.tag_descricao
from postagem
join tag_has_postagem on postagem.postagem_id = tag_has_postagem.fk_Postagem_postagem_id
join tag on fk_tag_id = tag.tag_id
order by postagem_id;

--relação postagem e seus comentarios
create view post_comentarios as
select postagem.postagem_id, postagem.postagem_titulo, postagem.postagem_up, postagem.postagem_down, postagem.postagem_data_publicacao, postagem.postagem_texto, 
comentario.comentario_id, comentario.comentario_texto, comentario.comentario_data_publicacao
from comentario
left join postagem on comentario.fk_postagem_id = postagem.postagem_id;

--relação comentarios e suas respostas
create view comentario_resposta as
SELECT u.comentario_id as 'comentario id', u.comentario_texto as 'comentario', u.comentario_data_publicacao as 'comentario data',
a.comentario_id as 'respota id', a.comentario_texto as 'resposta', a.comentario_data_publicacao as 'resposta data'

FROM comentario u
JOIN comentario a ON u.comentario_id = a.fk_comentario_id;

--relação de usuarios e suas postagens
create view usuario_posts as
select usuario.usuario_id, usuario.usuario_email, usuario.usuario_username, 
postagem.postagem_id, postagem.postagem_titulo, postagem.postagem_data_publicacao
from usuario
join postagem on usuario.usuario_id = postagem.fk_usuario_id
order by postagem_id;