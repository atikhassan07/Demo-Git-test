@extends('admin.layouts.app')
@section('admin_content')
<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="card">
            <div class="card-header text-center">
                <h3 ><b><i>Add Slider</i></b></h3>
            </div>
            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">  
                @csrf          
            <div class="card-body">
                <style>
                    .card-body input{
                        border-color: rgb(222, 227, 232);
                        border-radius: 15px;
                    }
                    .card-footer button{
                        background-color:#2723a5;
                    }
                </style>
               <div class="mb-3">
                <label for=""><b>Slider  Title:</b></label>
                <input type="text" name="slider_title" class="form-control" placeholder="Enter Slider Title">
               </div>
               <div class="mb-3">
                <label for=""><b>Slider Sub Title:</b></label>
                <input type="text" name="slider_sub_title" class="form-control" placeholder="Enter Slider Sub Title">
               </div>
               <div class="mb-3">
                <label for=""><b>Slider Sub Title:</b></label>
                <input type="file" name="slider_image" class="form-control">
               </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('all.slider') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-success">Add Slider</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection