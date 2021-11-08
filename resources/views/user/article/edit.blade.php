<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

<a href="{{ route ('user_article.index')}}"></a>

<form action="{{ route("user_article.update", $article->id) }}" method="POST" enctype="multipart/form-data">        
    @csrf
    @method('PUT')
    <label for="title">Titre de l'article</label>
    <input type="text" name="title" value="{{$article->title}}"><br>
    <label for="content">Contenu de l'article</label>
    <textarea name="content" id="content" cols="30" rows="10">{{$article->content}}</textarea>    <br>
    <label for="img">Photo</label>
    <input type="file" name="img" id="img" accept="image/png, image/jpeg, image/gif, image/pdf, image/svg">
    <button type="submit">Envoyer l'article</button>
</form>

</x-app-layout>
