@extends('admin.layouts.app')
@section('admin_content')
<table class="table table-striped shadow">
    <a href="{{ route('add.diseas') }}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"> Add New</a>
    <div class="card">
        <thead>
          <tr>
            <th scope="col">SL NO:</th>
            <th scope="col">Hospital Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      <div class="card-body ">

         @foreach ($hospital as $key=> $hospital)
         <tbody>
            <td>{{ $key+1 }}</td>
            <td>{{ $hospital->hospital_name }}</td>
            <hr>
          
           <td>
            <a href="{{ route('edit.diseas', $hospital->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
              <a href="{{ route('delete.hospital', $hospital->id) }}" class="btn btn-danger shadow btn-xs sharp" id="delete"><i class="fa fa-trash"></i></a>
            </td>
          </td>
          
          </tbody>
         @endforeach
        </div>
     
        </table>
    </div>
    {{-- add deises modal  --}}
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Diseas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('store.hospital') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <style>
              .form-group input{
                  border-color: #f0f1f7;
                  border-radius: 10px;
              }
          </style>
            
            <div class="mb-3">
             <div class="form-group">
                <label for="" class="text-info"><b>Add Hospital Name:</b></label>
              <input type="text" name="hospital_name" placeholder="Enter Hospital Name" class="form-control">
             </div>
            </div>  
                      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary custom-btn2 btn-sm" data-dismiss="modal">Close</button>
          <style>
            .custom-btn{
                background-color: #0B2A97;
            }
            .custom-btn2{
                background-color: #A02CFA;
            }
            input{
                border-color: #f0f1f5
            }
          </style>
          <button type="submit" class="btn btn-primary custom-btn btn-sm">Add Now</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection