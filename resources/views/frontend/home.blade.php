@extends('frontend.layouts.app')

@section('content')

    <video autoplay muted loop id="myVideo">
        <source src="{{asset('images/home.mp4')}}" type="video/mp4">
    </video>
    <h1 class="centered">IA | Interior Architects</h1>  
    
    <div class="side_menu">
        <div class="burger_box">
            <div class="menu-icon-container">
                <a href="#" class="menu-icon js-menu_toggle closed">
                    <span class="menu-icon_box">
                        <span class="menu-icon_line menu-icon_line--1"></span>
                        <span class="menu-icon_line menu-icon_line--2"></span>
                        <span class="menu-icon_line menu-icon_line--3"></span>
                    </span>
                </a>
            </div>
        </div>
        <div class="px-3">
            <h4 class="menu_title pt-2 text-white">Menu Title</h4>
            <ul class="list_load">
                <li class="list_item"><a href="{{ Route('who-we-are') }}">Who we are</a></li>
                
                <li class="list_item"><a href="#">What we do</a></li>
                <li class="list_item"><a href="#">How we do it</a></li>
                <li class="list_item"><a href="#">What they're saying</a></li>
                <li class="list_item"><a href="#">What we're saying</a></li>
                <li class="list_item"><a href="#">Find IA</a></li>
            </ul>
        </div>
    </div> 

    @foreach($Home as $item)
        <div class="box">
            <img src="{{$item->image}}" alt="{{$item->title}}" style="width:100%; height:600px;">
            <div class="text">
                <h1>{!!$item->title!!}</h1>
                <a href="{{$item->link}}" class="btn btn-warning">{{$item->buttonName}}</a>
            </div>
        </div>
    @endforeach       

    <footer class="row justify-content-center">

        <div class="col-md-3">
        <ul>  
            <h4>Useful links</h4>

                @foreach($UsefullLink as $item)
                    <li> <a href="{{$item->url}}" target="_blank"> {{$item->title}}</a></li>
                @endforeach
        </ul>
        </div>
    
        <div class="col-md-3">      
            <ul>
                <h4>Thought leadership</h4>
                @foreach($Leadership as $item)
                    <li> <a href="{{$item->url}}" target="_blank"> {{$item->title}}</a></li>
                @endforeach
        </ul>
        </div>
    
        <div class="col-3">
        
        <ul>
            <h4>Contact</h4>
                @foreach($Contact as $item)
                    <li>
                    {!!$item->logo!!} {!!$item->details!!}
                    </li>
                @endforeach
        </ul>
        </div>
    
        <div class="col-3">    
    
        <ul class="social">
                <h4>Social</h4>
                @foreach($SocialSite as $item)
                    <li>                    
                        <a href="{!!$item->socialUrl!!}" target="_blank" title="{!!$item->socialName!!}">
                            {!!$item->socialLogo!!}
                        </a>
                    </li>
                @endforeach
            </ul>
    
        <ul>
            <li>
                <a href="#" target="_blank">Subscribe</a>
            </li>
            <li>
                <a href="#" target="_blank">Privacy policy</a>
            </li>
        </ul>
        </div>
    
    </footer>   
   
@endsection
