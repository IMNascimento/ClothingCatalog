@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('contents')
    
<x-dashboard.header/> 

<div class="container-fluid">
<div class="row">

<x-dashboard.nav/>

<x-dashboard.main/>
  
</div>
</div>

@endsection