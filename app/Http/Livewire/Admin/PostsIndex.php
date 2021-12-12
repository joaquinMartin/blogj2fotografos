<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;
    
    protected $paginationTheme = "bootstrap";

    public $search;

    // se activa cuando cambie el valor del input reseteando el numero de pagina en el post
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        // buscador por caracter, los posts del usuario autentificado paginado
        $posts = Post::where('user_id', auth()->user()->id)
                ->where('name', 'LIKE', '%' . $this->search .'%')
                ->latest('id')
                ->paginate();

        return view('livewire.admin.posts-index', compact ('posts'));
    }
}
