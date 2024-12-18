<?php

namespace App\Livewire;

use App\Models\ArticleKarir;
use App\Models\CategoryKarir;
use Livewire\Component;

class ShowKarir extends Component
{
    public $categorySlug = null;

    public function render()
    {
        $categories = CategoryKarir::all();
        $paginate = 10;

        if (!empty($this->categorySlug)) {
            $category = CategoryKarir::where('slug', $this->categorySlug)->first();

            if (empty($category)) {
                abort(404);
            }

            $karirs = ArticleKarir::orderBy('created_at', 'DESC')
                ->where('category_id', $category->id)
                ->where('status', 1)
                ->paginate($paginate);
        } else {
            $karirs = ArticleKarir::orderBy('created_at', 'DESC')
                ->where('status', 1)
                ->paginate($paginate);
        }

        $latestKarirs = ArticleKarir::orderBy('created_at', 'DESC')
            ->where('status', 1)
            ->get()
            ->take(4);

        return view('livewire.show-karir',[
            'karirs' => $karirs,
            'categories' => $categories,
            'latestKarirs' => $latestKarirs
        ]);
    }
}
