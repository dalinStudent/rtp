@extends('layouts.base')

@section('content')
<div class="container">
    <div class="wrap-show-advance-info-box style-1 has-countdown">
        <h3 class="title-box">Top Popular Foods</h3>
         <br>
         <div class="wrap-menu slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false">
             @if ($menus -> count() > 0)
             @foreach ($menus as $menu)
                 <div class="menu menu-style-2 equal-elem">
                    <div class="menu-thumnail">
                        <a href="" title="{{$menu->title}}">
                            <figure>
                                <img src="{{$menu->image}}" width="800" height="800" alt="{{$menu->title}}">
                            </figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="" class="function-link">Quick view</a>
                        </div>
                    </div>
                    <div class="menu-info">
                        <a href="" class="menu-name"><span>{{$menu->title}} | {{$menu->title}}</span></a>
                        <div class="wrap-price"><ins><p class="menu-price">From ₹{{$menu->price}}</p></ins> <del><p class="menu-price">{{$menu->price}}</p></del></div>
                    </div>
                 </div>
             @endforeach
            @else
            <h4>Oops, No Food Found !</h4>
            @endif
         </div>
    </div>
</div>
@endsection
