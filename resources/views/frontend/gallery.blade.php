@extends('ws-app')

@section('content')

    <h1 class="title_page">{{ trans('base.gallery') }}</h1>

        @foreach($gallery as $gall)

            <div class="panel panel-default wow fadeInLeft">

                <div class="panel-heading">{{ $gall -> getTranslate('title') }}</div>

                <div class="panel-body">

                    <div id="gallery-photo-id-{{$gall -> id}}" class="webstudio-gallery" style="display:none;">

                        @foreach($gall -> getImages() as $imgSrc)

                            <img alt="" src="/{{ $imgSrc['min'] }}"
                                 data-image="/{{ $imgSrc['full'] }}">

                        @endforeach

                    </div>

                </div>

            </div>

        @endforeach

@stop