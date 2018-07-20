<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductMaster extends Model
{
    protected $table = 'product_master';
    public $timestamps = true;
    protected $primaryKey = "productID";
    protected $fillable = ['productID', 'name', 'image', 'description', 'price', 'sale_price', 'sizeID', 'typeID', 'categoryID', 'addon_productID', 'status'];

    public function getProducts()
    {
        return DB::table('product_master')->orderBy('productID', 'desc')->get();
    }
    public function getProduct($id)
    {
        return DB::table('product_master')->where('productID',$id)->get();
    }
}
