@extends('ws-app')

@section('content')

    <h1 class="title_page">{{ trans('base.news') }}</h1>

    @foreach($news as $news_item)

        <div id="news-{{$news_item -> id}}" class="panel panel-default wow fadeInLeft">

            <div class="panel-heading">

                <div class="row">

                    <div class="col-md-8">{{ $news_item -> getTranslate('title') }}</div>

                    <div class="col-md-4 text-right"><i class="fa fa-calendar" aria-hidden="true"></i>{{ date('d/m/Y ',strtotime($news_item -> date)) }}</div>

                </div>

            </div>

            <div class="panel-body">

                    {!!  $news_item -> getTranslate('description') !!}

                <div id="gallery-photo-id-{{$news_item -> id}}" class="webstudio-gallery" style="display:none;">

                    @foreach($news_item -> getImages() as $imgSrc)

                        <img alt="" src="/{{ $imgSrc['min'] }}"
                             data-image="/{{ $imgSrc['full'] }}">

                    @endforeach

                </div>

                <h4>{{ trans('base.subscribe.news') }}</h4>
                <div class="share42init"
                     data-url="http://vorohta.org/{{ App::getLocale() }}/news/article-{{ $news_item -> id }}"
                     data-title="{{ $news_item -> getTranslate('title') }}"
                     data-image="http://vorohta.org//{{$news_item -> getImages()[0]['full'] }}"
                     data-description="{!!  $news_item -> getTranslate('description') !!}"
                     data-path="/share42/"
                     data-icons-file="icons.png">
                </div>
                <script type="text/javascript" src="/share42/share42.js"></script>

            </div>

        </div>

    @endforeach

    <nav class="text-center" aria-label="Page navigation">
        {!! $news->render() !!}
    </nav>

@endsection