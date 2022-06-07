
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title" id="staticBackdropLabel">Book a Car</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="car-booking">
					<div class="container">
					<form class="shadow pt-4 pb-5 px-5">
						
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="name"><i class="fa-solid fa-user"></i>Name</label>
									<input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="mobile"><i class="fa-solid fa-mobile-screen-button"></i>Mobile No.</label>
									<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Your Mobile No.">
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="car"><i class="fa-solid fa-car"></i>Select Car Type</label>
									<select name="car" id="car" class="form-control">
										<option value="">---Select Your Car---</option>
										<option value="Toyota Innova">Toyota Innova</option>
										<option value="Tata Safari">Tata Safari</option>
										<option value="Maruti Swift Dzire">Maruti Swift Dzire</option>
										<option value="Honda Amaze">Honda Amaze</option>
										<option value="Honda Vista">Honda Vista</option>
										<option value="Mahindra Scorpio">Mahindra Scorpio</option>
										<option value="Tata Zest">Tata Zest</option>
										<option value="Force Traveller">Force Traveller</option>
									</select>
								</div>
								
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="package">Package Type</label>
									<select name="package" id="package" class="form-control">
										<option value="">---Select Your Package---</option>
										<option value="Rental">Rental</option>
										<option value="One Way">One Way</option>
									</select>
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pick-up"><i class="fa-solid fa-location-dot"></i>Pick-up</label>
									<input type="text" id="pick-up" name="pick-up" class="form-control" placeholder="Enter Your Location">
								</div>
							   
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pick-up"><i class="fa-solid fa-location-dot"></i>Drop-up</label>
									<input type="text" id="Drop-up" name="Drop-up" class="form-control" placeholder="Enter Your Destination ">
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="pick-up-date"><i class="fa-solid fa-calendar-days"></i>Pick-up-date</label>
									<input type="date" id="pick-up-date" name="pick-up-date" class="form-control" >
								</div>
								
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="form-group">
									<select name="pick-up-time" id="pick-up-time" class="form-control" style="margin-top:44px">
										<option value="12:00 AM">12:00 AM</option>
										<option value="12:30 AM">12:30 AM</option>
										<option value="01:00 AM">01:00 AM</option>
										<option value="01:30 AM">01:30 AM</option>
										<option value="02:00 AM">02:00 AM</option>
										<option value="02:30 AM">02:30 AM</option>
										<option value="03:00 AM">03:00 AM</option>
										<option value="03:30 AM">03:30 AM</option>
										<option value="04:00 AM">04:00 AM</option>
										<option value="04:30 AM">04:30 AM</option>
										<option value="05:00 AM">05:00 AM</option>
										<option value="05:30 AM">05:30 AM</option>
										<option value="06:00 AM">06:00 AM</option>
										<option value="06:30 AM">06:30 AM</option>
										<option value="07:00 AM">07:00 AM</option>
										<option value="07:30 AM">07:30 AM</option>
										<option value="08:00 AM">08:00 AM</option>
										<option value="08:30 AM">08:30 AM</option>
										<option value="09:00 AM">09:00 AM</option>
										<option value="09:30 AM">09:30 AM</option>
										<option value="10:00 AM">10:00 AM</option>
										<option value="10:30 AM">10:30 AM</option>
										<option value="11:00 AM">11:00 AM</option>
										<option value="11:30 AM">11:30 AM</option>
										<option value="12:00 PM">12:00 PM</option>
										<option value="12:30 PM">12:30 PM</option>
										<option value="01:00 PM">01:00 PM</option>
										<option value="01:30 PM">01:30 PM</option>
										<option value="02:00 PM">02:00 PM</option>
										<option value="02:30 PM">02:30 PM</option>
										<option value="03:00 PM">03:00 PM</option>
										<option value="03:30 PM">03:30 PM</option>
										<option value="04:00 PM">04:00 PM</option>
										<option value="04:30 PM">04:30 PM</option>
										<option value="05:00 PM">05:00 PM</option>
										<option value="05:30 PM">05:30 PM</option>
										<option value="06:00 PM">06:00 PM</option>
										<option value="06:30 PM">06:30 PM</option>
										<option value="07:00 PM">07:00 PM</option>
										<option value="07:30 PM">07:30 PM</option>
										<option value="08:00 PM">08:00 PM</option>
										<option value="08:30 PM">08:30 PM</option>
										<option value="09:00 PM">09:00 PM</option>
										<option value="09:30 PM">09:30 PM</option>
										<option value="10:00 PM">10:30 PM</option>
										<option value="10:30 PM">12:00 AM</option>
										<option value="11:00 PM">11:00 PM</option>
										<option value="11:30 PM">11:30 PM</option>
									</select>
								</div>
							</div>

							<div class="col-lg-4 col-md-6">
								<div class="form-group">
									<label for="drop-up-date"><i class="fa-solid fa-calendar-days"></i>Drop-up-date</label>
									<input type="date" id="drop-up-date" name="Drop-up-date" class="form-control" >
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="form-group">
									<select name="drop-up-time" id="drop-up-time" class="form-control" style="margin-top:44px">
										<option value="12:00 AM">12:00 AM</option>
										<option value="12:30 AM">12:30 AM</option>
										<option value="01:00 AM">01:00 AM</option>
										<option value="01:30 AM">01:30 AM</option>
										<option value="02:00 AM">02:00 AM</option>
										<option value="02:30 AM">02:30 AM</option>
										<option value="03:00 AM">03:00 AM</option>
										<option value="03:30 AM">03:30 AM</option>
										<option value="04:00 AM">04:00 AM</option>
										<option value="04:30 AM">04:30 AM</option>
										<option value="05:00 AM">05:00 AM</option>
										<option value="05:30 AM">05:30 AM</option>
										<option value="06:00 AM">06:00 AM</option>
										<option value="06:30 AM">06:30 AM</option>
										<option value="07:00 AM">07:00 AM</option>
										<option value="07:30 AM">07:30 AM</option>
										<option value="08:00 AM">08:00 AM</option>
										<option value="08:30 AM">08:30 AM</option>
										<option value="09:00 AM">09:00 AM</option>
										<option value="09:30 AM">09:30 AM</option>
										<option value="10:00 AM">10:00 AM</option>
										<option value="10:30 AM">10:30 AM</option>
										<option value="11:00 AM">11:00 AM</option>
										<option value="11:30 AM">11:30 AM</option>
										<option value="12:00 PM">12:00 PM</option>
										<option value="12:30 PM">12:30 PM</option>
										<option value="01:00 PM">01:00 PM</option>
										<option value="01:30 PM">01:30 PM</option>
										<option value="02:00 PM">02:00 PM</option>
										<option value="02:30 PM">02:30 PM</option>
										<option value="03:00 PM">03:00 PM</option>
										<option value="03:30 PM">03:30 PM</option>
										<option value="04:00 PM">04:00 PM</option>
										<option value="04:30 PM">04:30 PM</option>
										<option value="05:00 PM">05:00 PM</option>
										<option value="05:30 PM">05:30 PM</option>
										<option value="06:00 PM">06:00 PM</option>
										<option value="06:30 PM">06:30 PM</option>
										<option value="07:00 PM">07:00 PM</option>
										<option value="07:30 PM">07:30 PM</option>
										<option value="08:00 PM">08:00 PM</option>
										<option value="08:30 PM">08:30 PM</option>
										<option value="09:00 PM">09:00 PM</option>
										<option value="09:30 PM">09:30 PM</option>
										<option value="10:00 PM">10:30 PM</option>
										<option value="10:30 PM">12:00 AM</option>
										<option value="11:00 PM">11:00 PM</option>
										<option value="11:30 PM">11:30 PM</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<button type="button" class="btn myBtn white" data-bs-dismiss="modal" onclick="gotowhatsapp()">Submit</button>
							</div>
						</div><!--row-->
				  </form>
					</div>
				</div>
			</div>
		  
			<div class="modal-footer">
				<button type="button" class="btn myBtn white" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>