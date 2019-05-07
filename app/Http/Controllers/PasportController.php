<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasport;
use Auth;
use App\User;


class PasportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $pasport = Pasport::orderBy('id','DESC')->where('iduser',$id)->get();

        $listUser = User::orderBy('id','DESC')->where('id', '!=', auth()->id())->get(); 
        $listPasport = Pasport::orderBy('id','DESC')->get();
        return view('home',['pasport'=>$pasport, 'listUser'=>$listUser, 'listPasport'=>$listPasport]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $id = Auth::user()->id;
        // $user = User::find($id);
        // return view('pasport.create', ['user'=>$user]);
        return view('pasport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pasport = new Pasport;
            
        $pasport->iduser = $request->iduser;        
        $pasport->kantor = $request->kantor;        
        $pasport->tgl = $request->tgl;      
        $pasport->waktu = $request->waktu;      
        $pasport->jenis = $request->jenis;      
        $pasport->kode = $request->kode;      
        $pasport->biaya = $request->biaya;              
        
        $pasport->save();
        return redirect('/home');
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
        $pasport = Pasport::find($id);
        return view('pasport.details',['pasport'=>$pasport]);
    }

    public function showPasport($id, $idUser)
    {
        //
        $user = User::find($idUser);
        $pasport = Pasport::find($id);
        return view('pasport.details',['pasport'=>$pasport, 'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pasport = Pasport::find($id);
        return view('pasport.edit',['pasport'=>$pasport]);
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
        //
        $pasport = Pasport::find($id);
            
        // $pasport->iduser = $request->iduser;        
        // $pasport->kantor = $request->kantor;        
        // $pasport->tgl = $request->tgl;      
        // $pasport->waktu = $request->waktu;      
        // $pasport->jenis = $request->jenis;      
        // $pasport->kode = $request->kode;      
        // $pasport->biaya = $request->biaya;              
        // $random = (string)mt_rand(10,1000);
        $pasport->kode = 'Kode antrian anda ' . mt_rand(10,1000);
        
        $pasport->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pasport = Pasport::destroy($id);
        return redirect('/home');
    }
}
