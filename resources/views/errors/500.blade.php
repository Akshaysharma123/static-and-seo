@extends('layouts.errorlayout') @section('title','Internal Server Error 500')
@section('content')<div class="content-header row">
      </div>
      <div class="content-body">@include('includes.alert')
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 p-0">
              <div class="card-header bg-transparent border-0">
                <h2 class="text-center mb-2 text-uppercase text-bold">500</h2>
                
                <h3 class="text-uppercase text-center">Internal Server Error</h3>
                <h6 class="text-uppercase text-center">The server encountered an internal server error or misconfiguration and was unable to complete your request.</h6>
              </div>
              <div class="card-content">
              <fieldset class="row py-2 text-center">
                  <div class="col-12">
                  <img src="{{asset('assets/images/err-img.png')}}" alt="Insernal Server Error" class="img-fluid text-center" style="height:100px">
                  </div>
                </fieldset>
               
              </div>
              
            </div>
          </div>
        </section>
      </div>@endsection