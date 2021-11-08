<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

<form action="{{ route("user_article.store") }}" method="post" enctype="multipart/form-data">        
    @csrf
    <label for="title">Titre de l'article</label>
    <input type="text" name="title"><br>
    <label for="content">Contenu de l'article</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>    <br>
    <label for="img">Photo</label>
    <input type="file" name="img" id="img" accept="image/png, image/jpeg, image/gif, image/pdf, image/svg  ">
    <button type="submit">Envoyer l'article</button>
</form>

</x-app-layout>
