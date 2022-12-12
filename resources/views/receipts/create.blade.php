@extends('layouts.app')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class="container">
    <div class="row">
        <h1>Add New Posts</h1>
    </div>
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('receipt.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="service_type" class="col-md-4 col-form-label text-md-end">{{ __('Service Type') }}</label>

                    <div class="col-md-6">
                        <select id="service_type" class="form-control @error('service_type') is-invalid @enderror" name="service_type" value="{{ old('service_type') }}" required autocomplete="off" autofocus>
                            <option value="Repair">Repair</option>
                        </select>
                        
                        @error('service_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
           <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="customer_name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="customer_name" type="text" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" value="{{ old('customer_name') }}" required autocomplete="customer_name" autofocus>

                        @error('customer_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="contact_number" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                    <div class="col-md-6">
                        <input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" autofocus>

                        @error('contact_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-">
                    <label for="brand" class="col-md-4 col-form-label text-md-end">{{ __('Brand') }}</label>

                    <div class="col-md-6">
                        <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ old('brand') }}" required autocomplete="brand" autofocus>

                        @error('brand')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div> 

        <div class="row pt-3">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="warranty_card" class="col-md-4 col-form-label text-md-end">{{ __('Warranty Card') }}</label>

                    <div class="col-md-6">
                        <select id="warranty_card" class="form-control @error('warranty_card') is-invalid @enderror" name="warranty_card" value="{{ old('warranty_card') }}" required autocomplete="warranty_card" autofocus>
                            <option value="yes">Yes</option>
                            <option value="no" selected>No</option>
                            <option value="expired">Expired</option>
                        </select>
                        @error('warranty_card')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="item_photo" class="col-md-4 col-form-label text-md-end">{{ __('Photo of The Item') }}</label>
                    <div class="col-md-6">
                        <div class="input-group control-group increment" >
                            <input type="file" name="item_photo[]" class="form-control @error('item_photo') is-invalid @enderror" accept=".pdf,.jpg,.png,.jpeg,image/.jpg,image/.pdf,image/.jpeg,image/.png" value="{{ old('item_photo') }}">
                            <div class="input-group-btn"> 
                                <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                            </div>
                            <div class="clone hide">
                            <div class="control-group input-group" style="margin-top:10px">
                                <input type="file" name="item_photo[]" class="form-control @error('item_photo') is-invalid @enderror" accept=".pdf,.jpg,.png,.jpeg,image/.jpg,image/.pdf,image/.jpeg,image/.png" value="{{ old('item_photo') }}">
                                <div class="input-group-btn"> 
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                            </div>
                            </div>

                            @error('item_photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="remark" class="col-md-4 col-form-label text-md-end">{{ __('Remark') }}</label>

                    <div class="col-md-6">
                        <textarea id="remark" class="form-control @error('remark') is-invalid @enderror" name="remark" required autocomplete="remark" autofocus>{{ old('remark') }}</textarea>

                        @error('remark')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="cost" class="col-md-4 col-form-label text-md-end">{{ __('Estimated Price') }}</label>

                    <div class="col-md-6">
                        <input id="cost" type="number" class="form-control @error('cost') is-invalid @enderror" name="cost" value="{{ old('cost') }}" autocomplete="off" required autofocus><br>

                        @error('cost')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input type="hidden" name="free_of_charge" value="0"  autocomplete="off" autofocus>
                        <input id="free_of_charge" type="checkbox" class=" @error('free_of_charge') is-invalid @enderror" name="free_of_charge" value="1"  autocomplete="off" autofocus>
                        <label for="free_of_charge">FOC</label>

                        @error('free_of_charge')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <input type="hidden" name="to_be_confirmed" value="0"  autocomplete="off" autofocus>
                        <input id="to_be_confirmed" type="checkbox" class=" @error('to_be_confirmed') is-invalid @enderror" name="to_be_confirmed" value="1" autocomplete="off" autofocus>
                        <label for="to_be_confirmed">TBC</label>

                        @error('to_be_confirmed')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="prepayment" class="col-md-4 col-form-label text-md-end">{{ __('Deposit') }}</label>

                    <div class="col-md-6">
                        <input id="prepayment" type="number" class="form-control @error('prepayment') is-invalid @enderror" name="prepayment" value="{{ old('prepayment') }}" autocomplete="off" autofocus>

                        @error('prepayment')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row pt-4">
            <button class="btn btn-primary">Add New Receipt</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

      $("#free_of_charge").change(function(){
            if ($(this).prop('checked')) {
                document.getElementById("cost").disabled = true;
                document.getElementById("prepayment").disabled = true;
                document.getElementById("to_be_confirmed").checked=false;
                document.getElementById("cost").value="0";
                document.getElementById("prepayment").value="0";
            }
            else {
                document.getElementById("cost").disabled = "";
                document.getElementById("prepayment").disabled = "";
            }
        });

        $("#to_be_confirmed").change(function(){
            if ($(this).prop('checked')) {
                document.getElementById("cost").disabled = true;
                document.getElementById("cost").required = false;
                document.getElementById("free_of_charge").checked=false;
                document.getElementById("prepayment").disabled = "";
                document.getElementById("cost").value="";
                document.getElementById("prepayment").value="0";
            }
            else {
                document.getElementById("cost").disabled = "";
            }
        });

    });

    
</script>
@endsection
