<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
  <li class="nav-item">
    <a href="/" class="nav-link"><i class="fe fe-home"></i> Inicio</a>
  </li>
  <li class="nav-item">
    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Documentos</a>
    <div class="dropdown-menu dropdown-menu-arrow">
      <a href="#" class="dropdown-item ">Listado</a>
    </div>
  </li>
  <li class="nav-item">
    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Dependencias</a>
    <div class="dropdown-menu dropdown-menu-arrow">
      <a href="{{ route('dependencias.index') }}" class="dropdown-item ">Listado</a>
      <a href="{{ action('DependenciaController@create') }}" class="dropdown-item ">Agregar</a>
    </div>
  </li>
</ul>
