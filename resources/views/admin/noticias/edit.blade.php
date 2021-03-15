{{-- @extends("layouts.admin")
@section("contenido_principal")
    <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
    @if(Session::has("exito"))
        <p style="color: #1a974e">{{Session::get("exito")}}</p>
    @endif
    @if(Session::has("error"))
        <p style="color: #971a1a">{{Session::get("error")}}</p>
    @endif
    <h1>Editar noticia {{ $noticia->id }}</h1>
    <form method="POST" action="{{ route("admin.noticias.update", $noticia->id) }}">
        @csrf
        @method('put')
        <label for="">Título:</label>
        <input name="titulo" type="text" value="{{$noticia->titulo}}">
        <label for="">Fecha:</label>
        <input name="fecha" type="date" value="{{$noticia->fecha}}">
        <label for="">Autor:</label>
        <input name="autor" type="text" value="{{$noticia->autor}}">
        <label for="">Cuerpo:</label>
        <textarea name="cuerpo" rows="5">{{ $noticia->cuerpo }}</textarea>
        <label for="">Foto:</label>
        <input name="foto" type="text" value="{{$noticia->foto}}">
        <button type="submit">Actualizar noticia</button>
    </form>
@endsection --}}

@extends("layouts.admin")
@section("titulo", "Editar noticia")
@section("contenido_principal")
    

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Noticias</h1>
              <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Noticias</a></li>
                <li class="breadcrumb-item active">Editar noticias</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Editar noticia</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
                @if(Session::has("exito"))
                <p style="color: #15b915">{{ Session::get("exito") }}</p>
                @endif
                @if(Session::has("error"))
                    <p style="color: #bb1717">{{ Session::get("error") }}</p>
                @endif
                <form method="POST" action="{{ route("admin.noticias.update", $noticia->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Título:</label>
                        <input class="form-control" name="titulo" type="text" value="{{$noticia->titulo}}">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha:</label>
                        <input class="form-control" name="fecha" type="date" value="{{$noticia->fecha}}">
                    </div>
                    <div class="form-group">
                        <label for="">Autor:</label>
                        <input class="form-control" name="autor" type="text" value="{{$noticia->Autor}}">
                    </div>
                    <div class="form-group">
                        <label for="">Cuerpo:</label>
                        <textarea class="form-control" name="cuerpo" rows="5">{{$noticia->cuerpo}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Foto:</label>
                        <input class="form-control" name="foto" type="text" value="{{$noticia->foto}}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Actualizar noticia</button>
                    </div>
                </form>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Pie de la tabla de lista de noticias
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection