{{-- @extends('admin.layouts.app')
@section('admin_content')
<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="card shadow">
            <div class="card-header">
        
            </div>
            <div class="card-body">
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
</div>
@endsection --}}