@extends('layouts.app')

@section('content')
<style>
  
 
</style>

@include('layouts.body')
@include('layouts.footer')

@endsection 


@section('scripts')

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>


<script src="{{asset('assets/js/jquery.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!--modernizr.min.js-->
<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


<!--bootstrap.min.js-->
<script  src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- bootsnav js -->
<script src="{{asset('assets/js/bootsnav.js')}}"></script>

<!-- jquery.filterizr.min.js -->
<script src="{{asset('assets/js/jquery.filterizr.min.js')}}"></script>

<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--jquery-ui.min.js-->
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>

<!-- counter js -->

<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

<script src="{{asset('assets/js/waypoints.min.js')}}"></script>

<!--owl.carousel.js-->
<script  src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<!-- jquery.sticky.js -->
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

<!--datepicker.js-->
<script  src="{{asset('assets/js/datepicker.js')}}"></script>

<!--Custom JS-->
<script src="{{asset('assets/js/custom.js')}}"></script>


@endsection