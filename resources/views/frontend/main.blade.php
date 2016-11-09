@extends('ws-app')

@section('content')

    <h1 class="title_page">Новини</h1>

    @foreach($news as $new)

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $new -> getTranslate('title') }}</div>

            <div class="panel-body">

                    {!!  $new -> getTranslate('description') !!}

            </div>

        </div>

    @endforeach

@endsection