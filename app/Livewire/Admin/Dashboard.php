<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Pagination\Cursor;
use Illuminate\Support\Collection;

class Dashboard extends Component
{
    #[Title("Dashboard")]
    #[Validate("required")]
    public $body;
    public $posts;
    public $nextCursor;
    public $hasMorePages;

    public function mount()
    {
        $this->posts = new Collection();
        $this->loadPosts();
    }

    public function save()
    {
        $this->validate();

        auth()->user()->posts()->create([
            "body" => $this->body
        ]);

        session()->flash("success", "Post has uploaded successfully");

        return redirect()->route('dashboard');
    }

    public function loadPosts()
    {
        if ($this->hasMorePages !== null && !$this->hasMorePages) {
            return;
        }

        $query = Post::orderBy('created_at', 'desc');

        $posts = $query->cursorPaginate(3, ['*'], 'cursor', Cursor::fromEncoded($this->nextCursor ?? ''));

        $this->posts = $this->posts->merge($posts->items());

        if ($this->hasMorePages = $posts->hasMorePages()) {
            $this->nextCursor = $posts->nextCursor()->encode();
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}



