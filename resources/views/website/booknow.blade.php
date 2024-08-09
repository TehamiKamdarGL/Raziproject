@extends('layouts.main')

@section('main-section')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-0 bread">Book Now</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Book Now <i class="ion-ios-arrow-round-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section ftco-booking bg-light">
    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alert('{{ session('success') }}');
        });
    </script>
@endif

    	<div class="container ftco-relative">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Booking</span>
            <h2 class="mb-4">Make an Appointment</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <h3 class="vr">Call Us: 012-3456-7890</h3>
    		<div class="row justify-content-center">
    			<div class="col-md-10 ftco-animate">


    				<form action="/book" class="appointment-form" method="post">
						@csrf
	            <div class="row">
	              <div class="col-sm-6">
	                <div class="form-group">
			              <input type="text" class="form-control" id="appointment_name" placeholder="Name" name="name">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
			              <input type="text" class="form-control" id="appointment_email" placeholder="Email" name="email">
			            </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                  <input type="date" class="form-control" placeholder="Date" name="date">
	                </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                  <input type="time" class="form-control" placeholder="Time" name="time">
	                </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
					<select class="form-control" name="stylist" id="">
                        <option value="" disabled selected>Select a stylist..</option>
                        @foreach ($staff as $stylist )

                            <option value="{{$stylist->name}}">{{$stylist->name}}</option>
                        @endforeach
                    </select>
			        </div>
	              </div>
	              <div class="col-sm-6">
	                <div class="form-group">
	                  <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
	                </div>
	              </div>
	              <div class="col-md-12">
	              	<div class="form-group">
		                <textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
		              </div>
	              </div>
		          </div>
		          <div class="form-group">
	              <input type="submit" value="Make an Appointment" class="btn btn-primary">
	            </div>
				<div class="form-group">
	              <a class="btn btn-primary">Reschedule</a>
	            </div>
				<div class="form-group">
	              <a class="btn btn-primary">Cancel</a>
	            </div>
	          </form>



    			</div>
    		</div>
    	</div>
    </section>


@endsection
