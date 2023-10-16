<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    //
    public function create(Request $request){
        // Forma convencional de Create
        // $new_post = [
        //     'title' => 'Meu primeiro post',
        //     'content' => 'conteuto do post 1',
        //     'author'=> 'ewerton'
        // ];  
        
        // $post = new Post($new_post);
        // $post->save();

        //Forma 2 - de usar CREATE

        // $post = new Post();

        // $post->title = 'meu segundo post';
        // $post->content = 'conteudo do meu segundo post';
        // $post->author = 'Evinho';
        // $post->save();
        // dd($post);

        // metodo de CREATE mais compacto sem usar save()    
        $post = Post::create([
            'title' => 'Novo Título',
            'content' => 'Conteúdo do post chat',
            'author' => 'Autor'
        ]);
    }

    public function read(Request $r){
        $post = new Post();

        $post = $post->find(1);

        return $post;
    }
    public function all(Request $r){
        $posts = Post::all();
        return $posts;
    }
    public function update(Request $request){
        // $post = Post::find(1); //pega um post com base no id
        $posts = Post::where('id', '>',0)->update([
            'author' => 'Desconhecido'
        ]);
        // $post->title = 'Primeiro Post ATUALIZADO';
        $posts->save();

        return $posts;

    }
    public function delete(Request $r){
        $post = Post::find(7); //recupera postagem com base no id
        $post->delete(); // deleta postagem
    }
}
