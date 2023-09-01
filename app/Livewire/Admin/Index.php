<?php

namespace App\Livewire\Admin;

use App\Models\Articles;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Auth;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public bool $isCreate = true;

    public Articles $targetArticle;

    public bool $showModal = false;

    public mixed $articleData = array(
        'title' => '',
        'subtitle' => '',
        'content' => '',
    );

    public $rules = [
        'articleData.title' => ['required', 'min:3', 'max:50'],
        'articleData.subtitle' => ['required', 'min:10', 'max:350'],
        'articleData.content' => ['required', 'min:10']
    ];

    public $messages = [
        'articleData.title.required' => 'Поле заголовка обязательно для заполнения.',
        'articleData.title.min' => 'Заголовок должен содержать не менее 3 символов.',
        'articleData.title.max' => 'Заголовок должен содержать не более 50 символов.',
        'articleData.subtitle.required' => 'Поле краткого описания обязательно для заполнения.',
        'articleData.subtitle.min' => 'Краткое описание должно содержать не менее 10 символов.',
        'articleData.subtitle.max' => 'Краткое описание должно содержать не более 350 символов.',
        'articleData.content.required' => 'Поле контента обязательно для заполнения.',
        'articleData.content.min' => 'Контент должен содержать не менее 3 символов.',
    ];

    public function storeArticle() {
        $this->validate();

        if ($this->isCreate) {
            Articles::create([
                'title' => $this->articleData['title'],
                'subtitle' => $this->articleData['subtitle'],
                'content' => $this->articleData['content'],
                'author' => Auth::user()->name
            ]);
        } else {
            Articles::where('id', $this->targetArticle->id)->update([
                'title' => $this->articleData['title'],
                'subtitle' => $this->articleData['subtitle'],
                'content' => $this->articleData['content'],
                'author' => Auth::user()->name
            ]);
        }

        $this->showModal = false;
        $this->reset();
    }

    public function toggleModal(): void
    {
        $this->reset(['isCreate', 'articleData', 'targetArticle']);
        $this->showModal = ($this->showModal) ? false : true;
    }

    public function destroy(Articles $article) {
        $article->deleteOrFail();
        $this->reset();
    }

    public function edit(Articles $article) {
        $this->articleData['title'] = $article->title;
        $this->articleData['subtitle'] = $article->subtitle;
        $this->articleData['content'] = $article->content;

        $this->targetArticle = $article;

        $this->isCreate = false;
        $this->showModal = true;
    }

    public function render()
    {

        $articles = Articles::all();

        return view('livewire.admin.index', [
            'articles' => $articles
        ]);
    }
}
