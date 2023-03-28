<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse" >
    <div class="position-sticky pt-3 sidebar-sticky">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
        <span>Usuário: {{ Auth::user()->name }}</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Parts">
            <span data-feather="file" class="align-text-bottom"></span>
            Peças
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Types">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Tipo
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/parts">
            <span data-feather="users" class="align-text-bottom"></span>
            Listar Peças
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/types">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Listar Tipos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="layers" class="align-text-bottom"></span>
            Integrations
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
        <span>Saved reports</span>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Year-end sale
          </a>
        </li>
      </ul>
    </div>
  </nav>