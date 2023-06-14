    <!-- SLIDER AREA  -->
    <div class="slider-col">
        <div class="slider">
           @foreach ($sliders as $slider)
           <div>
            <img src="{{ asset('slider/images') }}/{{ $slider->slider_image }}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="slider-text">
                    <h2>{{ $slider->slider_title }}</h2>
                    <p>{{ $slider->slider_sub_title }}</p>
                  
                </div>
            </div>


        </div>
           @endforeach
            </div> 
        </div>
    </div>
    <!-- SLIDER AREA  END-->