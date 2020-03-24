<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candie;

class CandieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $candies = Candie::all();

      return view('candies.index', compact('candies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('candies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      $request->validate([
        'isbn' => 'required|numeric',
        'price' => 'required|numeric|mix:1|max:9999.99',
        'genre' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'color' => 'required|string|max:255'
      ]);

      $candie = new Candie;
      // $candie ->isbn = $data['isbn'];
      // $candie ->price = $data['price'];
      // $candie ->genre = $data['genre'];
      // $candie ->name = $data['name'];
      // $candie ->color = $data['color'];
      // $save = $candie->save();
      $newCandie->fill($data);
      $save = $newCandie->save();

      if ($save == true) {
        return redirect()->route('candies.index');
      }
       dd('Non salvato');
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
}
