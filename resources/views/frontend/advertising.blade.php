@extends('ws-app')

@section('content')

    <h1 class="title_page">Реклама</h1>

    @foreach($advertising as $advertising_item)

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $advertising_item -> getTranslate('title') }}</div>

            <div class="panel-body">

                    {!!  $advertising_item -> getTranslate('description') !!}

            </div>

        </div>

    @endforeach

@endsection