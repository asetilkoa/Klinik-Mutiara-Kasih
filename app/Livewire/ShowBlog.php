<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class ShowBlog extends Component
{
    public $categorySlug = null;

    public function render()
    {
        $categories = Category::all();
        $paginate = 10;

        if (!empty($this->categorySlug)) {
            $category = Category::where('slug', $this->categorySlug)->first();

            if (empty($category)) {
                abort(404);
            }

            $articles = Article::orderBy('created_at', 'DESC')
                ->where('category_id', $category->id)
                ->where('status', 1)
                ->paginate($paginate);
        } else {
            $articles = Article::orderBy('created_at', 'DESC')
                ->where('status', 1)
                ->paginate($paginate);
        }

        $latestArticles = Article::orderBy('created_at', 'DESC')
            ->where('status', 1)
            ->get()
            ->take(4);

        return view('livewire.show-blog', [
            'articles' => $articles,
            'categories' => $categories,
            'latestArticles' => $latestArticles
        ]);
    }
}
