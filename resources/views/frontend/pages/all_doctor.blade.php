@extends('frontend.layouts.app')
@section('main_content')
<div class="container">
    <div class="header-text">
        <h1 class="text-center"><b>ইউরোলজি Department</b></h1>
        <hr>
        <div class="row">
            @foreach ($doctor_info as $doctor)
            <div class="col-lg-4">
              <div class="card shadow">
                <style>.card {
                  height: 630px;
              }</style>
                <div class="card-body ">
                    <img width="250" src="{{ asset('doctor_image') }}/{{ $doctor->doctor_image }}" alt="">
                </div>
                <div class="card-footer">
                  <h5><b><i>Doctor Name:</i></b></h5>
                  <span for=""><b class="text-info"><i>{{ $doctor->doctor_name }}</i></b></span><br>
                  <span class="">{{ $doctor->first()->degree }}
                    <a href="{{ route('doctor.view',$doctor_info->get()->[0]) }}" class="text-danger">More Information....</a>
                </span>
                  <a href="#" class="btn btn-info mt-3 ml-5">Make a Appointment</a>
                </div>
              </div>
              
            </div>
            @endforeach
          </div>
    </div>
    <div class="header-text mt-5">
        <h1 class="text-center"><b>এন্ডোসকপিক,ল্যাপারোস্কপিক,</b></h1>
        <hr>
        <div class="row">
            @foreach ($doctor_info as $doctor)
            <div class="col-lg-4">
              <div class="card shadow">
                <style>.card {
                  height: 630px;
              }</style>
                <div class="card-body ">
                    <img width="250" src="{{ asset('doctor_image') }}/{{ $doctor->doctor_image }}" alt="">
                </div>
                <div class="card-footer">
                  <h5><b><i>Doctor Name:</i></b></h5>
                  <span for=""><b class="text-info"><i>{{ $doctor->doctor_name }}</i></b></span><br>
                  <span class="">{{ $doctor->first()->degree }}
                   <a href="" class="text-danger">More Information....</a>
                </span>

                  <a href="#" class="btn btn-info mt-3 ml-5">Make a Appointment</a>
                </div>
              </div>
              
            </div>
            @endforeach
          </div>
    </div>
</div>
@endsection
