--triggers para serem executados antes da exclusão de uma linha que tenha dependencia em outra tabela

--triggers para a exclusão de usuario
delimiter $$ 
CREATE TRIGGER exclusao_usuario BEFORE DELETE ON usuario FOR EACH ROW
BEGIN 
delete from comentario where comentario.fk_usuario_id = OLD.usuario_id;
delete from postagem where postagem.fk_usuario_id = OLD.usuario_id;
END;
$$ delimiter ;

--trigger para a exclusão de postagem
delimiter $$ 
CREATE TRIGGER exclusao_postagem BEFORE DELETE ON postagem FOR EACH ROW
BEGIN 
delete from comentario where comentario.fk_postagem_id = OLD.postagem_id;
END;
$$ delimiter ;

--trigger para a exclusão de comentario
delimiter $$ 
CREATE TRIGGER exclusao_comentario BEFORE DELETE ON comentario FOR EACH ROW
BEGIN 
delete from comentario where comentario.fk_comentario_id = OLD.comentario_id;
END;
$$ delimiter ;

--adicionar data à publicacao
delimiter $$ 
CREATE TRIGGER data_postagem AFTER INSERT ON postagem FOR EACH ROW
BEGIN 
UPDATE postagem
SET postagem_data_publicacao = curdate() WHERE postagem_id = NEW.postagem_id;
END;
$$ delimiter ;