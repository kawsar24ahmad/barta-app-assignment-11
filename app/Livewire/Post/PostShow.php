<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;
    public function mount($post)
    {
        // dd($post);
        $this->post = Post::findOrFail($post);
    }
    public function render()
    {

        return view('livewire.post.post-show');
    }
}
