<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticleCategory extends Model
{
    use HasFactory;

    public function getData() {
        return DB::table('article_categories')->paginate(10);
    }

    //    Получить статьи для одной категории
    public function articles(){
//        todo: В параметр передается category_id, вытащить все элементы с этим category_id
        return $this->hasMany('App\Models\Article', 'category_id');
    }

}
