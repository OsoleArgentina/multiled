@extends('page.layouts.app')
@section('title','JOLDEN - NOVEDADES Últimas Noticias')
@section('content')
<div class="container my-5">
    <p class="m-0 text-muted font-weight-bold">NOVEDADES</p>
    <h1 class="jolden-color2 font-weight-bold">Últimas Noticias</h1>
    <div class="row my-5">
        <div class="col-md-8">
            @foreach($novedades as $item)
                <div class="card mb-5">
                    <a href="{{ route('jolden.novedad.show',$item->slug) }}">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset($item->file[0]['image'] ?? 'uploads/no-img.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="p-3">
                                        <span class="badge jolden-fondo2 mb-2">{!! $item->category->text['es']['title'] ?? '' !!}</span><br>
                                        <h4 class="jolden-color font-weight-bold">{!! $item->text['es']['title'] ?? '' !!}</h4>
                                        <p class="jolden-color2 font-weight-bold"><i class="fas fa-long-arrow-alt-right jolden-color2 "></i>Ingresar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <div class="p-5" style="background-color: #F9F9F9">
                <h3 class="jolden-color2 font-weight-bold">CATEGORÍAS</h3>
                @foreach($categorias as $item)
                    <p class="m-0"><a href="{{ route('jolden.categoria.novedad',$item->slug) }}" class="jolden-color">{!! $item->text['es']['title']!!}</a></p>
                @endforeach
            </div>
        </div>
    </div>


</div>

@endsection