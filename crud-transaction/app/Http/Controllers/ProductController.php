<?php

namespace App\Http\Controllers;

use App\Models\MasterDetailTransaksi;
use App\Models\MasterProduk;
use App\Models\MasterTransaksi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $produkList = MasterProduk::get();

        return view('product', [
            'user' => $request->user(),
            'produkList' => $produkList,
        ]);
    }

    public function store(Request $request)
    {
        $product = new MasterProduk();
        $product->produk = $request->nama_product;
        $product->stok = $request->stok;
        $product->harga = str_replace('.', '', $request->harga);
        // dd($product);

        $product->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

    public function delete($id)
    {
        // Cek apakah transaksi ada
        $product = MasterProduk::findOrFail($id);
        if (!$product) {
            return redirect()->route('transaction')->with('error', 'product tidak ditemukan.');
        }

        // Hapus produk dari product
        $product->delete();

        return redirect()->route('product')->with('success', 'Product berhasil di hapus.');
    }
}
