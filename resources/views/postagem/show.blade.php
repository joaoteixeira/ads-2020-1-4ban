@extends('layouts.admin')

@section('content-title', 'Postagens')

@section('head')
    <script>

    $('[data-toggle="collapse"]').on('click', function() {
        var $this = $(this),
                $parent = typeof $this.data('parent')!== 'undefined' ? $($this.data('parent')) : undefined;
        if($parent === undefined) { /* Just toggle my  */
            $this.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
            return true;
        }

        /* Open element will be close if parent !== undefined */
        var currentIcon = $this.find('.glyphicon');
        currentIcon.toggleClass('glyphicon-plus glyphicon-minus');
        $parent.find('.glyphicon').not(currentIcon).removeClass('glyphicon-minus').addClass('glyphicon-plus');

    });

    </script>
@endsection()

@section('content')
    <div class="card mt-4">
        <div class="card-body">
            @foreach($postagens as $post)
                <h3>{{ $post->postagem_titulo }}</h3>
                <p>Postado por {{ $post->usuario_username }}</p>
                <p>Data de publicação: {{ $post->postagem_data_publicacao }}</p>
                <p>{{ $post->postagem_texto }}</p>
            @endforeach
        </div>
    </div>

    <form action="{{ route('comentario.store') }}" method="post">
      <div class="form-group"><br>
        <textarea name="comentario_texto" class="form-control" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Comentar</button>
    </form>

    <div>
        <div class="card card-outline-secondary my-4">
            <div class="card-header">Comentários</div>  

            @foreach($comment as $comentarios)
                <div class="card-body">
                    @if($comentarios->fk_comentario_id)
                        <div class="text-white-50 bg-dark">
                            <small class=""><hr> Id do comentário que esse comentário esta respondendo: {{ $comentarios->fk_comentario_id }}. Lembrar de trocar a consulta na tabela por uma consulta em uma view com essa tabela mais o nome do usuario que comentou</small>                        
                            <hr>
                        </div>
                        <textarea name="hide" style="display:none;"></textarea>
                    @endif
                    <p>{{ $comentarios->comentario_texto }}</p>
                    <a href="{{ route('usuario.show', $comentarios->usuario_id) }}">VER</a>
                    <small class="text-muted">Postado por 
                                            {{ $comentarios->usuario_username }} em 
                                            {{ $comentarios->comentario_data_publicacao }}</small>
                    
                    <div class="comment-meta">
                    
                    <span><a href="#">Excluir</a></span>
                    <span>
                        <a class="" role="button" data-toggle="collapse" href="#replyCommentT" aria-expanded="false" aria-controls="collapseExample">Responder</a>
                    </span>
                    <div class="collapse" id="replyCommentT">
                        <form>
                        <div class="form-group">
                            <label for="comment">Seu Comentário</label>
                            <textarea name="comment" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                        </form>
                    </div>
                    <hr>                    
                </div>
            @endforeach

        </div>
    </div>
@endsection()