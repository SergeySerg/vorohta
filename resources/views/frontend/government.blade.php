@extends('ws-app')

@section('content')

    <h1 class="title_page">{{ trans('base.government') }}</h1>


    @foreach($government as $government_item)

        <div id="government-{{$government_item -> id}}" class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $government_item -> getTranslate('title') }}</div>

            <div class="panel-body">

                    {!!  $government_item -> getTranslate('description') !!}

            </div>

        </div>

    @endforeach

@endsection