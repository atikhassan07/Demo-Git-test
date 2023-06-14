@extends('admin.layouts.app')
@section('admin_content')

    <div class="col-lg-6 m-auto">
        <div class="card shadow p-5">
        <form action="{{ route('add.diseas') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <style>
              .form-group input{
                  border-color: #f0f1f7;
                  border-radius: 10px;
              }
          </style>
            
            <div class="mb-3">
             <div class="form-group">
              <label for=""><b class="text-info">Diseas Nam:</b></label>
              <input type="text" name="diseas_name" placeholder="Enter Diseas Name" class="form-control">
             </div>
            </div>  
            <div class="mb-3">
              <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="diseas_image">
                    <label class="custom-file-label">Choose file</label>
                </div>
        
            </div>            </div>            
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

@endsection