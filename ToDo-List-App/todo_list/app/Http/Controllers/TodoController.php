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
        $listItem->completed = 1;
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

  
}
