<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class Pages extends Component
{
    public $ModalFormVisible = false;
    public $title;
    public $slug;
    public $content;

    public function create()
    {
        Page::create($this->modelData());
        $this->ModalFormVisible = false ;
    }
    public function createShowModal()
    {
        $this->ModalFormVisible = true;
    }
    public function modelData()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content'=> $this->content,
        ];
    }
    public function render()
    {
        return view('livewire.pages');
    }
}
