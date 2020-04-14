<div class="sidebar"   data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-3.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal" >
        <img src="img/logo_iris.png" alt="logo">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage ?? '' == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage ?? '' == 'profile' || $activePage ?? '' == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Gestion compte') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage ?? '' == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage ?? '' == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('immo') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Immobilisation') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage ?? '' == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('immo/create') }}">
          <i class="material-icons">note_add</i>
          <p>{{ __('Acquisition') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage ?? '' == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('immo/transfert') }}">
          <i class="material-icons">compare_arrows</i>
            <p>{{ __('Transfert') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? '' == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('immo/rep') }}">
          <i class="material-icons">settings</i>
          <p>{{ __('Réparation') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage ?? '' == 'notifications' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('immo/ref') }}">
                <i class="material-icons">restore_from_trash</i>
                <p>{{ __('Réforme') }}</p>
            </a>
        </li>

      <!-- <li class="nav-item active-pro{{ $activePage ?? '' == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('upgrade') }}">
          <i class="material-icons">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
