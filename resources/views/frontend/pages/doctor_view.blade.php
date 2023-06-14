@extends('frontend.layouts.app')
@section('main_content')
<div class="row mt-5">
    <div class="col-lg-8 m-auto">
        <div class="card shadow">
            <div class="card-header bg-gray">
                
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img width="300" src="{{ asset('doctor_image') }}/{{ $doctor_info->first()->doctor_image }}" alt="">
                </div>
                <div class="col-lg-8">
                    <label for="" class="mt-4">Name:</label>
                    <h3>{{ $doctor_info->first()->doctor_name }}</h3>
                    <h6><b>Email:</b></h6>
                    <small>{{ $doctor_info->first()->email }}</small>
                    <h6><b>Number:</b></h6>
                    <small>{{ $doctor_info->first()->phone }}</small>
                    <h6><b>Chamber:</b></h6>
                    <small>{{ $doctor_info->first()->hospital_name }}</small>
                    <h6><b>Schedule:</b></h6>
                    <small>{{ $doctor_info->first()->time_to }} -</small>
                    <small>{{ $doctor_info->first()->time_from }}</small>
                    <h6><b>Degress:</b></h6>
                    <small>{{ $doctor_info->first()->degree }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
