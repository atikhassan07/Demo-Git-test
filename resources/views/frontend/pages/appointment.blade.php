<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select doctorsel hospital">
              <option value="" disabled>Choose a Hospital</option>
                @foreach ($hospitals as $hospital)
                <option value="{{ $hospital->id }}">{{ $hospital->hospital_name }}</option>
           @endforeach
            </select>
                  
         
        </div>
          <div class="col-lg-12">
            <select name="departement" id="departement" class="custom-select doctorsel doctor">
              <option value="" disabled>Choose a Doctor</option>
                @foreach ($doctor_info as $doctor)
                <option value="{{ $doctor->doctor_name }}">{{ $doctor->doctor_name }}</option>
           @endforeach
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select doctorsel doctor">
              <option value="" disabled>Choose a Doctor</option>
                @foreach ($doctor_info as $doctor)
                <option value="{{ $doctor->time_to }}">{{ $doctor->time_to }}-{{ $doctor->time_from }}</option>
           @endforeach
            </select>    
            
            
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            
            <select name="departement" id="departement" class="custom-select">
                @foreach ($diseas as $diseas)
                <option value="general">{{ $diseas->diseas_name }}</option>
           @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->
  {{-- // In your Javascript (external .js resource or <script> tag) --}}
@section('footer_script')
<script>
  $('.doctor').change(function(){
      var id = $(this).val();
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });

    $.ajax({
          type: 'POST',
          url: 'getdoctor',
          data: {'id': id},
          success:function(data){
            alert(data);
          }
    });
  })
</script>
@endsection
