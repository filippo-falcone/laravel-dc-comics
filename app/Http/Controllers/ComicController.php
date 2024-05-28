<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase = config('purchases');
        $comics = Comic::all();
        $data = [
            'purchases' => $purchase,
            'comics' => $comics
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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
        $this->validation($data);
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrfail($id);
        // if(!$comic){
        //     abort(404);
        // }
        $data = [
            'comic' => $comic
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $data = [
            'comic' => $comic
        ];
        return view('comics.edit', $data);
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
        $data = $request->all();
        $this->validation($data);
        $comic = Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|min:5|max:100',
                'description' => 'nullable|min:20|max:20000',
                'thumb' => 'required|min:10|max:255',
                'price' => 'required|decimal:2',
                'series' => 'required|min:4|max:50',
                'sale_date' => 'required|date',
                'type' => 'required|max:50'
            ],
            [
                'required' => 'Il campo :attribute è obbligatorio',
                'min' => 'Il campo :attribute deve essere di almeno :min caratteri',
                'max' => 'Il campo :attribute deve essere di massimo :max caratteri',
                'date' => 'Il campo :attribute deve essere una data',
                'decimal' => 'Il campo :attribute deve essere un numero decimale'
            ]
        )->validate();
        return $validator;
    }
}
