@extends('layouts.head_foot')
@section('amb')

<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Book Ambulance From Here</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Book Ambulance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Contact Info Style2 Area-->
        <section class="contact-info-style2-area">
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-6">
                        <div class="contact-info-style2__image">
                            <div class="inner mt-5">
                                <img src="assets/images/resources/emergency-situation-1024x682.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="contact-info-style1__content">
                            <div class="sec-title">
                                <div class="icon">
                                    <span class="icon-heartbeat"></span>
                                </div>
                                <div class="sub-title">
                                    <h3>Book Ambulance For Any Emergency</h3>
                                </div>
                                <h2>We’re here to help <br> You're in safe hands</h2>
                            </div>
                            <div class="inner-content">
                              
                                <h3>Ambulance Details</h3>
                                <p>Aga Khan University Hospital
<br> Stadium Road,
Karachi 74800,
Pakistan.</p>
                                <h2>
                                    <a href="tel:123456789">+1-(246) 333-0089</a>
                                </h2>
                                <h4><a href="mailto:yourmail@email.com">needhelp@company.com</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Contact Info Style2 Area-->

        <center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('bookingmessage'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "BOOKING REQUEST ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>

        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
        <form method="POST">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <span class="icon-heartbeat"></span>
                    </div>
                    <div class="sub-title">
                        <h3>Book Your Ambulance For Any Emergency</h3>
                    </div>
                    <h2>Fill This Up To Book Ambulance</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form">
                            <form action="{{URL::TO('/bookambulanceinserted')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" class="form-control border-black" name="form_name"
                                                    placeholder="Full Name" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" class="form-control border-black" name="form_email" 
                                                    placeholder="Email Address" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="date" class="form-control border-black" name="form_date" 
                                                    placeholder="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="time" class="form-control border-black" name="form_time"
                                                   >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" class="form-control border-black" name="form_phone" value="" 
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box" >
                                                <!-- <input type="text" name="form_subject" value="" id="formSubject"
                                                    placeholder="Subject"> -->
                                                    <select  class="form-control border-black w-100" name="form_driver" value="">
                                    <option value="Select Drivers" disabled selected> Select Drivers</option>
                                 <option value="LifeLine Ambulance.">LifeLine Ambulance.</option>
                                    <option value="SwiftCare EMS.">SwiftCare EMS.</option>
                                    <option value="Guardian Medics . ">Guardian Medics .</option>
                                    <option value="Rapid Response Ambulance. ">Rapid Response Ambulance.</option>
                                 <option value="Caring Hearts EMS.">Caring Hearts EMS.</option>
                                 <option value="Paramedics Plus">Paramedics Plus</option>
                                 <option value="First Response Transport ">First Response Transport </option>
                                 <option value="VitalAid Ambulance ">VitalAid Ambulance</option>
                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" class="form-control border-black" name="form_address" value="" 
                                                    placeholder="Enter Your Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box" >
                                                <!-- <input type="text" name="form_subject" value="" id="formSubject"
                                                    placeholder="Subject"> -->
                                                    <select  class="form-control border-black w-100" name="form_cond" value="" >
        <option value="Current Situation " disabled selected> Condition</option>
        <option value="Emergency.">Emergency</option>
        <option value="Non Emergency.">Non Emergency</option>

     </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                      

                                <div class="row">
                                    <div class="col-xl-6 text-center">
                                        <div class="button-box">
                                            <button  type="submit">                                             Submit
                                            
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->

        <!--Start Google Map Style2 Area-->
       
        <!--End Google Map Style2 Area-->



@endsection 