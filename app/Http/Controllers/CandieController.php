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
        'price' => 'required|numeric|min:1|max:9999.99',
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
      $candie->fill($data);
      $save = $candie->save();


      if ($save == true) {
        $candie = Candie::orderBy('id', 'desc')->first();
        return redirect()->route('candies.index', compact('candie'));
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
        $candie = Candie::find($id);

        if(empty($candie)) {
          abort('404');
        }

        return view('candies.show', compact('candie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Candie $candie)
    {
      if(empty($candie)) {
        abort('404');
      }

      return view('candies.create', compact('candie'));
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
