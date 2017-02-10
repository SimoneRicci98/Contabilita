<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prova extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
    }

    public function returnpaginainiziale()
    {
        return view('paginainiziale');
    }
    public function returnchisiamo()
    {
        return view('chisiamo');
    }
    public function returnacquista()
    {
        return view('acquistaprova');
    }
    public function returnlogin()
    {
        return view('login');
    }
    public function returnregistrati()
    {
        return view('registrati');
    }

    public function primanota()
    {
        return view('primanota');
    }
    public function pagamento()
    {
        return view('metodopagamento');
    }
    public function grazie()
    {
        return view('grazie');
    }

    public function postVersion(Request $request)
    {
        $version = $request->optionsRadios;
        $request->session()->put('version', $version);
        return redirect('register');
    }

}
