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
}
