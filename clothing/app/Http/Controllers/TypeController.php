<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    
    public function index()
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Tipos', 'result'=>Type::paginate(10), 'msg'=>"não"]);
    }

 
    public function create($msg)
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Tipos', 'result'=>Type::paginate(10), 'msg'=>$msg]);
    }

    public function store(Request $request)
    {
        $db = New Type;
        $db->name = $request->name;
        $db->save();
        return $this->create("Item foi cadastrado com sucesso!");
    }

    public function show($id)
    {
        $type = Type::find($id);
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'showTypes', 'part'=>"",'types'=> $type]);
    }


    public function edit($id)
    {
        $type = Type::find($id);
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'editTypes', 'part'=>"",'types'=> $type]);
    }

    public function update(Request $request, $id)
    {
        $update = Type::findOrFail($id);
        $update->name = $request->name;
        $update->save();
        return $this->create("O tipo foi editado com sucesso!!!");
    }

    public function destroy($id)
    {
        Type::destroy($id);
        return $this->create("O tipo foi DELETADO com sucesso!!!");
    }
}
