<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use Auth;

class PesananController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Pesanan::where('user_id',$user->id)->latest()->paginate(20);

        // Menghitung total harga
        $data = $this->countTotalHarga($data);

        // dd($data);
        
        return view('riwayat_pemesanan',compact(['data']));
    }

    public function countTotalHarga($data)
    {
        foreach($data as $item)
        {
            $t_harga = $item['jumlah'] * env('HARGA_KAOS');
            $t_harga = "Rp " . number_format($t_harga,2,',','.');

            $item['total_harga'] = $t_harga;
        }

        return $data;
    }

    public function create()
    {
        return view('pemesanan');
    }

    public function index_admin()
    {
        $data = Pesanan::latest()->paginate(20);

        // Menghitung total harga
        $data = $this->countTotalHarga($data);

        // return view('admin.daftar-pesanan',compact(['data']));
        return view('admin.daftar-pesanan',['data' => $data]);

    }

    public function store(Request $request)
    {
 
        $request->validate([
            'varian' => 'required',
            'ukuran' => 'required',
            'jumlah' => 'required|integer',
            
            'nama_penerima' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'bukti_transfer' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        
        // define user id
        $user = Auth::user();
        $input['user_id'] = $user->id;

        // saving image
        if ($image = $request->file('bukti_tranfer')) {
            $destinationPath = 'image/';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['bukti_tranfer'] = "$imageName";
        }

        Pesanan::create($input);
     
        return redirect()->route('pemesanan')
                        ->with('success','Pesanan created successfully.');
    }

    public function updateResi(Request $request)
    {
        $request->validate([
            'resi' => 'required',
        ]);

        $input = $request->all();

        // dd($input);

        $model = Pesanan::find($input['pesanan_id']);
        $model->update([
            'resi' => $input['resi']]
        );

        return redirect()->route('pesanan.index_admin')
                        ->with('success','Resi updated successfully.');
        // return Response::json($cart->update($request->all()));


    }

    public function destroy(Pesanan $pesanan)
    {
        
        $pesanan->delete();

        return redirect()->route('pesanan.index_admin')
            ->with('success', 'Data deleted successfully');
    }
}
