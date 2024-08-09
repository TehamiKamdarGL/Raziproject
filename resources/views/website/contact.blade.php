@extends('layouts.main')

@section('main-section')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-0 bread">Contact</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-round-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section ftco-booking bg-light">
    	<div class="container ftco-relative">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Contact us for any queries</p>
          </div>
        </div>
        <h3 class="vr">Call Us: 012-3456-7890</h3>
    		<div class="row justify-content-center">
    			<div class="col-md-10 ftco-animate">
    				<form action="#" class="appointment-form">
	            <div class="row">
	              <div class="col-sm-6">
	                <div class="form-group">
			              <input type="text" class="form-control" id="appointment_name" placeholder="Name">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
			              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
                    <input type="text" class="form-control" id="appointment_name" placeholder="Subject">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" id="phone" placeholder="Phone">
	                </div>
	              </div>
	              <div class="col-md-12">
	              	<div class="form-group">
		                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
		              </div>
	              </div>
		          </div>
		          <div class="form-group">
	              <input type="submit" value="Send" class="btn btn-primary">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

@endsection