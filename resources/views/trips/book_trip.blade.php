@extends('layouts.app')

@section('content')
 
 <style>
   span#arriveSelectBoxIt {
    width: 100%!important;
    height: 46px;
    padding: 9px;
}
span#arriveSelectBoxItContainer {
    width: 100%!important;
}
 </style> 

<div class="container" style=" width: 1400px; ">
    <div class="row" style=" margin-top: 102px; ">
 
        <div class="col-md-4">
            <div class="panel ">
                 <div class="panel-body">
                   <div class="row">
                       <div class="col-md-12">
                           <h4>Your booking details</h4>
                           <hr>
                       </div>
                       <div class="col-md-6">
                           <label for="checkin">Check-In</label>
                           <p><strong>Sun, Oct 28, 2021</strong></p>
                            12:00 AM - 01:00 PM
                       </div>
                       <div class="col-md-6">
                        <label for="checkin">Check-Out</label>
                        <p><strong>Sun, Oct 31, 2021</strong></p>
                         12:00 AM - 01:00 PM
                       </div>
                       <div class="col-md-12">
                           <br>
                           <h4 class="text-warning"><strong><i class="fa fa-info-circle"></i> Just 5 days away!</strong></h4>
                       </div>
                       <div class="col-md-12">
                           <br>
                           <p>Total length of stay:</p>
                           <p><strong>3 nights</strong></p>
                       </div>
                       <div class="col-md-12">
                         <br>
                           <p>You selected:</p>
                           <p><strong>Deluxe Twin Nile View</strong></p>
                       </div>
                   </div>
                </div>
              </div>
              <div class="panel ">
                <div class="panel-body">
                  <div class="row">
                      <div class="col-md-12">
                          <h4>Price <span class="pull-right">EGP 7,387.63 </span></h4> 
                          <hr>
                      </div>
                      <div class="col-md-12">
                          <p>Under Egyptian law all foreign guests must pay in a foreign currency, not in Egyptian currency.
                            Egyptian citizens are required to pay in the local currency according to the exchange rate at the time of payment.</p>
                      </div>
                      <div class="col-md-12">
                        <br>
                         <h5>Additional charges</h5>
                         <br>
                         <p>VAT <span class="pull-right">EGP 1,158</span></p>
                         <br>
                         <p>Property service charge <span class="pull-right">EGP 887</span></p>
                         <br>
                         <p>City tax <span class="pull-right">EGP 83</span></p>
                      </div>
                  </div>
               </div>
             </div>
        </div>
        <div class="col-md-8">
             
            <div class="row">
                <div class="col-md-12 main-card">
                    <div class="panel ">
                        <span class="place">Luxor</span>
                        <div class="panel-body">
                           <div class="row">
                               <div class="col-md-3">
                                <img src="https://cf.bstatic.com/xdata/images/hotel/square200/311059242.webp?k=07b9a906954a36598e20a6623eac0235b4fa0aa47d62c26ef8fcca6b12d583b1&o=&s=1" alt="" srcset="">
                               </div>
                               <div class="col-md-9">
                                <h5 class="panel-title">Special title treatment</h5>
                                <p class="panel-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                                <br>
                                </div>
                           </div>
                            
                        </div>
                      </div>
                </div>

                <div class="col-md-12">
                    <div class="panel ">
                         <div class="panel-body">
                            <h3>Enter your details</h3>
                            <hr>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div  style="margin-bottom:3px;" class="input-group-lg">
                                        <label for="floatingInputGrid">First name</label>
                                      <input type="text" class="form-control" id="floatingInputGrid" placeholder="Your first name" >
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div  style="margin-bottom:3px;" class=" input-group-lg">
                                        <label for="floatingInputGrid">Last name</label>
                                      <input type="text" class="form-control" id="floatingInputGrid" placeholder="Your last name"  >
                                    </div>
                                  </div>
                              </div>
                              <div style="margin-bottom:3px;" class=" input-group-lg">
                                <label for="floatingInputGrid">Email</label>
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="Your email address"  >
                              </div>
                              <div style="margin-bottom:3px;" class=" input-group-lg">
                                <label for="floatingInputGrid">Confirm Email</label>
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="Your email address"  >
                              </div>
                              <br>
                               <h4>Special requests</h4>
                               <hr>
                              <div style="margin-bottom:3px;" class=" input-group-lg">
                                <label for="comment">Please write your requests in English or Arabic. (optional)</label>
                                 <textarea name="" style="height: 100px;" class="form-control" id="comment" cols="30" rows="10"></textarea>
                              </div>
                               <br>
                               <h4>Your arrival time</h4>
                               <hr>
                                <p><i class="fa fa-clock-o"></i> Your rooms will be ready for check-in between 12:00 PM and 12:00 PM</p>
                                <p><i class="fa fa-bed"></i> 24-hour front desk – help whenever you need it!</p>
                                <br>
                               <div style="margin-bottom:3px;" class=" input-group-lg">
                                <label for="arrive">Add your estimated arrival time</label>
                                 <select style=" height: 47px; " name="arrive" class="form-control" id="arrive">
                                    <option value="1">i don't know</option>
                                    <option value="2">12:00 AM - 01:00 AM </option>
                                    <option value="3">12:00 AM - 01:00 AM </option>
                                    <option value="4">12:00 AM - 01:00 AM </option>
                                    <option value="">12:00 AM - 01:00 AM </option>
                                    <option value="">12:00 AM - 01:00 AM </option>
                                    <option value="">12:00 AM - 01:00 AM </option>
                                    <option value="">12:00 AM - 01:00 AM </option>
                                    <option value="">12:00 AM - 01:00 AM </option>
                                    <option value="">12:00 AM - 01:00 AM </option>
                                </select>
                              </div>
                              <br>
                              <button class="btn btn-info btn-lg pull-right">Next >></button>
                        </div>
                      </div>

                      <div class="panel ">
                        <div class="panel-body">
                           <h3>Enter your Info</h3>
                           <hr>
 
                           <div class="row g-2">
                           <div class="col-md-6">
                            <div  style="margin-bottom:3px;" class="input-group-lg">
                              <label for="arrive">Country/Region</label>
                              <select style=" height: 47px; " name="arrive" class="form-control" id="arrive">
                                 <option value="1">Egypt</option>
                                 <option value="2">Saudi Arabia</option>
                                 <option value="3">Iruq</option>
                                 <option value="4">United Kindom </option>
                             </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div  style="margin-bottom:3px;" class=" input-group-lg">
                              <label for="floatingInputGrid">Phone Number</label>
                               <input type="text" class="form-control" id="floatingInputGrid" placeholder="Your Phone Number"  >
                            </div>
                          </div>
                        </div>
                        <div class="row g-2">
                          <h5 style="margin-left: 14px;margin-top: 12px;margin-bottom: 7px;">Birth Date</h5>
                          <div class="col-md-2">
                            <div  style="margin-bottom:3px;" class="input-group-lg">
                              <label for="arrive">Day</label>
                              <select style=" height: 47px; " name="arrive" class="form-control" id="arrive">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                             </select>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div  style="margin-bottom:3px;" class="input-group-lg">
                              <label for="arrive">Month</label>
                              <select style=" height: 47px; " name="arrive" class="form-control" id="arrive">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                             </select>
                            </div>
                          </div>
                          
                          <div class="col-md-2">
                            <div  style="margin-bottom:3px;" class="input-group-lg">
                              <label for="arrive">Year</label>
                              <select style=" height: 47px; " name="arrive" class="form-control" id="arrive">
                                <option value="1">1800</option>
                                <option value="2">1900</option>
                                <option value="3">2000</option>
                                <option value="4">2021</option>
                             </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                        
                       </div>
                       <br>
                       <button class="btn btn-info btn-lg pull-right">Next >></button>

                        </div>
 
                       </div>


                       <div class="panel ">
                        <div class="panel-body">
                           <h3>Payment Method</h3>
                           <hr>
                            <div style=" display: flex; ">
                              <input checked type="radio" name="cash" id="cash">
                              <label style=" margin: 0; padding: 3px; margin-top: -5px; font-weight: bold; " for="cash">No Card?</label>
                            </div>
                           <button class="btn btn-info btn-lg pull-right">Finish</button>
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
<script src="{{asset('assets/js/select_box.js')}}"></script>

<script>
  $("select").selectBoxIt();

</script>

@endsection

