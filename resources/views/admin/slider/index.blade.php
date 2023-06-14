@extends('admin.layouts.app')
@section('admin_content')
<table class="table table-striped  shadow">
  <h3 class="text-primary mb-3">All Slider List</h3>
  <a href="{{ route('add.slider') }}" class="btn btn-success btn-sm">Add New Slider</a>
        <thead>
          <tr>
            <th scope="col">SL NO:</th>
            <th scope="col">Slider Title</th>
            <th scope="col">Slider Sub Title</th>
            <th scope="col">Slider Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
     
      <div class="card-body">
          @foreach ($sliders as $key=> $slider)
          <tbody>
            <td>{{ $key+1 }}</td>
            <td>{{ $slider->slider_title }}</td>
            <td>{{ $slider->slider_sub_title }}</td>
            <td><img width="100" src="{{ asset('slider/images') }}/{{ $slider->slider_image }}" alt=""></td>
           
           <td>
              <a href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('delete.slider', $slider->id) }}" class="btn btn-danger shadow btn-xs sharp" id="delete"><i class="fa fa-trash"></i></a>
            </td>
          </td>
          </tbody>
          @endforeach
        </div>
        </table>
    
    {{-- view doctor information  --}}
  
    <!-- Modal -->
    
@endsection