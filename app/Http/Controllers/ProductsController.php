<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        /*$products = DB::table('products')
            ->join('units', 'units.id', '=', 'products.unit_id')
            ->select('products.*', 'units.name as units')
            ->get();*/
        return view('menu');
    }

    public function productsEdit(){
        return view('admin.products');
    }

    public function saveChanges($product)
    {
        $product = json_decode($product, true);

        $id = $product['id'];
        $product = [
            'name' => $product['name'],
            'price' => $product['price'],
            'unit_id' => $product['unit_id'],
            'show' => $product['show'],
            'amount' => $product['amount'],
        ];
        DB::table('products')
            ->where('id', $id)
            ->update($product);
    }

    public function del($id)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();
    }

    public function update(Request $request)
    {
        //return var_dump($request->all());
        $product = Product::find($request->post('id'));
        $product->name = $request->post('name');
        $product->price = $request->post('price');
        $product->amount = $request->post('amount');
        $product->show = ($request->post('show'))?1:0;
        $product->save();
        return redirect()->back();
    }

    public function getAllForAdmin()
    {
        $products = DB::table('products')
            ->get();
        return compact('products');
        /*$products = Product::all();
        return view('admin/products1', compact('products'));*/
    }

    public function getAll()
    {
        $products = DB::table('products')
            ->join('units', 'units.id', '=', 'products.unit_id')
            ->where('show', 1)
            ->select('products.*', 'units.name as units')
            ->get();
        return compact('products');
    }
}
