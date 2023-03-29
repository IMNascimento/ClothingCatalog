@if ($validate == "editParts")
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edição Peças</h1>
    </div>
    <div class="container">
        <form action="{{url('dashboard/parts/' . $part->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$part->name}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Preço</label>
            <input type="text" class="form-control" name="price" id="formGroupExampleInput2"  value="{{$part->price}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tipo</label>
            <select class="form-control" name="type" aria-label="Default select example" >
                <option selected value="{{$part->type_id}}">{{$types->name}}</option>
                @foreach ($list as $key)
                    <option value="{{$key->id}}">{{$key->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group">
            <span class="input-group-text">descrição</span>
            <textarea class="form-control" aria-label="With textarea" name="description" >{{$part->description}}</textarea>
        </div>
        <div class="input-group">
            <img src="{{Storage::url($part->path)}}" class="img-fluid" alt="{{$part->name}}">
            <input type="hidden" name="img" value="{{$part->path}}">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control" name="path" id="inputGroupFile01">
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-warning">Editar</button>
        </div>
    </form>
    </div>
    
@elseif ($validate == "editTypes")
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edição Tipo</h1>
    </div>
    <div class="container">
        <form action="{{url('dashboard/types/' . $types->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$types->name}}">
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-warning">Editar</button>
        </div>
        </form>
    </div>
  </main>
@endif