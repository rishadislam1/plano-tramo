<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Add New</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<?php
					$username = $_GET['username'];
					echo '  
			<form method="POST" action="add.php?username='.$username.'">';

					?>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Name:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_name" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Size:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_size" required>
						</div>
					</div>


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Description:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="property_description" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Price:</label>
						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="property_price" required>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Status:</label>
						</div>
						<div class="col-sm-10">
							<select name="property_status" class="form-control">
								<option value="sell">Sell</option>
								<option value="rent">Rent</option>
							</select>

						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Property Type:</label>
						</div>
						<div class="col-sm-10">

							<select name="property_type" class="form-control">
								<option value="residential">Residential</option>
								<option value="commercial">Commercial</option>
								<option value="land">Land/Plot</option>
							</select>

						</div>
					</div>


					
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Sub Property:</label>
						</div>
						<div class="col-sm-10">
							<select name="sub_proper" class="form-control">
								<option value="appartment">Appartment/Flat</option>
								<option value="independent_house">Independent House</option>
								<option value="duplex_home">Duplex Home</option>
								<option value="land_sharing_flat">Land Sharing Flat</option>
								<option value="office_space">Office Space</option>
								<option value="industrial_space">Industrial Space</option>
								<option value="residential_plot">Residential Plot</option>
								<option value="commercial_plot">Commercial Plot</option>
								<option value="agriculture_plot">Agriculture Plot</option>
							</select>

						</div>
					</div>

					
					
					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">City:</label>
						</div>
						<div class="col-sm-10">
							<select name="city" class="form-control">
								<option value="dhaka">Dhaka</option>
								<option value="khulna">Khulna</option>
								<option value="chittagong">Chittagong</option>
								<option value="rajshahi">Rajshahi</option>
								<option value="sylhet">Sylhet</option>
								<option value="rangpur">Rangpur</option>
								<option value="barishal">Barishal</option>
								<option value="gazipur">Gazipur</option>
								<option value="narayanganj">Narayanganj</option>
								<option value="comilla">Comilla</option>
								<option value="bogra">Bogra</option>
								<option value="kuakata">Kuakata</option>
								<option value="tangail">Tangail</option>
							</select>

						</div>
					</div>


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Address:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="address" required>
						</div>
					</div>


					<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Constraction Status:</label>
						</div>
						<div class="col-sm-10">
							<select name="con" class="form-control">
								<option value="ready">Ready</option>
								<option value="under construction">Under Construction</option>
								<option value="almost ready">Almost Ready</option>
								
							</select>

						</div>
					</div>






				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
					
			</div>
			</form>

		</div>
	</div>
</div>