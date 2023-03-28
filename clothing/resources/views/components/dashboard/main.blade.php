@if ($validate == "Dashboard")
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">{{$validate}}</h1>
    </div>
  </main>
@elseif ($validate == "Peças")
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">{{$validate}}</h1>

    </div>
    @if ($msg != "não")
    <div class="alert alert-success" role="alert">
      {{$msg}}
    </div>
    @endif
    <div class="container">
      <div class="row">
        <div class="col"><strong> #</strong></div>
        <div class="col"><strong> Nome</strong></div>
        <div class="col"><strong> Preço</strong></div>
        <div class="col"><strong> Opções</strong></div>
      </div>
      @foreach ($item as $key)
        <div class="row">
          <div class="col">{{$key->id}}</div>
          <div class="col">{{$key->name}}</div>
          <div class="col">R$ {{$key->price}}</div>
          <div class="col">
              <form  class="btn-group"  action="{{ url('/dashboard/parts' . '/' . $key->id) }}" method="get">
                  @csrf
                  <button type="submit" class="btn btn-primary">Visualizar</button>
              </form>
              <form class="btn-group"  action="{{ url('/dashboard/parts' . '/' . $key->id .'/edit') }}" method="get">
                @csrf
                <button type="submit" class="btn btn-warning">Editar</button>
              </form>
              <form class="btn-group"  action="{{ url('/dashboard/parts' . '/' . $key->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;Deseja realmente deletar?&quot;)">Deletar</button>
              </form>
          </div>
        </div>
        <hr>
      @endforeach
    </div>
  </main>
@elseif ($validate == "Tipos")
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">{{$validate}}</h1>
    </div>
    @if ($msg != "não")
    <div class="alert alert-success" role="alert">
      {{$msg}}
    </div>
    @endif
    <div class="container">
      <div class="row">
        <div class="col"><strong> #</strong></div>
        <div class="col"><strong> Nome</strong></div>
        <div class="col"><strong> Opções</strong></div>
      </div>
      @foreach ($item as $key)
        <div class="row">
          <div class="col">{{$key->id}}</div>
          <div class="col">{{$key->name}}</div>
          <div class="col">
            <form  class="btn-group"  action="{{ url('/dashboard/types' . '/' . $key->id) }}" method="get">
              @csrf
              <button type="submit" class="btn btn-primary">Visualizar</button>
          </form>
          <form class="btn-group"  action="{{ url('/dashboard/types' . '/' . $key->id .'/edit') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-warning">Editar</button>
          </form>
          <form class="btn-group"  action="{{ url('/dashboard/types' . '/' . $key->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;Deseja realmente deletar?&quot;)">Deletar</button>
          </form>
          </div>
        </div>
        <hr>
      @endforeach
    </div>
  </main>
@endif
