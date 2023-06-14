        
        {{-- toaster cdn --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- sweet alert  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- jquery cdn  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>  
            $(document).on("click", "#delete", function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                   swal({
                     title: "Are you Want to delete?",
                     text: "Once Delete, This will be Permanently Delete!",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                   })
                   .then((willDelete) => {
                     if (willDelete) {
                          window.location.href = link;
                     } else {
                       swal("Safe Data!");
                     }
                   });
               });
        </script>
        {{-- before  logout showing alert message --}}
        <script>  
            $(document).on("click", "#logout", function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                   swal({
                     title: "Are you Want to logout?",
                     text: "",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                   })
                   .then((willDelete) => {
                     if (willDelete) {
                          window.location.href = link;
                     } else {
                       swal("Not Logout!");
                     }
                   });
               });
        </script>
        <script>
        @if(Session::has('messege'))
         var type="{{Session::get('alert-type','info')}}"
         switch(type){
             case 'info':
                  toastr.info("{{ Session::get('messege') }}");
                  break;
             case 'success':
                 toastr.success("{{ Session::get('messege') }}");
                 break;
             case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                 break;
             case 'error':
                 toastr.error("{{ Session::get('messege') }}");
                 break;
               }
        @endif
        </script>
        <!-- Required vendors -->
        <script src="{{ asset('backend') }}/vendor/global/global.min.js"></script>
        <script src="{{ asset('backend') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="{{ asset('backend') }}/vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="{{ asset('backend') }}/js/custom.min.js"></script>
        <script src="{{ asset('backend') }}/js/deznav-init.js"></script>
        <script src="{{ asset('backend') }}/vendor/owl-carousel/owl.carousel.js"></script>
          <!-- Datatable -->
        <script src="{{ asset('backend') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('backend') }}/js/plugins-init/datatables.init.js"></script>
        <!-- Chart piety plugin files -->
        <script src="{{ asset('backend') }}/vendor/peity/jquery.peity.min.js"></script>
        
        <!-- Apex Chart -->
        <script src="{{ asset('backend') }}/vendor/apexchart/apexchart.js"></script>
        
        <!-- Dashboard 1 -->
        <script src="{{ asset('backend') }}/js/dashboard/dashboard-1.js"></script>
          <!-- Datatable -->
    <script src="{{ asset('backend') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/js/plugins-init/datatables.init.js"></script>

        <script>
            function carouselReview(){
                /*  testimonial one function by = owl.carousel.js */
                jQuery('.testimonial-one').owlCarousel({
                    loop:true,
                    autoplay:true,
                    margin:30,
                    nav:false,
                    dots: false,
                    left:true,
                    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
                    responsive:{
                        0:{
                            items:1
                        },
                        484:{
                            items:2
                        },
                        882:{
                            items:3
                        },	
                        1200:{
                            items:2
                        },			
                        
                        1540:{
                            items:3
                        },
                        1740:{
                            items:4
                        }
                    }
                })			
            }
            jQuery(window).on('load',function(){
                setTimeout(function(){
                    carouselReview();
                }, 1000); 
            });
        </script>
    </body>
</html>
