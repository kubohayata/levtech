<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
        <x-app-layout>
        <x-slot name="header">
            index
        </x-slot>
    <body class="antialiased">
        ログインユーザー:{{ Auth::user()->name }}
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>

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
        <div>
            @foreach($questions as $question)
                <div>{{ $question['title'] }}<div?
            @endforeach
        </div>
        <div>
            @foreach($questions as $question)
                <div>
                    <a href="https://teratail.com/questions/{{ $question['id'] }}">
                        {{ $question['title'] }}
                    </a>
                </div>
            @endforeach
        </div>
        </script>
    </body>
    </x-app-layout>
</html>
