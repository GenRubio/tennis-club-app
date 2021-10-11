<style>
  .carousel-control-prev-icon {
    width: 40px;
    height: 40px;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='red' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
  }

  .carousel-control-next-icon {
    width: 40px;
    height: 40px;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='red' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
  }
</style>
<div id="carusel-ultimas-actividades" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach ($actividades as $key => $actividad)
    @if ($key == 0)
    <div class="carousel-item active">
      @include('components.actividades.actividad-card', ['actividad' => $actividad])
    </div>
    @else
    <div class="carousel-item">
      @include('components.actividades.actividad-card', ['actividad' => $actividad])
    </div>
    @endif
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carusel-ultimas-actividades" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carusel-ultimas-actividades" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>