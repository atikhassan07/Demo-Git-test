@extends('admin.layouts.app')
@section('admin_content')
<table class="table table-striped  shadow">
  <h3 class="text-primary">All Doctor List</h3>
        <thead>
          <tr>
            <th scope="col">SL NO:</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Doctor Number</th>
            <th scope="col">Doctor Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
     
      <div class="card-body">
          @foreach ($doctors as $key=> $doctor)
          <tbody>
            <td>{{ $key+1 }}</td>
            <td>{{ $doctor->doctor_name }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>{{ $doctor->email }}</td>
           
           <td>
              <a href="{{ route('edit.doctor', $doctor->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="#" class="btn btn-success shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#viewInformation"><i class="fa fa-eye"></i></a>
              <a href="{{ route('delete.doctor',$doctor->id) }}" class="btn btn-danger shadow btn-xs sharp" id="delete"><i class="fa fa-trash"></i></a>
            </td>
          </td>
          </tbody>
          @endforeach
        </div>
        </table>
    
    {{-- view doctor information  --}}
  
    <!-- Modal -->
    {{-- <div class="modal fade" id="viewInformation" tabindex="-1" role="dialog" aria-labelledby="viewInformationLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewInformationLabel">{{ $doctor->first()->doctor_name }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <div class="img">
            <img width="200" src="{{ asset('doctor_image') }}/{{ $doctor->doctor_image }}" alt="">
            <h4><b>Email:</b></h4>
            <small>{{ $doctor->email }}</small>
            <h4><b>Number:</b></h4>
            <small>{{ $doctor->phone }}</small>
            <h4><b>Chamber:</b></h4>
            <small>{{ $doctor->hospital_name }}</small>
            <h4><b>Schedule:</b></h4>
            <small>{{ $doctor->time_to }} -</small>
            <small>{{ $doctor->time_from }}</small>
            <h4><b>Degress:</b></h4>
            <small>{{ $doctor->degree }}</small>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> --}}
@endsection