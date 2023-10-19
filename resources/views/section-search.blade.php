<section>
    <div class="postagens">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="post">
                    <h2>{{$post->title}}</h2>
                    <br>
                    <div class="content">
                        <p>{{$post->content}}</p>
                        
                        <div class="botao">
                        <button class="acessar">Acessar</button>
                        </div>
                    </div>
                </div>
            @endforeach  
        @else
            <h2>Não Existem Postagens, <a href="{{route('posts.createStore')}}">Criar O Primeiro Post?</a></h2>
        @endif

        
    </div>

</section>