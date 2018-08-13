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
        return DB::table('product_master')->orderBy('productID', 'desc')->paginate(15);
    }

    public function getProduct($id)
    {
        return DB::table('product_master')
            ->join('category_master','product_master.categoryID','=','category_master.categoryID')
            ->where('productID',$id)
            ->get();
    }

    public function getSize($id)
    {
        return DB::table('product_master')
            ->join('size_master','product_master.sizeID','=','size_master.sizeID')
            ->where('productID',$id)
            ->get();
    }

    public function presentPrice()
    {
      return money_format('AED%i', $this->price/100);
    }

    public function getDeals()
    {
        return DB::table('product_master')
            ->where('categoryID',10)->limit(4)
            ->orderBy('categoryID', 'desc')
            ->get();
    }

    public function getProductByCat($id)
    {
        return DB::table('product_master')->where('categoryID',$id)->orderBy('productID', 'desc')->paginate(15);
    }
}
