@extends('admin.layouts.app')
@section('admin_content')
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="m-auto"><b>Personal Information Update</b></h1>
                </div>
                <div class="card-body">
                    <style>
                        .border-info input{
                            border-color: #f0f1f5;
                            border-radius: 15px;
                        }
                    </style>
                    {{-- @if (session('wrong_old'))
                        <div class="alert alert-danger">Current PassWord Does Not Match</div>
                    @endif --}}
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>Your Name:</b></label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>Current Password:</b></label>
                        <input type="password" name="old_password" placeholder="Enter Current Password" class="form-control">
                    </div>
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>New Password:</b></label>
                        <input type="password" name="password" placeholder="Enter Current Password" class="form-control">
                    </div>
                    <div class="my-3 ">
                        <label for="" class="text-info"><b>Upload Profile Image:</b></label>
                        <input type="file" name="profile_photo" class="form-control">
                    </div>
                    {{-- <div class="input-group mb-3">
                        <input type="file" class="form-control" name="profile_photo">
                        <div class="input-group-append">
                            <style>
                                .custom_btn{
                                    background-color: #0B2A97;
                                    color: #fff;
                                }

                            </style>
                            <button type="submit" class="btn  custom_btn" type="button">Upload Image</button>
                        </div>
                    </div> --}}
                </div>
                <div class="card-footer">
                    <style>
                     .card-footer button{
                        background: #0B2A97;
                        color: #fff;
                     }
                    </style>
                    <button type="submit" class="btn">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection