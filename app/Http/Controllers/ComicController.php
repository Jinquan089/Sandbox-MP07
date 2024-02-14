<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comic = Comic::orderBy('id','asc')->paginate();
        return view('comic.index',compact('comic'));
    }
    public function create(){
        return view('comic.create');
    }
    public function show($id){
        $comic=Comic::find($id);
        return view('comic.show',compact('comic'));
    }
    public function store(Request $request){
        $comic = new Comic;
        $comic->title = $request->title;
        $comic->collection = $request->collection;
        $comic->genre = $request->genre;
        $comic->save();
        return redirect()->route('comic.show',$comic->id);
    }

    public function edit($id){
        $comic = Comic::find($id);
        return view('comic.edit',compact('comic'));
    }

    public function update(Request $request, Comic $comic){
        $comic->title = $request->title;
        $comic->collection = $request->collection;
        $comic->genre = $request->genre;
        $comic->save();
        return redirect()->route('comic.show',$comic->id);
    }

    public function destroy(Comic $comic) {
        $comic->delete();
        return redirect()->route('comic.index');
    }
}
