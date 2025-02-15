<?php

namespace App\Http\Controllers;

use App\Models\MasterDetailTransaksi;
use App\Models\MasterProduk;
use App\Models\MasterTransaksi;
use App\Models\User;
use App\Models\MasterCrawl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Goutte\Client;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $getUser = User::get()->count();
        $getTransaksi = MasterTransaksi::get()->count();
        $getProduct = MasterProduk::get()->count();
        $getRevenue = MasterDetailTransaksi::with('produk')->get()->sum(function ($detail) {
            return $detail->quantity * $detail->produk->harga;
        });

        return view('dashboard', [
            'user' => $request->user(),
            'getUser' => $getUser,
            'getTransaksi' => $getTransaksi,
            'getProduct' => $getProduct,
            'getRevenue' => $getRevenue,
        ]);
    }

    public function crawlData()
    {
        $url = 'https://www.smartdeal.co.id/rates/dki_banten';
        
        // Ambil HTML dari website
        $response = Http::get($url);
        $html = $response->body();

        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML($html);
        $xpath = new \DOMXPath($dom);

        // Ambil semua baris dalam tabel
        $rows = $xpath->query("//table[@id='tableExchange']//tr[contains(@class, 'body')]");

        $kursData = [];

        foreach ($rows as $row) {
            $cells = $row->getElementsByTagName('td');

            // Pastikan baris memiliki cukup kolom
            if ($cells->length >= 4) {
                $currency = trim($cells->item(0)->textContent); // Mata uang
                $denomination = trim($cells->item(1)->textContent); // Mata uang
                $buy = trim($cells->item(2)->textContent); // Harga beli
                $sell = trim($cells->item(3)->textContent); // Harga jual

                // Hapus karakter ekstra seperti spasi dan newline
                $currency = preg_replace('/\s+/', ' ', $currency);
                $denomination = str_replace(',', '', $denomination);
                $buy = str_replace(',', '', $buy); // Hilangkan koma dalam angka
                $sell = str_replace(',', '', $sell);

                // Simpan ke array hasil
                $kursData[] = [
                    'currency' => $currency,
                    'denomination' => $denomination,
                    'buy' => $buy,
                    'sell' => $sell,
                ];
            }
        }

        return response()->json($kursData);
    }

    public function store(Request $request)
    {
        try {
            $jsonData = $request->input('json_data');
            
            if (!is_array($jsonData)) {
                return response()->json(['error' => 'Invalid JSON data'], 400);
            }
            
            foreach ($jsonData as $data) {
                MasterCrawl::create([
                    'currency' => $data['currency'] ?? '',
                    'denomination' => $data['denomination'] ?? null,
                    'buy' => str_replace(',', '', $data['buy']),
                    'sell' => str_replace(',', '', $data['sell']),
                ]);
            }
            
            return response()->json(['message' => 'Data successfully saved!']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
