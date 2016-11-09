@extends('ws-app')

@section('content')

    <h1 class="title_page">{{ trans('base.about_us') }}</h1>

    @foreach($about_us as $about_us_item)

        <div class="panel panel-default wow fadeInLeft" id="about_us-{{ $about_us_item -> id }}">

            <div class="panel-heading">{{ $about_us_item -> getTranslate('title') }}</div>

            <div class="panel-body">

                    {!!  $about_us_item -> getTranslate('description') !!}

            </div>

        </div>

    @endforeach

@endsection