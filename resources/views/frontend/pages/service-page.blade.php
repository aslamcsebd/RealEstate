@extends('frontend.layouts.app')
<style>.list_item .active { background: rgba(255,255,255,.2); }</style>

@section('content')

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
                
                <li class="list_item nav-item"><a class="active" href="{{Route('service-page')}}">Service</a></li>
                <li class="list_item"><a href="#">What we do</a></li>
                <li class="list_item"><a href="#">How we do it</a></li>
                <li class="list_item"><a href="#">What they're saying</a></li>
                <li class="list_item"><a href="#">What we're saying</a></li>
                <li class="list_item"><a href="#">Find IA</a></li>
            </ul>
        </div>
    </div>

    <h2 class="text-center my-4">Service list</h2>

    <div class="row m-4">
        @foreach($Service as $item)
            <div class="col-4 p-3">
                <div class="card">
                    <h5 class="card-head p-2 text-center" style="height: 50px;">{{$item->title}}</h5>        
                    
                    <img src="{{$item->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 >{!! $item->details !!}</h5>
                    </div>
                </div>
            </div>
        @endforeach   
    </div>

    <h2 class="text-center my-4">Real Estate Planning Process</h2>

    <div class="row m-4">
        @foreach($RealEstate as $item)
            <div class="col-4 p-3">
                <div class="card">
                    <h5 class="card-head p-2 text-center">{{$item->title}}</h5>        
                    
                    <img src="{{$item->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 >{!! $item->details !!}</h5>
                    </div>
                </div>
            </div>
        @endforeach   
    </div>


   
@endsection
