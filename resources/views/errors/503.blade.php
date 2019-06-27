@extends('layouts.errorlayout') @section('title','Maintenance 503')
@section('content')<div class="content-header row">
      </div>
      <div class="content-body">@include('includes.alert')
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 p-0">
              <div class="card-header bg-transparent border-0">
                <h2 class="text-center mb-2 text-uppercase text-bold">Maintenance</h2>
               
                <h3 class="text-uppercase text-center">We're undergoing a bit of scheduled maintenance.</h3>
                <h6 class="text-uppercase text-center">Sorry for inconvenience. We'll back up and running as fast as possible.</h6>
              </div>
              <div class="card-content">
              <fieldset class="row py-2 text-center">
                  <div class="col-12">
                  <img src="{{asset('assets/images/maintenance.png')}}" alt="Maintenance" class="img-fluid text-center" style="height:100px">
                  </div>
                </fieldset>
               
              </div>
              
            </div>
          </div>
        </section>
      </div>@endsection