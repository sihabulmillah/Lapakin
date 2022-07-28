<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Symfony\Contracts\Service\Attribute\Required;

class LapakinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $new_data;
    public $new_kategori;
    public $new_slider;
    public function __construct()
    {
        $this->new_data = new Barang();
        $this->new_kategori = new Kategori();
        $this->new_slider = new Slider();
    }

    public function index()
    {
        $data = DB::table("barang")->get();
        $count = DB::table('barang')->count();
        $countK = DB::table('kategori')->count();
        $countS = DB::table('slider')->count();
        return view('dashboard', [
            "data_barang" => $data,
            "jumlah_barang" => $count,
            "jumlah_kategori" => $countK,
            "jumlah_slider" => $countS
        ]);
    }

    public function kategori()
    {
        $data = DB::table("kategori")->get();
        return view('Kategori.kategori', ["data" => $data]);
    }

    public function slider()
    {
        $data = DB::table("slider")->get();
        return view('Slide.slider', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|min:3|max:50|',
            'kategori' => 'required',
            'harga' => 'required|digits_between:4,6',
            'stock' => 'required|',
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
            'digits_between' => ":attribute min 4 digit max 6 digit",
        ];

        $this->validate($request, $rules, $message);



        $this->new_data->nama_barang = $request->nama;
        $this->new_data->slug = Str::slug($request->nama);
        $this->new_data->kategori = $request->kategori;
        $this->new_data->harga = $request->harga;
        $this->new_data->stok = $request->stock;


        $this->new_data->save();

        return redirect()->route('dashboard')->with('status', 'Data barang berhasil di tambahkan');
    }

    public function storeKategori(Request $request)
    {
        $rules = [
            'kategori' => 'required|min:3|max:50'
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
        ];

        $this->validate($request, $rules, $message);

        $this->new_kategori->kategori = $request->kategori;
        $this->new_kategori->save();
        return redirect()->route('kategori')->with('status', 'Data kategori berhasil di tambahkan');
    }
    public function storeSlider(Request $request)
    {
        $rules = [
            'keterangan' => 'required|min:3|max:50',
            'image' => 'required|max:500|mimes:jpg,jpeg,png'
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
            'mimes' => ":attribute ekstensi error, gunakan : .png, .jpg, .jpeg"
        ];

        $this->validate($request, $rules, $message);

        $this->new_slider->keterangan = $request->keterangan;
        $foto = $request->image;
        $nama_file = $foto->getClientOriginalName();
        $this->new_slider->foto = $nama_file;
        $foto->move(public_path() . "/skydash/image", $nama_file);
        $this->new_slider->save();

        return redirect()->route('slider')->with('status', 'Data slider berhasil di tambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('barang')->find($id);
        return view('editdata', ['edit' => $data]);
    }
    public function editKategori($id)
    {
        $data = DB::table('kategori')->find($id);
        return view('Kategori.editkategori', ['edit' => $data]);
    }

    public function editSlider($id)
    {
        $data = DB::table('slider')->find($id);
        return view('Slide.editslider', ['edit' => $data]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required|min:3|max:50|',
            'harga' => 'required|digits_between:4,6',
            'stock' => 'required|',
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
            'digits_between' => ":attribute min 4 digit max 6 digit",
        ];

        $this->validate($request, $rules, $message);


        // dd($request->all());
        // die;
        // Mendcari ID nya
        $update_data = Barang::find($id);

        // Menangkap Perubahannya
        $update_data->nama_barang = $request->nama;
        $update_data->slug = Str::slug($request->nama);
        $update_data->kategori = $request->kategori;
        $update_data->harga = $request->harga;
        $update_data->stok = $request->stock;
        $update_data->update();

        return redirect()->route('dashboard')->with('status', 'Data barang berhasil di update');
    }
    public function updateKategori(Request $request, $id)
    {
        $rules = [
            'kategori' => 'required|min:3|max:50'
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
        ];

        $this->validate($request, $rules, $message);

        $update_kategori = Kategori::find($id);

        $update_kategori->kategori = $request->kategori;
        $update_kategori->update();

        return redirect()->route('kategori')->with('status', 'Data kategori berhasil di update');
    }
    public function updateSlider(Request $request, $id)
    {
        $rules = [
            'keterangan' => 'required|min:3|max:50',
        ];

        $message = [
            'required' => ":attribute tidak boleh kosong",
            'min' => ":attribute terlalu pendek",
            'max' => ":attribute terlalu panjang",
        ];

        $this->validate($request, $rules, $message);

        $update_slider = Slider::find($id);

        $update_slider->keterangan = $request->keterangan;
        $gbrlama = $update_slider->foto;

        if (!$request->image) {

            $update_slider->foto = $gbrlama;
        } else {
            if ($request->image != $gbrlama) {
                $gbrBaru = $request->image;
                $namafile = $gbrBaru->getClientOriginalName();
                $update_slider->foto = $namafile;
                $gbrBaru->move(public_path() . "/skydash/image", $namafile);
            } else {
                $request->image->move(public_path() . "/skydash/image" . $gbrlama);
            }
        }
        $update_slider->update();
        return redirect()->route('slider')->with('status', 'Data slider berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Barang::find($id);
        $hapus->delete();
        return redirect()->route('dashboard')->with('status', 'Data barang berhasil di hapus');
    }
    public function destroyKategori($id)
    {
        $hapus = Kategori::find($id);
        $hapus->delete();
        return redirect()->route('kategori')->with('status', 'Data kategori berhasil di hapus');
    }
    public function destroySlider($id)
    {
        $hapus = Slider::find($id);
        $hapus->delete();
        return redirect()->route('slider')->with('status', 'Data slider berhasil di hapus');
    }
}
