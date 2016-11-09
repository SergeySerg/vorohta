@extends('ws-app')

@section('content')

    <h1 class="title_page">Туристу</h1>

    @foreach($tourist as $tourist_item)

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $tourist_item -> getTranslate('title') }}</div>

            <div class="panel-body">

                    {!!  $tourist_item -> getTranslate('description') !!}

            </div>

        </div>

    @endforeach

@endsection