<div class="modal fade" id="Parts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Peças</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
          <form action="/dashboard/parts" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nome</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="digite nome da roupa">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Preço</label>
                <input type="text" class="form-control" name="price" id="formGroupExampleInput2" placeholder="digite o preço">
            </div>
            <div class="mb-3">
                <select class="form-control" name="type" aria-label="Default select example">
                    <option selected>Selecione um tipo</option>
                    @foreach ($type as $key)
                    <option value="{{$key->id}}">{{$key->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group">
                <span class="input-group-text">descrição</span>
                <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
            </div>
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupFile01">Upload</label>
              <input type="file" class="form-control" name="path" id="inputGroupFile01">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
        </div>
      </div>
    </div>
  </div>