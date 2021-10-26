@extends('layouts.app')

@section('content')
 

<div class="container" style=" width: 1470px; ">
    <div class="row" style=" margin-top: 102px; ">
        <div class="col-md-12">
            <div class="tab-para">
	
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <div class="single-tab-select-box">

                            <h2>destination</h2>

                            <div class="travel-select-icon">
                                <select class="form-control ">
                                      <option value="default">enter your destination country</option><!-- /.option-->
                                      <option value="turkey">turkey</option><!-- /.option-->
                                      <option value="russia">russia</option><!-- /.option-->
                                      <option value="egept">egypt</option><!-- /.option-->
                                </select><!-- /.select-->
                            </div><!-- /.travel-select-icon -->



                        </div><!--/.single-tab-select-box-->
                    </div><!--/.col-->

                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <div class="single-tab-select-box">
                            <h2>location</h2>
                            <div class="travel-select-icon">
                                <select class="form-control ">
                                      <option value="default">enter your destination location</option><!-- /.option-->
                                      <option value="istambul">istambul</option><!-- /.option-->
                                      <option value="mosko">mosko</option><!-- /.option-->
                                      <option value="cairo">cairo</option><!-- /.option-->
                                </select><!-- /.select-->
                            </div><!-- /.travel-select-icon -->
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="single-tab-select-box">
                            <h2>check in</h2>
                            <div class="travel-check-icon">
                                <form action="#">
                                    <input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
                                </form>
                            </div><!-- /.travel-check-icon -->
                        </div><!--/.single-tab-select-box-->
                    </div><!--/.col-->

                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="single-tab-select-box">
                            <h2>check out</h2>
                            <div class="travel-check-icon">
                                <form action="#">
                                    <input type="text" name="check_out" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
                                </form>
                            </div><!-- /.travel-check-icon -->
                        </div><!--/.single-tab-select-box-->
                    </div><!--/.col-->

                    <div class="col-lg-2 col-md-1 col-sm-4">
                        <div class="single-tab-select-box">
                            <h2>duration</h2>
                            <div class="travel-select-icon">
                                <select class="form-control ">

                                      <option value="default">5</option><!-- /.option-->
                                      <option value="10">10</option><!-- /.option-->
                                      <option value="15">15</option><!-- /.option-->
                                      <option value="20">20</option><!-- /.option-->

                                </select><!-- /.select-->
                            </div><!-- /.travel-select-icon -->
                        </div><!--/.single-tab-select-box-->
                    </div><!--/.col-->

                    <div class="col-lg-2 col-md-1 col-sm-4">
                        <div class="single-tab-select-box">
                            <h2>members</h2>
                            <div class="travel-select-icon">
                                <select class="form-control ">
                                      <option value="default">1</option><!-- /.option-->
                                      <option value="2">2</option><!-- /.option-->
                                      <option value="4">4</option><!-- /.option-->
                                      <option value="8">8</option><!-- /.option-->
                                </select><!-- /.select-->
                            </div><!-- /.travel-select-icon -->
                        </div><!--/.single-tab-select-box-->
                    </div><!--/.col-->

                </div><!--/.row-->

                <div class="row">
                    <div class="col-sm-5">
                    </div><!--/.col-->
                    <div class="clo-sm-7">
                        <div style=" margin-right: 14px; " class="about-btn travel-mrt-0 pull-right">
                            <button class="btn btn-info">
                                search	
                            </button><!--/.travel-btn-->
                        </div><!--/.about-btn-->
                    </div><!--/.col-->
                </div><!--/.row-->

            </div>
        </div>
        <div class="col-md-3">
            <h3 class="text-center">Filters</h3>
            <hr>
            <section id="sidebar">
                <div class="py-3">
                    <br>
                    <h3 class="font-weight-bold">Budget</h3>
                    <hr>
                    <div class="row">
                        <div class="co-md-12 col-sm-12">
                            <div class="travel-filter">
                                <div class="info_widget">
                                    <div class="price_filter">
                                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 22.3083%; width: 54.7%;"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 22.3083%;"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 77.0083%;"></span>
                                         </div><!--/.slider-range-->
                                        <div class="price_slider_amount">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price">
                                        </div><!--/.price_slider_amount-->
                                    </div><!--/.price-filter-->
                                </div><!--/.info_widget-->
                            </div><!--/.travel-filter-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.travel-budget-->
                <div class="py-3">
                    <br>
                    <h3 class="font-weight-bold">Brands</h3>
                    <hr>
                    <form class="brand">
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div>
                    </form>
                </div>
                <div class="py-3">
                    <br>
                    <h3 class="font-weight-bold">Rating</h3>
                    <hr>
                    <form class="rating">
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star px-1 text-muted"></span> <span class="fa fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star px-1 text-muted"></span> <span class="fa fa-star px-1 text-muted"></span> <span class="fa fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fa fa-star"></span> <span class="fa fa-star px-1 text-muted"></span> <span class="fa fa-star px-1 text-muted"></span> <span class="fa fa-star px-1 text-muted"></span> <span class="fa fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-md-9">
            <h3 class="text-center">Hurghada: 433 properties found</h3>
            <hr>
            
            <div class="row">
                <div class="col-md-12 main-card">
                    <div class="panel scale-card">
                        <span class="place">Luxor</span>
                        <span class="wish_list"><i class="fa fa-heart"></i></span>
                        <div class="panel-body">
                           <div class="row">
                               <div class="col-md-3">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/square200/311059242.webp?k=07b9a906954a36598e20a6623eac0235b4fa0aa47d62c26ef8fcca6b12d583b1&o=&s=1" alt="" srcset="">
                               </div>
                               <div class="col-md-9">
                                <h5 class="panel-title">Special title treatment</h5>
                                <p class="panel-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                <br>
                                <a href="#" class="btn btn-info">Go somewhere</a>
                               </div>
                           </div>
                            
                        </div>
                      </div>
                </div>
                <div class="col-md-12 main-card">
                    <div class="panel scale-card">
                        <span class="place">Cairo</span>
                        <span class="wish_list"><i class="fa fa-heart-o"></i></span>
                        <div class="panel-body">
                           <div class="row">
                               <div class="col-md-3">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/square200/311059242.webp?k=07b9a906954a36598e20a6623eac0235b4fa0aa47d62c26ef8fcca6b12d583b1&o=&s=1" alt="" srcset="">
                               </div>
                               <div class="col-md-9">
                                <h5 class="panel-title">Special title treatment</h5>
                                <p class="panel-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                <br>
                                <a href="#" class="btn btn-info">Go somewhere</a>
                               </div>
                           </div>
                            
                        </div>
                      </div>
                </div>
                <div class="col-md-12 main-card">
                    <div class="panel scale-card">
                        <span class="place">Aswan</span>
                        <span class="wish_list"><i class="fa fa-heart-o"></i></span>
                        <div class="panel-body">
                           <div class="row">
                               <div class="col-md-3">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/square200/311059242.webp?k=07b9a906954a36598e20a6623eac0235b4fa0aa47d62c26ef8fcca6b12d583b1&o=&s=1" alt="" srcset="">
                               </div>
                               <div class="col-md-9">
                                <h5 class="panel-title">Special title treatment</h5>
                                <p class="panel-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                <br>
                                <a href="#" class="btn btn-info">Go somewhere</a>
                               </div>
                           </div>
                            
                        </div>
                      </div>
                </div>
                <div class="col-md-12 main-card">
                    <div class="panel scale-card">
                        <span class="place">Giza</span>
                        <span class="wish_list"><i class="fa fa-heart"></i></span>
                        <div class="panel-body">
                           <div class="row">
                               <div class="col-md-3">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/square200/311059242.webp?k=07b9a906954a36598e20a6623eac0235b4fa0aa47d62c26ef8fcca6b12d583b1&o=&s=1" alt="" srcset="">
                               </div>
                               <div class="col-md-9">
                                <h5 class="panel-title">Special title treatment</h5>
                                <p class="panel-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                <br>
                                <a href="#" class="btn btn-info">Go somewhere</a>
                               </div>
                           </div>
                            
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


 
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