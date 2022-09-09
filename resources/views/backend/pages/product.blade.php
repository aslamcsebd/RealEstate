@extends('backend.master')
@section('title') 
   Product
@endsection

@section('content')
   @include('common.alertMessage')

   <div class="content-wrapper p-3">
      <div class="btn-group mb-2" role="group" aria-label="Basic example"> 
         <button class="btn btn-sm btn-success text-light" data-toggle="modal" data-original-title="test" data-target="#addProduct">Add new product</button>
      </div>

      <div class="card border border-danger">
         <div class="card-body p-1">
            <p class="bg-success text-center pb-1">Product image [{{$Product->count()}}]</p>
            <table class="table table-bordered table-striped table-hover text-center">
               <thead class="text-center">
                  <th>No</th>                           
                  <th>Image</th>
                  <th>Title</th>
                  <th>title</th>
                  <th>Price</th>
                  <th>Order By</th>
                  <th>Status</th>
                  <th>Action</th>
               </thead>
             
               <tbody class="text-center">
                  @foreach($Product as $item)
                     <tr>
                        <td width="5%">{{$loop->iteration}}</td>                              
                        <td class="p-2"><img src="{{$item->image}}" width="120" height="100"></td>
                        <td>{!!$item->title!!}</td>
                        <td> {{ Str::limit($item->details, 50) }}
                        <td>${!!$item->price!!}</td>
                        <td width="8%">
                           <div class="btn-group">
                              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                 <i class="far fa-check-circle"></i>
                                 {{$item->orderBy}}
                              </button>
                              <div class="dropdown-menu">
                                 @for($i=1; $i <= $Product->count(); $i++)                                          
                                    <a href="{{ url('orderBy', ['products', $item->id, $i, 'tabName'])}}"
                                       class="{{$i==$item->orderBy ? 'bg-info text-white disabled pl-2' : 'text-center'}} dropdown-item">
                                       @if($i==$item->orderBy)
                                          <i class="far fa-check-circle"></i>
                                       @endif
                                       {{$i}}
                                    </a>
                                 @endfor
                              </div>
                           </div>
                        </td>
                        <td width="8%">
                           @if($item->status == 1)
                              <a href="{{ url('itemStatus', [$item->id, 'products', 'tabName']) }}" class="btn px-1 btn-sm btn-success" title="Click for inactive">Active</a>
                           @else
                              <a href="{{ url('itemStatus', [$item->id, 'products', 'tabName']) }}" class="btn px-1 btn-sm btn-danger" title="Click for active">Inactive</a>
                           @endif
                        </td>
                        <td width="8%">
                           <div class="btn-group" role="group" aria-label="Basic example">
                              <a class="btn btn-sm btn-success text-light editproduct" data-toggle="modal" data-target="#editproduct" data-id="{{$item->id}}">Edit</a>
                              
                              <a class="btn btn-sm btn-danger text-light" href="{{ url('itemDelete', [$item->id, 'products', 'tabName'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
                           </div>
                        </td>
                     </tr> 
                  @endforeach                                            
               </tbody>
            </table>
         </div>            
      </div>
   </div>
@endsection

@section('js')

   {{-- Add image --}}
      <div class="modal fade" id="addProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title text-center" id="exampleModalLabel">Add product</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('addProduct') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf                   
                     <div class="form">
                        <div class="form-group">
                           <label for="image">Product Image :</label>
                           <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="form-group">
                           <label for="title">Product name :</label>
                           <input name="title" class="form-control" id="title" type="text" placeholder="Ex: Submit button, Go button..." required>
                        </div>
                        <div class="form-group">
                           <label for="details">Details :</label>
                           <textarea type="text" class="form-control summernote" id="details" name="details" required></textarea>
                        </div>
                        <div class="form-group">
                           <label for="price">Product price($) :</label>
                           <input name="price" class="form-control" id="price" type="number" placeholder="Ex: 5" required>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="btn-group">
                           <button class="btn btn-sm btn-primary">Save</button>
                           <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

   {{-- edit product image --}}
      <div class="modal fade" id="editproduct" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title text-center" id="exampleModalLabel">Edit product image</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  
               </div>
            </div>
         </div>
      </div>

      <script type="text/javascript"> 
         $(document).ready(function() {
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            // function starts
            $(".editproduct").click(function(){

               var id = $(this).data('id');

               //alert("first value " + userid + "And second value is " + catid );
               $.ajax({
                  method: "GET", // post does not work
                  url: "{{ url('editproduct') }}",
                     data: {id: id},

                  success:function(response){   
                     $('.modal-body').html(response);
                     // $("div#CityResShow").html(result);
                     $('#editproduct').modal('show');
                  }
               });

            });
         // function ends
         }); 
      </script>   

@endsection