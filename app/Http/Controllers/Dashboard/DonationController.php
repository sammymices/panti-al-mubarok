<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DonationController extends Controller
{
    // Menampilkan donasi uang
    public function viewUang(): View
    {
        $donations = Donation::with('user')->where(['status' => 'settlement', 'donation_type' => 'uang'])->get();
        return view('dashboard.pages.donation.uang', compact('donations'));
    }

    // Menampilkan donasi barang
    public function viewBarang(): View
    {
        $donations = Donation::with('user')->where(['status' => 'settlement', 'donation_type' => 'barang'])->get();
        return view('dashboard.pages.donation.barang', compact('donations'));
    }

    // Menampilkan form untuk membuat donasi baru
    public function create(): View
    {
        return view('dashboard.pages.donation.create');
    }

    // Menampilkan form edit donasi
    public function edit($id): View
    {
        $data = Donation::where('order_id', $id)->first();
        return view('dashboard.pages.donation.edit', compact('data'));
    }

    // Menyimpan donasi baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'description' => 'required',
            'photo' => 'required|image',
        ]);

        $data['photo'] = Storage::disk('public')->put('file', $request->file('photo'));
        $data['order_id'] = mt_rand(10000, 1000000);
        $data['date'] = Carbon::now();
        $data['user_id'] = auth()->id();
        $data['status'] = 'settlement';
        $data['donation_type'] = $request->input('donation_type'); // Pastikan ini diisi dari form

        Donation::create($data);

        return to_route('dashboard.donation.' . $data['donation_type'] . '.index')->with('success', 'Donasi berhasil disimpan!');
    }

    // Mengupdate donasi
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = Storage::disk('public')->put('file', $request->file('photo'));
        }

        Donation::where('order_id', $id)->update($data);

        return to_route('dashboard.donation.uang.index')->with('success', 'Data donasi berhasil diperbarui!');
    }

    // Menghapus donasi
    public function destroy($id)
    {
        $data = Donation::where('order_id', $id)->first();

        if ($data && Storage::exists('public/' . $data->photo)) {
            Storage::delete('public/' . $data->photo);
        }

        Donation::where('order_id', $id)->delete();

        return to_route('dashboard.donation.uang.index')->with('success', 'Berhasil menghapus donasi!');
    }

    // Metode untuk mencetak donasi uang
    public function printMoneyDonation()
    {
        $donations = Donation::with('user')->where(['status' => 'settlement', 'donation_type' => 'uang'])->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadview('dashboard.pages.donation.printMoneyDonation', compact('donations'));
        return $pdf->stream();
    }

    public function storeMoney(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'description' => 'nullable',
            'photo' => 'required|image', // Pastikan foto adalah gambar
        ]);
    
        // Simpan foto jika ada
        $data['photo'] = Storage::disk('public')->put('file', $request->file('photo'));
        $data['order_id'] = mt_rand(10000, 1000000);
        $data['date'] = Carbon::now();
        $data['user_id'] = Auth()->id();
        $data['status'] = 'settlement';
        $data['donation_type'] = 'uang'; // Set donation_type ke 'uang'
    
        Donation::create($data);
    
        return to_route('dashboard.donation.uang.index')->with('success', 'Donasi uang berhasil disimpan!');
    }

}