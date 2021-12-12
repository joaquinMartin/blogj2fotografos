<x-app-layout>
    <div class="bg-gray-500">
      <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
      </div>
    </div>
    <div class="container py-8 ">
   
        


        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
    
            {{-- contenido principal --}}
            <div class="lg:col-span-2 ">
            
    <div class="max-w-5xl px-2 py-8 sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow">
          <div class="px-4 py-5 sm:px-6">
            <h1 class=" font-bold ">{{ $post->name }} </h1>
            <h1 class="text-center text-2xl font-bold text-gray-600">{!! $post->extract !!} </h1>
          </div>
      </div>
    
                <figure>
                    @if($post->image)
                       <img class="object-cover object-center w-full h-80" src="{{ Storage::url($post->image->url)}}">
                    @else
                    <img class="object-cover object-center w-full h-80" src= "https://cdn.pixabay.com/photo/2020/08/02/14/18/blue-5457731_960_720.jpg " alt="imagen por defecto">
                    @endif
                </figure>
</div>
<div class="max-w-5xl px-2 py-8 mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow">
          <div class="px-4 py-5 sm:px-6">
            <h1 class="text-center   font-bold text-gray-500 ">{!! $post->body !!}</h1>
          </div>
      </div>
    </div>
              
            </div>
            {{-- Contenido relacionado --}}
            <aside>
            <div class="max-w-5xl px-2 py-8 mx-auto">
      <div class="overflow-hidden bg-white shadow">
          <div class="px-4 py-5 sm:px-6">
            <h1 class="text-center font-bold text-gray-600 ">Más en {{ $post->category->name }}</h1>
          </div>
      </div>
    </div>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{ route('posts.show',$similar) }}">
                                
                                @if($similar->image)
                                
                                    <img  class="object-cover object-center h-20 w-36"  src="{{ Storage::url($similar->image->url) }}" alt="imagen"/>   
                               
                                @else
                                    <img class="object-cover object-center h-20 w-36" src= "https://cdn.pixabay.com/photo/2020/08/02/14/18/blue-5457731_960_720.jpg " alt="imagen por defecto">
    
                                    
                                @endif
                                
                                <div class="bg-gray-200">
                                    <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                    <span class="h-20 ml-2 text-gray-600 w-36">{{ $similar->name }}</span>
                                    </div>
                                </div>
                                <span ></span>
                            </a>
                        </li>
                    @endforeach
                </ul>

            </aside>
        </div>
        
    </div>
  
</x-app-layout>