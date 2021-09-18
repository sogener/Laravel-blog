<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $state;


    /**
     * Возвращает только опубликованные элементы
     * @return Article[]|Collection
     */
    public function getPublishedData()
    {
        $data = self::all();
        return $data->filter(function ($value) {
            return $value['state'] == 'published';
        });
    }
}
