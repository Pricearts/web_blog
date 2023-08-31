<?php

namespace App\Livewire\Admin;

use App\Models\Articles;
use Livewire\Component;

class Index extends Component
{

    /**
     * Toggle modal dialog
     *
     * @var bool
     */
    public bool $showModal = false;

    public mixed $articleData = array(
        'title' => '',
        'subtitle' => '',
        'content' => ''
    );

    public $rules = [
        'articleData.title' => ['required', 'min:3', 'max:50'],
        'articleData.subtitle' => ['required', 'min:10', 'max:250'],
        'articleData.content' => ['required', 'min:10']
    ];

    public $messages = [
        'articleData.title.required' => 'Поле заголовка обязательно для заполнения.',
        'articleData.title.min' => 'Заголовок должен содержать не менее 3 символов.',
        'articleData.title.max' => 'Заголовок должен содержать не более 50 символов.',
        'articleData.subtitle.required' => 'Поле краткого описания обязательно для заполнения.',
        'articleData.subtitle.min' => 'Краткое описание должно содержать не менее 10 символов.',
        'articleData.subtitle.max' => 'Краткое описание должно содержать не более 100 символов.',
        'articleData.content.required' => 'Поле контента обязательно для заполнения.',
        'articleData.content.min' => 'Контент должен содержать не менее 3 символов.',
    ];

    public function storeArticle() {
        $this->validate();

        $article = Articles::create([
           'title' => $this->articleData['title'],
           'subtitle' => $this->articleData['subtitle'],
           'content' => $this->articleData['content'],
            'author' => \Auth::user()->name
        ]);

        $this->reset();
        $this->showModal = false;
    }

    public function toggleModal(): void
    {
        $this->showModal = ($this->showModal) ? false : true;
    }

    public function render()
    {
        return view('livewire.admin.index');
    }
}
