@if ($validate == "showParts")
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Visualização Peças</h1>
    </div>
    <div class="container">
        <div class="input-group">
          <img src="{{Storage::url($part->path)}}" class="img-fluid" alt="{{$part->name}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="formGroupExampleInput" disabled name="name" value="{{$part->name}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Preço</label>
            <input type="text" class="form-control" name="price" id="formGroupExampleInput2" disabled value="{{$part->price}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tipo</label>
            <select class="form-control" name="type" aria-label="Default select example" disabled>
                <option selected value="{{$part->type_id}}">{{$types->name}}</option>
            </select>
        </div>
        <div class="input-group">
            <span class="input-group-text">descrição</span>
            <textarea class="form-control" aria-label="With textarea" name="description" disabled>{{$part->description}}</textarea>
        </div>
        
    </div>
    
@elseif ($validate == "showTypes")
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Visualização Tipo</h1>
    </div>
    <div class="container">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="formGroupExampleInput" disabled name="name" value="{{$types->name}}">
        </div>
    </div>
  </main>
@endif