<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Type;
use Illuminate\Http\Request;

class PartController extends Controller
{
 
    public function init()
    {
        return view('index', ['type'=>Type::all(), 'part'=>Part::paginate(30)]);
    }

    public function dashboard()
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Dashboard', 'result'=>"", 'msg'=>""]);
    }

    public function search($id)
    {
        return view('index', ['type'=>Type::all(), 'part'=>Part::where('type_id', $id)->paginate(30)]);
    }
    public function index()
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Peças', 'result'=>Part::paginate(10), 'msg'=>"não"]);
    }

  
    public function create($msg)
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Peças', 'result'=>Part::paginate(10), 'msg'=>$msg]);
    }

    public function store(Request $request)
    {
        if($request->hasFile('path')){
            $filenameWithExt = $request->file('path')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('path')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('path')->storeAs('public/img/sistema/', $fileNameToStore);
            $img = 'img/sistema/'. $fileNameToStore;
        } else {
            $img = 'noimage.png';
        } 

        $db = New Part;
        $db->name = $request->name;
        $db->description = $request->description;
        $db->price = $request->price;
        $db->type_id = $request->type;
        $db->path = $img;
        $db->save();
        return $this->create("A peça foi cadastrada com sucesso!!!");
        // chamar retorno trazendo 3 parametros tipo resultado e o type do navbar
    }

   
    public function show($id)
    {
        $type = Part::find($id)->types;
        $part = Part::find($id);
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'showParts', 'part'=>$part,'types'=> $type]);
    }

   
    public function edit($id)
    {
        $type = Part::find($id)->types;
        $part = Part::find($id);
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'editParts', 'part'=>$part,'types'=> $type]);
    }

    
    public function update(Request $request, $id)
    {
        if($request->hasFile('path')){
            $filenameWithExt = $request->file('path')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('path')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('path')->storeAs('public/img/sistema/', $fileNameToStore);
            $img = 'img/sistema/'. $fileNameToStore;
        } else {
            $img = $request->img;
        } 
        $update = Part::findOrFail($id);
        $update->name = $request->name;
        $update->price = $request->price;
        $update->description = $request->description;
        $update->type_id = $request->type;
        $update->path = $img;
        $update->save();
        return $this->create("A peça foi editada com sucesso!!!");
    }

   
    public function destroy($id)
    {
        Part::destroy($id);
        return $this->create("A peça foi DELETADA com sucesso!!!");
    }

}
