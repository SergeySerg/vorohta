@extends('ws-app')

@section('content')

    <h1 class="title_page">{{ trans('base.tourist') }}</h1>

    @foreach($tourist as $tourist_item)

        <div id="tourist-{{$tourist_item -> id}}" class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $tourist_item -> getTranslate('title') }}</div>

            <div class="panel-body">

                    {!!  $tourist_item -> getTranslate('description') !!}

            </div>

        </div>

    @endforeach

@endsection