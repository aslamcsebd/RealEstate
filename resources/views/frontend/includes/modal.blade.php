<!-- Modal -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="staticBackdropLabel">Wish-list</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="justify-content-center row">
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>Shopping cart</h4>
                        </div>
                        @php
                            $imageList = App\Models\ProfessionalNetwork::take('5')->get();
                        @endphp
                        
                        @foreach($imageList as $item)   
                            <div class="row justify-content-center rounded my-4">
                                <div class="col-2">
                                    <img class="rounded" src="{{$item->image}}" width="70">
                                </div>

                                <div class="col-5">
                                    <span class="font-weight-bold">{{$item->title}}</span>                                    
                                </div>  

                                <div class="col-1">
                                    <h5 class="">1</h5>
                                </div>

                                <div class="col-2">
                                    <h5 class="text-grey">$20.00</h5>
                                </div>

                                <div class="col-2">
                                    <i class="fa fa-trash mb-1 text-danger"></i>
                                </div>
                            </div>
                        @endforeach

                        <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded float-end">
                            <button class="btn btn-outline-warning btn-sm ml-2" type="button">Proceed to Pay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
