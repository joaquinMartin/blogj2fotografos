<x-app-layout>

    <div class="bg-gray-500">
      <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
       
      </div>
    </div>
     <div class="max-w-5xl px-2 py-8 mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow">
            <div class="px-4 py-5 sm:px-6">
           <h1 class=" font-bold ">CATEGORÍA </h1>
           <h1 class="text-center text-4xl font-bold ">{{ $category->name }}</h1>
        </div>
    </div>
    </div>
      <div class="max-w-5xl px-2 py-8 mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
     
        
        @foreach ($posts as $post )
           <x-card-post :post="$post" />
        @endforeach
        </div class="pb-10 pt-10">
        <br>
            {{ $posts->links() }}
        </div>
    </div>
     <div class="bg-gray-500">
      <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
       
      </div>
    </div>
</x-app-layout>