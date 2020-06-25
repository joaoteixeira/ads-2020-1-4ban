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
            <h3>{{ $postagens->postagem_titulo }}</h3>
            <p>{{ $postagens->postagem_data_publicacao }}</p>
            <p>{{ $postagens->postagem_texto }}</p>
        </div>
    </div>

    <form action="{{ route('comentario.store', $postagens) }}" method="post">
      <div class="form-group"><br>
        <textarea name="comentario_texto" class="form-control" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Comentar</button>
    </form>

    <div>
        <div class="card card-outline-secondary my-4">
            <div class="card-header">Comentários</div>

            @foreach($comentarios as $comentarios)
                <div class="card-body">
                    @if($comentarios->fk_comentario_id)
                        <div class="text-white-50 bg-dark">
                            <small class=""><hr> Id do comentário que esse comentário esta respondendo: {{ $comentarios->fk_comentario_id }}. Lembrar de trocar a consulta na tabela por uma consulta em uma view com essa tabela mais o nome do usuario que comentou</small>                        
                            <hr>
                        </div>
                        <textarea name="hide" style="display:none;"></textarea>
                    @endif
                    <p>{{ $comentarios->comentario_texto }}</p>
                    <small class="text-muted">{{ $comentarios->comentario_id }}: Postado por {{ $comentarios->fk_usuario_id }} em {{$comentarios->comentario_data_publicacao}}</small>
                    
                    <div class="comment-meta">
                    <span><a href="#">Deletar</a></span>
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