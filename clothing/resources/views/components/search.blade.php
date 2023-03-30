<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="/procura" method="POST">
            @csrf
            <input type="text" id="search-input" name="search" placeholder="Search here.....">
            <button type="submit" class="btn btn-primary">Procurar</button>
        </form>
    </div>
</div>
<!-- Search model end -->