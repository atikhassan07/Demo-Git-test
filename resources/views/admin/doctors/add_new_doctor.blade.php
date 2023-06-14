@extends('admin.layouts.app')
@section('admin_content')
<form action="{{ route('store.doctor') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card shadow">
        <div class="card-header bg-info ">
            <h1 class="m-auto text-white"><b>Add Doctor</b></h1>
        </div>
    <div class="card-body">
    <div class="row">
        <div class="col-lg-6">
                    <style>
                        .border-info input {
                            border-color: #f0f1f5;
                            border-radius: 15px;
                        }
                    </style>
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>ডাক্তারের নাম:</b></label>
                        <input type="text" name="doctor_name"  class="form-control" placeholder="ডাক্তার এর নাম লিখুন">
                        @error('doctor_name')
                            <span  class="text-danger"><b>{{ $message }}*</b></span>
                        @enderror
                    </div>
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>ফোন নাম্বার:</b></label>
                        <input type="number" name="phone" placeholder="ফোন নাম্বার দিন" class="form-control">
                        @error('phone')
                        <span  class="text-danger"><b>{{ $message }}*</b></span>
                    @enderror
                    </div>
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>ডাক্তার বিশেষজ্ঞতা:</b></label>
                        <select name="doctor_specialist" id="" class="form-control" >
                            <option value="" disabled selected>ডক্টরের বিশেষজ্ঞতা নির্বাচন করুন</option>
                           @foreach ($diseas as $diseas)
                           <option value="{{ $diseas->diseas_name }}">{{ $diseas->diseas_name }}</option>
                           @endforeach
                        </select>
                        @error('doctor_specialist')
                        <span  class="text-danger"><b>{{ $message }}*</b></span>
                       @enderror
                    </div>
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>হসপিটাল এর নাম:</b></label>
                        <select name="hospital_name" id="" class="form-control">
                            <option value="" disabled selected>হসপিটাল নির্বাচন করুন</option>
                           @foreach ($hospital as $hospital)
                           <option  id="hospital" value="{{ $hospital->hospital_name }}">{{ $hospital->hospital_name }}</option>
                           @endforeach
                           </select>
                           @error('hospital_name')
                           <span  class="text-danger"><b>{{ $message }}*</b></span>
                        @enderror
                    </div>
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>হসপিটাল এর ঠিকানা:</b></label>
                        <input type="text" name="hospital_address" placeholder="হসপিটাল এর ঠিকানা" class="form-control">
                        @error('hospital_address')
                        <span  class="text-danger"><b>{{ $message }}*</b></span>
                       @enderror
                    </div>
                    
                    
                    <div class="my-3 border-info">
                        <label for="" class="text-info"><b>কখন বসবে:</b></label>
                        <input type="time" name="time_to" placeholder="ক্লিনিক বা চেম্বার এর ঠিকানা লিখুন" class="form-control">
                        @error('time_to')
                        <span  class="text-danger"><b>{{ $message }}*</b></span>
                       @enderror
                    </div>
                    <label for="" class="text-info"><b> ডক্টর এর ছবি দিন:</b></label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="doctor_image">
                        <label class="custom-file-label">Choose file</label>
                        @error('doctor_image')
                        <span  class="text-danger"><b>{{ $message }}*</b></span>
                       @enderror
                    </div>
                </div>

                {{-- col-lg-6  --}}
        <div class="col-lg-6">
            <div class="my-3 border-info">
                <label for="" class="text-info"><b>ইমেইল:</b></label>
                <input type="email" name="email" placeholder="ইমেইল দিন" class="form-control">
                @error('email')
                    <span  class="text-danger"><b>{{ $message }}*</b></span>
                 @enderror
            </div>
           
            <div class="my-3 border-info">
                <label for="" class="text-info"><b>ডক্টর ফিস:</b></label>
                <input type="text" name="doctor_fee" placeholder="ডক্টর ফিস" class="form-control">
                @error('doctor_fee')
                   <span  class="text-danger"><b>{{ $message }}*</b></span>
                @enderror
            </div>
          
            <div class="my-3 border-info">
                <label for="" class="text-info"><b>কোন দিন বসবে:</b></label>
               <select name="day" id="" class="form-control">
                <option value="" disabled selected>যেকোনো একটি নির্বাচন করুন</option>
                <option value="">শনি-রবি</option>
                <option value="">শনি-রবি</option>
                <option value="">শনি-রবি</option>
                <option value="">শনি-রবি</option>
                <option value="">শনি-রবি</option>
                <option value="">শনি-রবি</option>
                <option value="">শনি-রবি</option>
               </select>
               @error('day')
                <span  class="text-danger"><b>{{ $message }}*</b></span>
             @enderror
            </div>
            <div class="my-3 border-info">
                <label for="" class="text-info"><b>ডিগ্রি:</b></label>
               <input type="text" name="degree" class="form-control" placeholder="ডিগ্রি লিখুন">
               @error('degree')
                <span  class="text-danger"><b>{{ $message }}*</b></span>
             @enderror
            </div>
            <div class="my-3 border-info">
                <label for="" class="text-info"><b> Room No:</b></label>
                <input type="text" name="room_no" placeholder="room_no" class="form-control">
                @error('room_no')
                <span  class="text-danger"><b>{{ $message }}*</b></span>
             @enderror
            </div>
            <div class="my-3 border-info">
                <label for="" class="text-info"><b> কখন থেকে:</b></label>
                <input type="time" name="time_from" placeholder="ক্লিনিক বা চেম্বার এর ঠিকানা লিখুন" class="form-control">
                @error('time_from')
                <span  class="text-danger"><b>{{ $message }}*</b></span>
             @enderror
            </div>
        </div>
    </div>
    </div>
    <div class="card-footer">
        <style>
         .card-footer button{
            background: green;
            color: #fff;
         }
        </style>
        <button type="submit" class="btn">Add Doctor</button>
    </div>
</div>
</form>
@endsection