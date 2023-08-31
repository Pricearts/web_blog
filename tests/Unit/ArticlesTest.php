<?php

namespace Tests\Unit;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Database\Factories;

class ArticlesTest extends TestCase
{

    use HasFactory;

    public function testGetAllArticles()
    {
        $response = $this->get('/api/v1/articles');
        $response->assertStatus(200);
    }

    public function testCreateNewArticle()
    {
        $data = [
            'title' => 'Название статьи',
            'subtitle' => 'Подзаголовок статьи',
            'content' => 'Содержание статьи',
            'author' => 'Автор статьи'
        ];

        $response = $this->post('/api/v1/articles', $data);

        $response->assertStatus(201);
    }

    public function testGetArticleById()
    {
        $article = Articles::factory(1)->create()[0];

        $response = $this->get('/api/v1/articles/' . $article->id);

        $response->assertStatus(200);
    }

    public function testUpdateArticle()
    {
        $article = Articles::factory(1)->create()[0];

        $data = [
            'title' => 'Новое название статьи',
            'subtitle' => 'Новый подзаголовок статьи',
            'content' => 'Новое содержание статьи',
            'author' => 'Новый автор статьи'
        ];

        $response = $this->put('/api/v1/articles/' . $article->id, $data);

        $response->assertStatus(200);
    }

    public function testDeleteArticle()
    {
        $article = Articles::factory(1)->create()[0];

        $response = $this->delete('/api/v1/articles/' . $article->id);

        $response->assertStatus(200);
    }
}
