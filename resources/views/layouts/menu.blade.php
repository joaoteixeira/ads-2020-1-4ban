<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('postagem') ? 'active' : '' }}" href="{{ route('postagem.index') }}">
              <span data-feather="file"></span>
              Postagens
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('usuario') ? 'active' : '' }}" href="{{ route('usuario.index') }}">
              <span data-feather="shopping-cart"></span>
              Usúarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Tags
            </a>
          </li>
        </ul>
      </div>
    </nav>