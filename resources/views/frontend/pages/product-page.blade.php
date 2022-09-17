@extends('frontend.layouts.app')

@section('content')

      @foreach($ProductCategory as $category)
        <h1 class="text-center my-4">{{$category->name}}</h1>    
        @php
            $product = App\Models\Product::where('categoryId', $category->id)->where('status', 1)->orderBy('orderBy')->get();
        @endphp

        <div class="row m-4 justify">
            @foreach($product as $item)
                <div class="col-3 p-3">
                    <div class="card">  
                        <img src="{{$item->image}}" height="200" class="border round card-img-top thumbnail" alt="...">
                        <div class="card-body">     
                            <h5 class="text-center">{!! $item->name !!}</h5>

                            <div class="d-flex justify-content-between">
                              <span>Service price</span><span>${!! $item->price !!}</span>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <a type="button" class="btn btn-outline-primary btn-sm btn-block">More info</a>
                                <a type="button" class="btn btn-outline-secondary btn-sm">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach   
        </div>
    @endforeach   
@endsection


