@extends('ws-app')

@section('content')

    <h1 class="title_page">{{$article->category->name}}</h1>


        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $article->getTranslate('title') }}</div>

            <div class="panel-body">

                {!! $article->getTranslate('description') !!}

            </div>

        </div>


@endsection