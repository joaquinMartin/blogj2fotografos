<x-app-layout>
    <div class="bg-gray-500 ">
        <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
        </div>
      </div>
    <div class="container px-2 py-8 mx-auto max-w-7xl sm:px-4 lg:px-8">   
   {{--   <div class="container py-8">  --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            
            @foreach ($posts as $post)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 lg:grid-cols-3 @endif" style="background-image:url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/08/02/14/18/blue-5457731_960_720.jpg @endif)" >
                
                <div class ="flex flex-col justify-center w-full h-full px-8 ">
                   
                    <h1 class="mt-2 text-4xl font-bold leading-6 text-white">
                        <a href="{{ route('posts.show', $post) }}">
                            {{$post->name}}
                        </a>
                    </h1>
                   
                </div> 
                <div class="relative">    
                    <div class="absolute bottom-0 left-0 p-3">
                        @foreach ($post->tags as $tag )
                            <a href="{{ route('posts.tag', $tag) }}" class="inline-block mt-0 px-5 h-6 bg-{{$tag->color}}-500 text-white my-2 "> {{$tag->name}}</a>     
                         @endforeach
                    </div> 
                </div>
            </article>   
            @endforeach

        </div>

        <div class="mt-4">
            <h1 class="text-4xl font-bold leading-8 text-white">
                     {{$posts->links()}} 
                  
        </div>
   
    {{-- <div class="bg-gray-500">
        <div class="px-3 py-3 x-auto m max-w-7xl sm:px-6 lg:px-8">
        </div>
      </div>  --}}
    </div>
    
   
    

</x-app-layout>