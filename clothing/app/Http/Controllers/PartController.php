<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Type;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Dashboard', 'result'=>"", 'msg'=>""]);
    }
    public function index()
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Peças', 'result'=>Part::paginate(10), 'msg'=>"não"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($msg)
    {
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'Peças', 'result'=>Part::paginate(10), 'msg'=>$msg]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $db = New Part;
        $db->name = $request->name;
        $db->description = $request->description;
        $db->price = $request->price;
        $db->type_id = $request->type;
        $db->save();
        return $this->create("A peça foi cadastrada com sucesso!!!");
        // chamar retorno trazendo 3 parametros tipo resultado e o type do navbar
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $type = Part::find($id)->types;
        $part = Part::find($id);
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'showParts', 'part'=>$part,'types'=> $type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type = Part::find($id)->types;
        $part = Part::find($id);
        return view('dashboard.dashboard',['type'=> Type::all(), 'validate'=>'editParts', 'part'=>$part,'types'=> $type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = Part::findOrFail($id);
        $update->name = $request->name;
        $update->price = $request->price;
        $update->description = $request->description;
        $update->type_id = $request->type;
        $update->save();
        return $this->create("A peça foi editada com sucesso!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Part::destroy($id);
        return $this->create("A peça foi DELETADA com sucesso!!!");
    }
}
