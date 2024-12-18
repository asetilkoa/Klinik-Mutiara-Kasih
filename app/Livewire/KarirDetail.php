<?php

namespace App\Livewire;

use App\Models\ArticleKarir;
use Livewire\Component;

class KarirDetail extends Component
{
    public $karirID = null;
    public function mount($id){
        $this->karirID = $id;
    }

    public function render()
    {
        $karir = ArticleKarir::select('article_karirs.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', 'article_karirs.category_id')
            ->findOrFail($this->karirID);
        return view('livewire.karir-detail',[
            'karir' => $karir
        ]);
    }
}
