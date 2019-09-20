@extends('page.layouts.app')
@section('title','MULTILED - INICIO')
@push('style')
    <style>
        /*h2 span{*/
        /*    color: #a9c47f !important;*/
        /*}*/
    </style>
@endpush
@section('content')
    {{--@include('page.partials.carousel')--}}
<div class="container my-5">
    <h5 class="text-center font-weight-bold mb-3">{{ $text['title'] ?? '' }}</h5>
     {!! $text['text'] ?? '' !!}

</div>
    <h1>VUE</h1>
    <example-component></example-component>
    <div class="container">
        <div class="row ">
            @foreach($destacados ?? [] as $item)
                <div class="col-md-3 mb-5">
                    <!--Zoom effect-->
                    <a href="{{ route('jolden.productos',$item->slug) }}" class="">
                        <div class="view overlay zoom d-flex justify-content-center align-items-center">
                            <img onError="this.src='{{ asset('uploads/no-img.png')}}'" src="{{ asset($item->file[0]['image'] ?? 'uploads/no-img.png') }}" class="img-fluid  " style="  height: 250px" alt="smaple image">
                            <div class="mask caja flex-center" style="background-color: rgba(5, 139, 140,0.7)">
                                <p class="text-white" style="z-index: 11"><i class="fas fa-plus fa-2x"></i></p>
                            </div>
                        </div>
                        <h6 class="jolden-color font-weight-bold text-center my-3">{!! $item->text['es']['title'] ?? '' !!}</h6>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid">
        <div class="row jolden-fondo">
            <div class="container my-5">
                <h1 class="text-center text-white font-weight-bold">{{ $text['title_2'] ?? '' }}</h1>
                <div class="row my-5">
                    @foreach($contenido->file ?? [] as $item)
                        <div class="col-md-4 text-center mb-5">
                            <img src="{{ asset($item['image']) }}" alt="" class="img-fluid">
                            <h4 class="my-3 text-white font-weight-bold">{{ $item['title'] ?? '' }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection