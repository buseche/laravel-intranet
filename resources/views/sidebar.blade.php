<ul class="list-group nav flex-column">

    <a href="/" class="list-group-item @if(Route::is('dashboard.*')) active @endif @if(Route::is('admin.*')) active @endif"><i class="fas fa-tachometer-alt"></i> Escritorio</a>

    <a href="{{ route('customers.index') }}" class="list-group-item @if(Route::is('customers.*')) active @endif"><i class="fas fa-user-tie"></i> Clientes</a>

    <a href="{{ route('projects.index') }}" class="list-group-item @if(Route::is('projects.*')) active @endif"><i class="fas fa-folder-open"></i> Proyectos</a>

    <a href="{{ route('hours.index') }}" class="list-group-item @if(Route::is('hours.*')) active @endif"><i class="far fa-clock"></i> Horas</a>

    <a href="{{ route('boards.index') }}" class="list-group-item @if(Route::is('boards.*')) active @endif"><i class="fas fa-tasks"></i> Pareas</a>

  @admin

      <a href="{{ route('accounts.index') }}" class="list-group-item @if(Route::is('accounts.*')) active @endif"><i class="fas fa-file-invoice"></i> Contabilidad</a>

      <a href="{{ route('passwords.index') }}" class="list-group-item @if(Route::is('passwords.*')) active @endif"><i class="fas fa-unlock-alt"></i> Contraseña</a>

      <a href="{{ route('users.index') }}" class="list-group-item @if(Route::is('users.*')) active @endif"><i class="fas fa-users-cog"></i> Usuarios</a>

      <a href="{{ route('settings.index') }}" class="list-group-item @if(Route::is('settings.*')) active @endif"><i class="fas fa-sliders-h"></i> Configuraciones</a>

  @endadmin

</ul>