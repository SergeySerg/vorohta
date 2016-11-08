@extends('ws-app')

@section('content')





    <div class="slider">


        <div id="webstudio-slider" style="display:none;">
            @foreach($slides as $slide)

                @if(count($slide->getImages()) > 0)

                        <img alt="{{$slide->getTranslate('title')}}" src="/{{$slide->getImages()[0]['full']}}"
                        data-image="/{{$slide->getImages()[0]['full']}}"
                        id="img-{{$slide->id}}"
                        data-description=" {{$slide->getTranslate('description')}}"
                        data-link="jhjhjhj111">

                @endif
            
            @endforeach
        </div>

    </div>

    {{--<div id="3d-tour">
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            $(function(){
                $('#3d-tour').html('<iframe src="http://www.visitor.ee/360/pc/html5/main.html" style="width: 100%; height: 470px; border: none; margin-bottom: -5px" frameborder="none"></iframe>');
            });
        });
    </script>--}}

    <div class="booking clearfix">

        <div class="key"><img src="{{ asset('/img/key.png') }}" alt=""></div>

        <div class="fast-booking">

            <h2>{{ trans('base.fast') }}</h2>
            <h2 class="second-line">{{ trans('base.booking') }}</h2>

        </div>

        <form id="booking-form" action="/{{ App::getLocale() }}/booking" method="get">

            <span class="for-arrival-date">{{ trans('base.arrival') }}</span>
            <input type="text" id="from" name="from" class="arrival-date">

            <span class="for-departure-date">{{ trans('base.departure') }}</span>
            <input type="text" id="to" name="to" class="departure-date">

            <input name="booking-btn" id="booking-btn" class="booking-btn" value="{{ trans('base.booking') }}" type="submit">

        </form>

    </div>


    <div class="content-main">


    <span>{{ trans('base.hotelcontenttitle') }}</span>

    <ul class="clearfix">

            @foreach($services as $service)

                <li>
                    @if(count($service->getImages()) > 0)
                    <div class="img-block" style="background: url('/{{ $service->getImages()[0]['min'] }}') no-repeat center; background-size: cover"></div>
                    @else
                    <div class="img-block"></div>
                    @endif
                    <div class="describe-block">

                        <h1>{{ str_limit($service -> getTranslate('title'),20,'...') }}</h1>

                        <section>{!!  str_limit($service -> getTranslate('description'),135,'...') !!}</section>

                        <a href="/{{ App::getLocale() }}/services/#service-{{ $service -> id }}">{{ trans('base.more') }}<div class="arrow-right"></div></a>

                    </div>

                </li>

            @endforeach

    </ul>

    <div class="hotel-describe">

    <h1>{{ $hotel -> getTranslate('title') }}</h1>
    <section>{!!  $hotel -> getTranslate('description') !!}</section>

    </div>

    </div>

@endsection