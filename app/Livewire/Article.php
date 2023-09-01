<?php

namespace App\Livewire;

use App\Models\Articles;
use App\Models\Comments;
use Livewire\Component;

class Article extends Component
{

    /**
     * @var Articles
     */
    public $article;

    public $commentContent = '';

    public $rules = [
        'commentContent' => ['required', 'min:5'],
    ];

    public $messages = [
        'commentContent.required' => 'Поле комментария обязательно для заполнения.',
        'commentContent.min' => 'Поле комментария одолжно содержать минимум 5 символов.',
    ];

    public function mount($id) {
        $this->article = Articles::find($id);
    }

    public function storeComment() {
        $this->validate();

        Comments::create([
           'article_id' => $this->article->id,
           'user_id' => $this->article->getAuthor()->id,
           'content' => $this->commentContent
        ]);

        $this->reset('commentContent');
    }

    public function render()
    {
        return view('livewire.article');
    }
}
