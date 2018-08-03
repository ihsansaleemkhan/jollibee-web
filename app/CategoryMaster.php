<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CategoryMaster extends Model
{
    protected $table = 'category_master';
    public $timestamps = true;
    protected $primaryKey = "categoryID";
    protected $fillable = ['categoryID', 'cat_name', 'cat_image', 'cat_description', 'cat_status'];

    public function getCategories()
    {
        return DB::table('category_master')->orderBy('categoryID', 'desc')->get();
    }

}
