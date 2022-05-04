<?php

namespace App\Http\Controllers;

use App\Models\Musteri;
use Illuminate\Http\Request;

class MusteriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musteriler = Musteri::Paginate(5);

        return view("musteri.index",compact("musteriler"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("musteri.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "ad" => "required|min:5",
            "soyad" => "required",
            "maas" => "required"
        ]);

        Musteri::create($request->all());
    return redirect()->back()->with("olumlu","Kayıt ekleme işlemi başarılı bir şekilde gerçekleşti");
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
    public function edit(Musteri $musteri)
    {
        return view("musteri.edit",compact("musteri"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musteri $musteri)
    {
        $request->validate([
            "ad" => "required|min:5",
            "soyad" => "required",
            "maas" => "required"
        ]);

        $musteri->ad = $request->ad;
        $musteri->soyad = $request->soyad;
        $musteri->maas = $request->maas;

        $musteri->save();
        return redirect()->back()->with("olumlu","Güncelleme işlemi başarılı bir şekilde gerçekleşti");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musteri $musteri)
    {
      $musteri->delete();
      return redirect()->back()->with("olumlu","Silme işlemi başarılı");
    }
}
