<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
                <title>Blog</title>
 dev_basis01

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
           </head>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    
    </head>
 master
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
 dev_basis01
            <div class='post'>
                <h2 class='title'>Title1</h2>
                <p class='body'>This is a sample body</p>
            </div>
        </div>

            @foreach($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                         <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                    </form>
               </div>
               <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            @endforeach
        </div>
        <div class='paginate'>{{ $posts->links()}}</div>
        <script>
            function deletePost(id){
                'use strict'
                
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
 master
    </body>
</html>
