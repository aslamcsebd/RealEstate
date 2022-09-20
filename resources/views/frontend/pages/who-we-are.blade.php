@extends('frontend.layouts.app')

@section('content')
    @php
        $item = App\Models\Home::latest()->first();
    @endphp

    <div class="box">
        <img src="{{$item->image}}" alt="{{$item->title}}" style="width:100%; height:600px;">     
    </div>
    
    <div class="centered">
        <div class="input-box-search" style="width: 600px;">
            <input type="text" class="form-control">
            <i class="fa fa-search"></i>
        </div>
    </div>
    <h1 style="text-align: center; margin-top: 200px">{{$info}}</h1>
@endsection
