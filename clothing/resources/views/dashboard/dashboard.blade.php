@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('contents')
    
<x-dashboard.header/> 

<div class="container-fluid">
<div class="row">

<x-dashboard.nav/>
@if (isset($type))
    <x-dashboard.modal.parts :type="$type"/>
@endif
<x-dashboard.modal.types/>
@if ($validate == "Dashboard" OR $validate == "Peças" OR $validate == "Tipos" OR $validate == "email")
    <x-dashboard.main :validate="$validate" :item="$result" :msg="$msg"/> 
@elseif($validate == "showParts" OR $validate == "showTypes")
    <x-dashboard.show :validate="$validate" :types="$types" :part="$part"/>
@elseif ($validate == "editParts" OR $validate == "editTypes")
    <x-dashboard.edit :validate="$validate" :types="$types" :part="$part" :list="$type"/>
@endif

  
</div>
</div>

@endsection