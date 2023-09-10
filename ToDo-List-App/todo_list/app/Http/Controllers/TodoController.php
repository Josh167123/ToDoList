<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {

        return view('welcome', ['listItems' => Todo::all()]);
    }

    public function markComplete($id) {

        $listItem = Todo::find($id);
        if($listItem->completed == 0){
         $listItem->completed = 1;    
        }
        else {
         $listItem->completed = 0;    
        }
       
        $listItem->save();

        return redirect('/');
    }

    public function saveItem(Request $request) {

        $newListItem = new Todo;
        $newListItem->name = $request->listItem;
        $newListItem->completed = 0;
        $newListItem->save();

        return redirect('/');
    }

    public function removeItem($id) {

        $deleted = Todo::find($id);
        $deleted->delete();

        return redirect('/');
    }

    public function editItem(Todo $listItem){

        return view('edit',['listItem' => $listItem]);
    }

    public function update(Request $request, $id){

        $listItem = Todo::where('id', $id);
        $listItem->update(['name' => $request->name ]);
        
        return redirect('/');
    }
  
}
