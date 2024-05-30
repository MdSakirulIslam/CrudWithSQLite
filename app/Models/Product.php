<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product,$image,$imageName,$extention,$derectory,$imageUrl;
    public static function newProduct($request)
    {
        self::$image = $request->file('image');
        self::$extention = self::$image->getClientOriginalExtension();
        self::$imageName = time().' '. self::$extention;
        self::$derectory = 'uploads/product-images/';
        self::$image->move(self::$derectory,self::$imageName);
        self::$imageUrl = self::$derectory.self::$imageName;

        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->productCode = $request->productCode;
        self::$product->description = $request->description;
        self::$product->image = self::$imageUrl;
        self::$product->save();
    }
    public static function updateProduct($request,$id)
    {
        self::$product = Product::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$image = $request->file('image');
            self::$extention = self::$image->getClientOriginalExtension();
            self::$imageName = time().' '. self::$extention;
            self::$derectory = 'uploads/product-images/';
            self::$image->move(self::$derectory,self::$imageName);
            self::$imageUrl = self::$derectory.self::$imageName;

        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::$product->name = $request->name;
        self::$product->productCode = $request->productCode;
        self::$product->description = $request->description;
        self::$product->image = self::$imageUrl;
        self::$product->save();

    }
    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();

    }
}
