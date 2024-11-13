<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostEdit extends Component
{
    public $post;
    public $body;
    public function mount($post)
    {
        $this->post = Post::findOrFail($post);
        $this->body = $this->post->body;
    }
    public function changePost(){
        $updatedPost = $this->post->update([
            "body" => $this->body,
        ]);

        if($updatedPost){
            session()->flash('success', 'Post updated successfully.');
            return redirect()->route('dashboard');
        }else{
            session()->flash('error','post is not updated!');
        }


    }


    public function render()
    {
        return view('livewire.post.post-edit');
    }
}
