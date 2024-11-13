<?php

namespace App\Livewire\Post;

use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PostCreate extends Component
{
    #[Title("Create Post")]

    #[Validate("required")]
    public $body;

    public function save(){
        $this->validate();

        $post = auth()->user()->posts()->create([
            "body"=> $this->body
        ]);
        session()->flash("success","Post has uploaded successfully");
        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.post.post-create');
    }
}
