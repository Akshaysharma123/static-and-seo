@extends('layouts.errorlayout') @section('title','Bad Request 400')
@section('content')<div class="content-header row">
      </div>
      <div class="content-body">@include('includes.alert')
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 p-0">
              <div class="card-header bg-transparent border-0">
                <h2 class="text-center mb-2 text-uppercase text-bold">400</h2>
                
                <h3 class="text-uppercase text-center">Bad Request</h3>
                <h6 class="text-uppercase text-center">Unable to complete your request..</h6>
              </div>
              <div class="card-content">
              <fieldset class="row py-2 text-center">
                  <div class="col-12">
                  <img src="{{asset('assets/images/err-img.png')}}" alt="Insernal Server Error" class="img-fluid text-center" style="height:100px">
                  </div>
                </fieldset>
                <div class="row py-2">
                  <div class="col-12 col-sm-12 col-md-12 text-center">
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.history.go(-1); return false;" ><i class="ft-home"></i> Back to Home</button>
                    
                  </div>
                 
                </div>
               
              </div>
              
            </div>
          </div>
        </section>
      </div>@endsection