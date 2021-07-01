<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telefoon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TelefoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $telefoons = DB::table('telefoons')
            ->join('extra_phone_infos', 'telefoons.id', '=', 'extra_phone_infos.id')
            ->select('telefoons.*', 'extra_phone_infos.*')
            ->get();

        return view('telefoons.index', compact('telefoons'));
    }

    public function indexTwo(){
        $telefoons = Telefoon::all();
        return view('index', compact('telefoons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('telefoons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $telefoon = new telefoon ([
            'model' => $request->model,
            'fabrikant' => $request->fabrikant,
            "geheugen" => $request->geheugen,
            'prijs' => $request->prijs
        ]);
        $telefoon->save();
        return redirect('/telefoons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $telefoon = Telefoon::find($id);
        return view('telefoons.edit', compact('telefoon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $telefoon = Telefoon::find($id);
            $telefoon->model = $request->model;
            $telefoon->fabrikant = $request->fabrikant;
            $telefoon->geheugen = $request->geheugen;
            $telefoon->prijs = $request->prijs;

        $telefoon->save();
        return redirect('/telefoons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $telefoon = Telefoon::find($id);
        $telefoon->delete();
        return  redirect('/telefoons');
    }
}
