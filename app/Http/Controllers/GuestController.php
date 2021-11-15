<?php
namespace App\Models;
namespace App\Http\Controllers;
use App\Models\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
         $entries =Entry::with('user')
         ->orderByDesc('created_at')
         ->orderByDesc('id')
         ->paginate(10);  //al poner paginate(), ennumera todos aquellos
         //datos en una cantidad especificada por el numero dentro del parentesis
        return view ('welcome', compact('entries'));
    }
    public function show(Entry $entry){

        return view ('entries.show', compact('entry'));
    }
}
