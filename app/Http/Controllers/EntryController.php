<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;
use \App;

class EntryController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function create (){
        return view ('/entries/create');
    }

    public function store (Request $request){
        $validatedData = $request -> validate ([
            'title'=>'required|min:7|max:255|unique:entries',
            'content'=>'required|min:25|max:3000',
        ]);
        $entry = new Entry();
        $entry -> title =$validatedData['title'];
        $entry -> content =$validatedData['content'];
        $entry -> user_id = auth() -> id();
        $entry -> save(); //insert
        $status="Tu entrada fue publicada exitosamente";
        return back() -> with(compact('status'));
    }
    public function edit(Entry $entry){
        $this->authorize('update',$entry);
return view('entries.edit', compact('entry') );
    }

    public function update (Request $request, Entry $entry ){
        $this->authorize('update',$entry);  
        $validatedData = $request -> validate ([
            'title'=>'required|min:7|max:255|unique:entries,id,'.$entry ->id,
            'content'=>'required|min:25|max:3000',
        ]);

        $entry -> title =$validatedData['title'];
        $entry -> content =$validatedData['content'];
        $entry -> save(); //insert
        $status="Tu entrada fue editada exitosamente";
        return back() -> with(compact('status'));
    }
}
