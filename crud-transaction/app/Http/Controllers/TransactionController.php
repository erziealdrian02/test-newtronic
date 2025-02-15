<?php

namespace App\Http\Controllers;

use App\Models\MasterDetailTransaksi;
use App\Models\MasterProduk;
use App\Models\MasterTransaksi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TransactionController extends Controller
{
    public function transaction(Request $request): View
    {
        $AllMasterTransaction = MasterTransaksi::with(['detailTransaksi.produk'])->get();
        $produkList = MasterProduk::get();
        $MasterDetail = MasterDetailTransaksi::with(['transaksi', 'produk'])->get();
        $MasterTransaction = MasterTransaksi::with(['detailTransaksi.produk'])  // Tambahkan with() di sini
            ->orderBy('id', 'desc')
            ->first();

        // Tentukan kode transaksi berikutnya
        $lastCode = $MasterTransaction ? intval(substr($MasterTransaction->kode_transaksi, 3)) : 0;
        $newCode = 'TRX' . str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);

        return view('transaction', [
            'user' => $request->user(),
            'MasterDetail' => $MasterDetail,
            'MasterTransaction' => $MasterTransaction,
            'newCode' => $newCode, // Kirim ke view
            'AllMasterTransaction' => $AllMasterTransaction,
            'produkList' => $produkList,
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'required|unique:master_transaksis,kode_transaksi',
            'tanggal' => 'required|date',
            'produk' => 'required|array',
            'produk.*' => 'exists:master_produks,id',
            'quantity' => 'required|array',
            'quantity.*' => 'integer|min:1',
            'harga' => 'required|array',
            'harga.*' => 'integer|min:0',
        ]);

        // Simpan transaksi
        $transaksi = MasterTransaksi::create([
            'kode_transaksi' => $request->kode_transaksi,
            'tanggal' => $request->tanggal,
        ]);

        // Simpan detail transaksi dan kurangi stok produk
        foreach ($request->produk as $index => $id_produk) {
            $product = MasterProduk::find($id_produk);

            if (!$product) {
                return redirect()->back()->with('error', 'Produk dengan ID ' . $id_produk . ' tidak ditemukan!');
            }

            if ($product->stok < $request->quantity[$index]) {
                return redirect()->back()->with('error', 'Stok tidak mencukupi untuk produk ' . $product->nama_produk);
            }

            // Buat detail transaksi
            MasterDetailTransaksi::create([
                'id_transaksi' => $transaksi->id,
                'id_produk' => $id_produk,
                'quantity' => $request->quantity[$index],
            ]);

            // Kurangi stok di tabel MasterProduk
            $product->decrement('stok', $request->quantity[$index]);
        }

        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan!');
    }

    public function storeProduct(Request $request)  
    {  
        $transaksi = MasterTransaksi::where('kode_transaksi', $request->kode_transaksi)->first();  

        if (!$transaksi) {  
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan!');  
        }  

        if (empty($request->produk) || empty($request->quantity)) {  
            return redirect()->back()->with('error', 'Produk atau quantity tidak boleh kosong!');  
        }  

        foreach ($request->produk as $index => $id_produk) {  
            $product = MasterProduk::find($id_produk);
            $existingDetail = MasterDetailTransaksi::where('id_transaksi', $transaksi->id)
                ->where('id_produk', $id_produk)
                ->first();

            if (!$product) {
                return redirect()->back()->with('error', 'Produk dengan ID ' . $id_produk . ' tidak ditemukan!');
            }

            if ($product->stok < $request->quantity[$index]) {
                return redirect()->back()->with('error', 'Stok tidak mencukupi untuk produk ' . $product->nama_produk);
            }

            if ($existingDetail) {
                // Jika produk sudah ada, update quantity
                $existingDetail->update([
                    'quantity' => $request->quantity[$index],
                ]);
            } else {
                // Jika produk belum ada, tambahkan baru
                MasterDetailTransaksi::create([
                    'id_transaksi' => $transaksi->id,
                    'id_produk' => $id_produk,
                    'quantity' => $request->quantity[$index],
                ]);
    
                // Kurangi stok di tabel MasterProduk
                $product->decrement('stok', $request->quantity[$index]);
            }
        }  

        return redirect()->route('transaction')->with('success', 'Produk berhasil diperbarui dalam transaksi.');
    }

    public function deleteProduct($id_transaksi, $id_produk)
    {
        // Cek apakah transaksi ada
        $transaksi = MasterTransaksi::find($id_transaksi);
        if (!$transaksi) {
            return response()->json(['success' => false, 'message' => 'Transaksi tidak ditemukan!'], 404);
        }

        // Cek apakah produk ada di detail transaksi yang terkait dengan transaksi ini
        $detailTransaksi = MasterDetailTransaksi::where('id_transaksi', $id_transaksi)
            ->where('id_produk', $id_produk)
            ->first();

        if (!$detailTransaksi) {
            return response()->json(['success' => false, 'message' => 'Produk tidak ditemukan dalam transaksi ini!'], 404);
        }

        // Hapus produk dari transaksi
        $detailTransaksi->delete();

        return response()->json(['success' => true, 'message' => 'Produk berhasil dihapus!']);
    }

    public function deleteTransaction($id)
    {
        // Cek apakah transaksi ada
        $transaksi = MasterTransaksi::findOrFail($id);
        if (!$transaksi) {
            return redirect()->route('transaction')->with('error', 'Transaksi tidak ditemukan.');
        }

        // Hapus produk dari transaksi
        $transaksi->delete();

        return redirect()->route('transaction')->with('success', 'Transaksi berhasil di hapus.');
    }

}
