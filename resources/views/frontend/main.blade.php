@extends('ws-app')

@section('content')

    <h1 class="title_page">{{ trans('base.news') }}</h1>

    @foreach($news as $news_item)

        <div class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">{{ $news_item -> getTranslate('title') }}</div>

            <div class="panel-body">

                    {!!  $news_item -> getTranslate('description') !!}

                <div id="gallery-photo-id-{{$news_item -> id}}" class="webstudio-gallery" style="display:none;">

                    @foreach($news_item -> getImages() as $imgSrc)

                        <img alt="" src="/{{ $imgSrc['min'] }}"
                             data-image="/{{ $imgSrc['full'] }}">

                    @endforeach

                </div>

            </div>

        </div>

    @endforeach

@endsection