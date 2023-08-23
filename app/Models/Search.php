<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $guarded = [];

    public function search(){
        return $this->belongsTo('App\Book');
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('book', $this->id);

        return new SearchResult(
            $this,
            $this->tile,
            $url
        );
    }
}
