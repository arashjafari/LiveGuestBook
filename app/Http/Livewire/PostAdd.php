<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Str;

class PostAdd extends Component
{
    public $data = [];
     
    protected $rules = [
        'data.content' => 'required|min:10',
        'data.name' => 'required|min:3',
        'data.email' => 'required|email'
    ];

    protected $validationAttributes = [
        'data.content' => 'content',
        'data.name' => 'fullname',
        'data.email' => 'email address',
    ];

    public function addPost()
    {
        $this->validate();

        $this->makeUniqueSecretKey();
        Post::create($this->data);

        $this->clearForm();
        $this->emit('addedPost');

        session()->flash('message', 'Your message has been successfully sent.');
    }

    private function clearForm()
    {
        $this->data = [];
    }

    private function makeUniqueSecretKey()
    {
        $secret = "";

        do
        { 
            $secret = Str::random(30);

        }while(Post::whereSecret($secret)->first());

        $this->data['secret'] = $secret;
    }

    public function render()
    {
        return view('livewire.post-add');
    }
}
