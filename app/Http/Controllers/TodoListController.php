<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    public function saveItem(Request $request)
    {
        //log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->leiras = $request->list;
        $newListItem->befejezett = 0;
        $newListItem->save();
        return redirect('/');
    }
    public function index(){
        return view('welcome',['ListItem' => ListItem::where('befejezett',0)->get()]);
    }
    public function tevekenysegKesz($id){
        $listItem = ListItem::find($id);
        $listItem->befejezett = 1;
        $listItem->save();
        return redirect('/');
    }
}
