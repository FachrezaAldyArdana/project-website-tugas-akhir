<?php

namespace App\Http\Controllers;

use App\Models\Tembuk;
use Illuminate\Http\Request;

class DashboardControlller extends Controller
{
    public function index(){
        $tembuk = Tembuk::all();
        return view('tembuk.index',compact(['tembuk']));
    }
    public function create(){
        return view('tembuk.create');
    }
    public function store(Request $request){
        tembuk::create($request->except(['_token','_submit']));
        return redirect('/dashboard');

    }
    public function edit($id){
        $tembuk=Tembuk::find($id);
        return view('tembuk.edit',compact(['tembuk']));

    }
    public function update($id, Request $request){
        $tembuk=Tembuk::find($id);
        $tembuk->update($request->except(['_token','_submit']));
        return redirect('/dashboard');

    }
    public function destroy($id){
        $tembuk=Tembuk::find($id);
        $tembuk->delete();
        return redirect('/dashboard');

    }
}
