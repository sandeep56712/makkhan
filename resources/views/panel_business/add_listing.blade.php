@extends('layouts.business_header')
@section('body')
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Add Listing</h3>
					<div class="row">
						<div class="col-md-12">
					     	<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									
									<p class="panel-subtitle">Business Details</p>
								</div>
								<form id="business-form" method="post">
                               {{ csrf_field() }}
									<div class="panel-body">
										<div class="row">
											{{-- <div class="col-md-5">
												<label>Business Type</label>
												<select class="form-control" name="business_type" value="{{$b->business_type}}"
												>
												<option>a</option>
												</select>
											</div> --}}
											<div class="col-md-7">
												<label>Business Name</label>
												<input type="text" class="form-control" name="business_name" value="{{$b->business_name}}">
											</div>
					    				</div>
					    			<hr>
					    			<div class="row">
										<div class="col-md-4">
											<label>Tags</label>
											<select class="form-control" name="tag" >
											<option>{{ $b->tag}}</option>
											<option>a</option>
											<option>b</option>
											</select>
										</div>
										<div class="col-md-8">
											<label>Keywords</label>
											<input type="text" class="form-control" name="keyword" value="{{ $b->keyword}}">
										</div>
					    			</div>
					    			<hr>
					    			<div class="row">
					    				<div class="col-md-12">
					    					<label>Business Description</label>
					    					<textarea class="form-control" name="description" style="height: 180px;resize: none;">{{ $b->description}}</textarea>
					    				</div>
					    			</div>
					    			<hr>
					   				 <p class="demo-button text-center" >
										<button type="button" class="btn btn-success" onclick="business_insert()"><i class="fa fa-check-circle"></i> Save As Draft</button>

										<button type="button" class="btn btn-primary" onclick="business_insert()"><i class="fa fa-angle-double-right"></i> Save And Next</button>
									</p>                          
						 			</div>
                            	</form>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
					</div>
					<!-- Address Start -->
                    <div class="row">
                    	<form id="business-address" method="post">
                    		{{csrf_field()}}
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<p class="panel-subtitle">Address</p>
								</div>
					<div class="panel-body">
								<!-- Address -->
						<div class="row">
					    	<div class="col-md-4">
					    		<label>Street Address <i class="fa fa-map-marker"></i></label>
					    		<input type="text"  class="form-control" name="street_address" value="{{$address->street_address}}">    		
					    	</div>
					    	<div class="col-md-4">
					    		<label>Locality</label>
					    		<input type="text"  class="form-control" name="locality" value="{{$address->locality}}">    		
					    	</div>
                          	<div class="col-md-4">
					    		<label>City</label>
					    		<input type="text"  class="form-control" name="city" value="{{$address->city}}">    		
					    	</div>
					    </div>
					    <hr>	
						<div class="row">
					    	<div class="col-md-4">
					    		<label>State</label>
					    		<select class="form-control" name="state" id="listBox" aria-invalid="false" >{{-- <option value="SELECT STATE">SELECT STATE</option> --}}
					    			<option value="{{$address->state}}">{{$address->state}}</option>
					    			<option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Puducherry">Puducherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option></select>   		
					    	</div>
					    	<div class="col-md-4">
					    		<label>Pincode</label>
					    		<input type="text"  class="form-control" name="pincode" value="{{$address->pincode}}">    		
					    	</div>
					    	<div class="col-md-4">
					    		<label>Google Map Url</label>
					    		<input type="text"  class="form-control" name="map_url" value="{{$address->map_url}}">    		
					    	</div>					    	
					    </div>
					   <hr>
					    <div class="row">
                          <div class="col-md-4">
					    		<label>Latitude</label>
					    		<input type="text"  class="form-control" name="latitude" value="{{$address->latitude}}">    		
					    	</div>
					    	<div class="col-md-4">
					    		<label>Longitude</label>
					    		<input type="text"  class="form-control" name="longitude" value="{{$address->longitude}}">    		
					    	</div>
                        </div>
					    <hr>
					    <p class="demo-button text-center" >
										<button type="button" class="btn btn-success" onclick="business_address()"><i class="fa fa-check-circle"></i> Save As Draft</button>
										<button type="button" class="btn btn-primary" onclick="business_address()"><i class="fa fa-angle-double-right"></i> Save And Next</button>				
						</p>
					</div>
				</div>
			    <!-- END PANEL HEADLINE -->
			</div>	
			</form>				
	</div>
					<div class="row">
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									
									<p class="panel-subtitle">Services And Social Links</p>
								</div>
								<div class="panel-body">
							
									
					    <div class="row">
					    	<div class="col-md-12">					    	<label>Service Offered</label>

					    	
					    		<div class="checkbox">
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
</div>
                             
					    </div>
					    </div>
					    <hr>
					    <div class="row">
					    	<div class="col-md-12">
					    		<label>Facilities</label>
					    		    		<div class="checkbox">
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  <label><input type="checkbox" value="">Option 2</label>
  
</div>
					    	</div>
					    </div>
					    <hr>
					    <form id="business-room" method="post">
					    	{{csrf_field()}}
					    <div class="row">
					    	<div class="col-md-4">
					    		<label>Rooms</label>
					    		<select class="form-control" name="room">
					    			<option>{{$room->room}}</option>
					    			<option>Yes</option>
					    			<option>No</option>
					    		</select>    		
					    	</div>
					    	<div class="col-md-4">
					    		<label>Ac Rooms</label>
					    		<input type="number"  class="form-control" name="ac_room" value="{{$room->ac_room}}">    		
					    	</div>
                          	<div class="col-md-4">
					    		<label>Non Ac Rooms</label>
					    		<input type="number"  class="form-control" name="non_ac_room" value="{{$room->non_ac_room}}">    		
					    	</div>
					    </div>
					    <hr>
					      <div class="row">
					    	<div class="col-md-4">
					    		<label>Food Offer</label>
					    		<select class="form-control" name="food_offer" >
					    			<option>{{$food->food_offer}}</option>
					    			<option>Yes</option>
					    			<option>No</option>
					    		</select>    		
					    	</div>
					    	<div class="col-md-4">
					    		<label style="color: green;">Veg Price Per Plate</label>
					    		<input type="number"  class="form-control" name="veg" value="{{$food->veg}}">    		
					    	</div>
                            <div class="col-md-4">
					    		<label style="color: red;">Non-Veg Price Per Plate</label>
					    		<input type="number"  class="form-control" name="non_veg" value="{{$food->non_veg}}">    		
					        </div>
					    </div>
					    <hr>	    
			            <p class="demo-button text-center" >
										<button type="button" class="btn btn-success" onclick="business_room()"><i class="fa fa-check-circle" ></i> Save As Draft</button >
										<button type="button" class="btn btn-primary" onclick="business_room()"><i class="fa fa-angle-double-right"></i> Save And Next</button>
										
						</p>
					</div>
				</div>
			</form>
					<!-- END PANEL HEADLINE -->
			</div>					
		</div>
					<!-- Social Detail Start -->
                    <div class="row">
                    	<form id="business-social" method="post">
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<p class="panel-subtitle">Social Media</p>
								</div>
								<div class="panel-body">
							  		<div class="row">
					    				<div class="col-md-4">
					    					<label>Website <i class="fa fa-globe"></i></label>
					    		    		<input type="text" class="form-control" name="website" value="{{$social->website}}">
					    				</div>
					    				<div class="col-md-4">
					    					<label>Facebook <i class="fa fa-facebook"></i></label>
					    		    		<input type="text" class="form-control" name="facebook" value="{{$social->facebook}}">
					    				</div>
					    				<div class="col-md-4">
					    					<label>Instagram <i class="fa fa-instagram"></i></label>
					    		    		<input type="text" class="form-control" name="instagram" value="{{$social->instagram}}">
					    				</div>
					    			</div>
					    		<hr>
					    <div class="row">
					    	<div class="col-md-4">
					    		<label>Linked In <i class="fa fa-linkedin"></i></label>
					    		<input type="text" class="form-control" name="linkedin" value="{{$social->linkedin}}">
					    	</div>
					    	<div class="col-md-4">
					    		<label>Twitter <i class="fa fa-twitter"></i></label>
					    		 <input type="text" class="form-control" name="twitter" value="{{$social->twitter}}">
					    	</div>
					    	<div class="col-md-4">
					    		<label>Youtube <i class="fa fa-youtube"></i></label>
					    		<input type="text" class="form-control" name="youtube" value="{{$social->youtube}}">
					    	</div>
					    </div>
					    <hr>
					    	<p class="demo-button text-center" >
										<button type="button" class="btn btn-success" onclick="business_social()"><i class="fa fa-check-circle"></i> Save As Draft</button>
										<button type="button" class="btn btn-primary" onclick="business_social()"><i class="fa fa-angle-double-right"></i> Save And Next</button>
							</p>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
					</form>
					</div>
				<!-- Contact Detail Start -->
                    <div class="row">
                    	<form id="business-contact" method="post">
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<p class="panel-subtitle">Contact Details</p>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-4">
											<label>Person Name</label>
											<input type="text" class="form-control" name="name" value="{{$contact->name}}">
						
										</div>
										<div class="col-md-4">
											<label>Person Designation</label>
											<input type="text" class="form-control" name="designation" value="{{$contact->designation }}">
						
										</div>
										<div class="col-md-4">
											<label>Email <i class="fa fa-envelope-o"></i></label>
											<input type="email" class="form-control" name="email" value="{{$contact->email}}">
										</div>
					   			 	</div>
					    		<hr>
					    			<div class="row">
					    				<div class="col-md-4">
											<label>Contact No <i class="fa fa-phone"></i></label>
											<input type="text" class="form-control" name="contact_no" value="{{$contact->contact_no}}">
										</div>
										<div class="col-md-4">
											<label>Alternative Contact <i class="fa fa-phone"></i></label>
											<input type="text" class="form-control" name="alternate_no" value="{{$contact->alternate_no}}">
										</div>
					    			</div>
				
					    		<hr>
					    		<p class="demo-button text-center" >
										<button type="button" class="btn btn-success" onclick="business_contact()"><i class="fa fa-check-circle"></i> Save As Draft</button>
										<button type="button" class="btn btn-primary" onclick="business_contact()"><i class="fa fa-angle-double-right"></i> Save And Next</button>		
								</p>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>
					</form>
					</div>
               <!-- Contact end -->
	<!-- Gallery Start -->
                    <div class="row">
                    	<form id="business-image"  method="post"  enctype="multipart/form-data">
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">			
									<p class="panel-subtitle">Images And Video</p>
								</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<label>Poster</label>
												<input type="file" class="form-control" name="poster_path">
												
											</div>
											<div class="col-md-4">
												<label>Video Url</label>
												<input type="text" class="form-control" name="video_url" value="{{$image->video_url}}">
						
											</div>
											<div class="col-md-4">
												<label>Video Url</label>
												<input type="text" class="form-control" name="video_url2"  value="{{$image->video_url2}}">
											</div>

					
					   				 </div>
					   		 <hr>
					    <div class="row">
					    		<div class="col-md-12">
							    	 <ul class="nav nav-tabs">
									    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
									    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
									    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
									    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  									</ul>

 				 <div class="tab-content">
    				<div id="home" class="tab-pane fade in active">
       					<div class="row">
					    	<div class="col-md-4">
					    		   <input type="file" class="form-control" name="">
					    	</div>
					    	<div class="col-md-4">
					    		   <input type="file" class="form-control" name="">
					    	</div>
					    	<div class="col-md-4">
					    		
					    		    <input type="file" class="form-control" name="">
					    	</div>
					    </div>
					    <hr>
					        <div class="row">
					    	<div class="col-md-4">
					    		   <input type="file" class="form-control" name="">
					    	</div>
					    	<div class="col-md-4">
					            <input type="file" class="form-control" name="">
					    	</div>
					    	<div class="col-md-4">
					    		   <input type="file" class="form-control" name="">
					    	</div>
					    </div>
					    <hr>
      </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
	   </div>
	 </div>
	<hr>  
    <p class="demo-button text-center" >
			<button type="button" class="btn btn-success" onclick="business_image()"><i class="fa fa-check-circle"></i> Save As Draft</button>
			<button type="button" class="btn btn-primary" onclick="business_image()"><i class="fa fa-angle-double-right"></i> Save And Next</button>
										
	</p>
	  							 </div>
							 </div>
							<!-- END PANEL HEADLINE -->
						</div>
					</div>
				</div>
			</div>
		</form>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		@endsection

<script type="text/javascript">
{{-- business add start here --}}
function business_insert() {
			$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
		 $.ajax({
        type:"POST",
        url:"{{url('/listing')}}",
        data: new FormData($("#business-form")[0]),
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
        	alert(data);
            console.log(data);
            // showMsg(1,"Profile Updated",1500);
        },
        error: function(data){
          console.log(data)
          if(data.status == 403){
              // showMsg(1,"Unauthorised",1500);
              return;
            }
             // showMsg(1,"Cannot Updated Profile",1500);
          
        }
    });
	}
// business end here

// business address start here
function business_address() {
			$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
		 $.ajax({
        type:"POST",
        url:"{{url('/address')}}",
        data: new FormData($("#business-address")[0]),
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
        	alert(data);
            console.log(data);
            // showMsg(1,"Profile Updated",1500);
        },
        error: function(data){
          console.log(data)
          if(data.status == 403){
              // showMsg(1,"Unauthorised",1500);
              return;
            }
             // showMsg(1,"Cannot Updated Profile",1500);
          
        }
    });
	}
// business address end here
// business room start here
function business_room() {
	// alert();
			$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
		 $.ajax({
        type:"POST",
        url:"{{url('/room')}}",
        data: new FormData($("#business-room")[0]),
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
        	alert(data);
            console.log(data);
            // showMsg(1,"Profile Updated",1500);
        },
        error: function(data){
          console.log(data)
          if(data.status == 403){
              // showMsg(1,"Unauthorised",1500);
              return;
            }
             // showMsg(1,"Cannot Updated Profile",1500);
          
        }
    });
	}
// business room end here
// business social start here
function business_social() {
	// alert();
			$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
		 $.ajax({
        type:"POST",
        url:"{{url('/social')}}",
        data: new FormData($("#business-social")[0]),
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
        	alert(data);
            console.log(data);
            // showMsg(1,"Profile Updated",1500);
        },
        error: function(data){
          console.log(data)
          if(data.status == 403){
              // showMsg(1,"Unauthorised",1500);
              return;
            }
             // showMsg(1,"Cannot Updated Profile",1500);
          
        }
    });
	}
// business social end here
// business contatc start here
function business_contact() {
	// alert();
			$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
		 $.ajax({
        type:"POST",
        url:"{{url('/contact')}}",
        data: new FormData($("#business-contact")[0]),
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
        	alert(data);
            console.log(data);
            // showMsg(1,"Profile Updated",1500);
        },
        error: function(data){
          console.log(data)
          if(data.status == 403){
              // showMsg(1,"Unauthorised",1500);
              return;
            }
             // showMsg(1,"Cannot Updated Profile",1500);
          
        }
    });
	}
// business contact end here

// business image start here
function business_image() {
	// alert();
			$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
		 $.ajax({
        type:"POST",
        url:"{{url('/image')}}",
        data: new FormData($("#business-image")[0]),
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data){
        	alert(data);
            console.log(data);
            // showMsg(1,"Profile Updated",1500);
        },
        error: function(data){
          console.log(data)
          if(data.status == 403){
              // showMsg(1,"Unauthorised",1500);
              return;
            }
             // showMsg(1,"Cannot Updated Profile",1500);
          
        }
    });
	}
// business contact end here

</script>
