<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    //Author: Akmal Muhamad Firdaus - 1301204188
    public function index()
    {
        $products = Products::get();
        //dd($products);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.form', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'products'
        ]);            
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'description' => 'required|min:4',
            'price' => 'required|integer|min:1000',
            'stock' => 'required|integer|min:1'
        ]);
        $prod = new Products;
        $prod->name = $request->name;
        $prod->description = $request->description;
        $prod->price = $request->price;
        $prod->stock = $request->stock;
        $prod->save();
        return redirect('/products')->with('msg', 'Berhasil menambahkan product!');
    }

    public function show($id)
    {
        return Products::find($id);
    }

    public function edit($id)
    {
        if(Products::find($id)){
            return view('product.form', [
                'title' => 'Edit',
                'method' => 'PUT',
                'action' => "products/$id",
                'data' => Products::find($id)
            ]);
        } else {
            return redirect('/products')->with('error', 'Product tidak ditemukan!');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'description' => 'required|min:4',
            'price' => 'required|integer|min:1000',
            'stock' => 'required|integer|min:1'
        ]);
        $prod = Products::find($id);
        $prod->name = $request->name;
        $prod->description = $request->description;
        $prod->price = $request->price;
        $prod->stock = $request->stock;
        $prod->save();
        return redirect('/products')->with('msg', 'Berhasil mengubah product!');
    }

    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('/products')->with('msg', 'Berhasil menghapus product!');
    }
}
