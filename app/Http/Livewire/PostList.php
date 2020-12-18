<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{ 
    use WithPagination;

    public function render()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(15);

        return view('livewire.post-list', 
                    compact([ 'posts' ]));
    }
}
