@props(['post'])
<article class="mb-10 overflow-hidden bg-white hadow-lg">
    {{-- si existe una imagen pone la imagen, sino va a colocar la imagen por defecto --}}
    @if($post->image)
        
        <img class="object-cover object-center w-full h-72" src="{{ Storage::url($post->image->url)}}" alt="imagen del post">
        
    @else
        <img class="object-cover object-center w-full h-72" src= "https://cdn.pixabay.com/photo/2020/08/02/14/18/blue-5457731_960_720.jpg " alt="imagen por defecto">
        
    @endif
        <div class="px-6 py-4">
                    <h1 class="mb-2 text-xl font-bold">
                        <a href="{{ route('posts.show', $post)}}">{{ $post->name }}</a>
                    </h1>
                    <div class="text-base text-gray-700">
                        {!! $post->extract !!}
                    </div>
                </div>
                <div class="px-6 pt-4 pb-2">
                    @foreach ($post->tags as $tag )
                        <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 py-1 mr-2 text-sm text-gray-700 bg-gray-200 ">{{ $tag->name }} </a>
                        
                    @endforeach
</article>