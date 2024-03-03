<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\makanan;
use App\Models\reservation;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function user()
    {
        $data=user::orderBy('id','desc')->paginate(10);
        return view("admin.user", compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function menumakanan()
    {
        $data=makanan::all();
        return view("admin.menumakanan", compact("data"));
    }
    public function tambahmakanan()
    {
        return view("admin.tambahmakanan");
    }
    public function uploadmakanan(Request $request)
    {
        $data = new makanan;

        $gambar=$request->gambar;

        $imagename =time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('foodimage', $imagename);

            $data->gambar=$imagename;

            $data->nama=$request->nama;
            $data->harga=$request->harga;
            $data->deskripsi=$request->deskripsi;

            $data->save();

            return redirect("/menumakanan");
    }

    public function deletemenu($id)
    {
        $data=makanan::find($id);
        $data->delete();
        return redirect()->back()->with('succes','Data berhasil dihapus!');
    }

    public function editmakanan($id)
    {
        $data=makanan::find($id);
        return view("admin.editview", compact("data"));
    }

    public function edit(Request $request, $id)
    {
        $data=makanan::find($id);

        $gambar=$request->gambar;

        $imagename =time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('foodimage', $imagename);

            $data->gambar=$imagename;

            $data->nama=$request->nama;
            $data->harga=$request->harga;
            $data->deskripsi=$request->deskripsi;

            $data->save();

            return redirect("/menumakanan");
    }

    public function reservation(Request $request)
    {
        $data = new reservation;
            
            $data->name=$request->name;
            $data->email=$request->email;
            $data->phone=$request->phne;
            $data->guest=$request->guest;
            $data->date=$request->date;
            $data->time=$request->time;
            $data->massage=$request->massage;

        $data->save();

        return redirect()->back();
    }

    public function viewreservasi()
    {
        $data=reservation::all();
        return view("admin.adminreservation", compact("data"));
    }
   
}