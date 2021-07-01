<?php

namespace App\Http\Controllers;

use App\Models\ExtraPhoneInfo;
use App\Models\Telefoon;
use Illuminate\Http\Request;

class ExtraPhoneInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = ExtraPhoneInfo::all()->first();
        return view('phoneinfo.index', compact('infos'));
    }

    public  function  indexTwo($id){
        $infos = ExtraPhoneInfo::find($id);
        $telefoon = Telefoon::find($id);
        return view('extrainfo', compact('infos', 'telefoon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('phoneinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infos = new extraphoneinfo ([
            'kleur' => $request->kleur,
            'gewicht' => $request->gewicht,
            'besturingssysteem' => $request->besturingssysteem,
            'scherm' => $request->scherm,
            'schermgrootte' => $request->schermgrootte,
            'resolutie' => $request->resolutie,
            'cameras' => $request->cameras,
            'aantalcameras' => $request->aantalcameras,
            'werkgeheugen' => $request->werkgeheugen,
            'batterij' => $request->batterij,
            'draadloos' => $request->draadloos,
            'vingerafdrukscanner' => $request->vingerafdrukscanner,
            'netwerk' => $request->netwerk,
            'introductiejaar' => $request->introductiejaar,
            'telefoons_id' => $request->telefoons_id,
        ]);
        $infos->save();
        return  redirect('/phoneinfo');
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
        $infos = extraphoneinfo::find($id);
        return view('phoneinfo.edit', compact('infos'));
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
        $infos = extraphoneinfo::find($id);
            $infos->kleur = $request->kleur;
            $infos->gewicht = $request->gewicht;
            $infos->besturingssysteem = $request->besturingssysteem;
            $infos->scherm = $request->scherm;
            $infos->schermgrootte = $request->schermgrootte;
            $infos->resolutie = $request->resolutie;
            $infos->cameras = $request->cameras;
            $infos->aantalcameras = $request->aantalcameras;
            $infos->werkgeheugen = $request->werkgeheugen;
            $infos->batterij = $request->batterij;
            $infos->draadloos = $request->draadloos;
            $infos->vingerafdrukscanner = $request->vingerafdrukscanner;
            $infos->netwerk = $request->netwerk;
            $infos->introductiejaar = $request->introductiejaar;
            $infos->telefoons_id = $request->telefoons_id;

        $infos->save();
        return redirect('/phoneinfo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infos = extraphoneinfo::find($id);
        $infos->delete();
        return redirect('/phoneinfo');
    }
}
