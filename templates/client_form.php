<form id="clientForm" class="form-horizontal" action="client.php" method="post">
<legend>Client Info</legend>
<div class="row">
	<div class="span6">
		<div class="control-group">
			<label class="control-label" for="ClientID">Client ID : </label>
			<div class="controls">
				<input id="ClientID" name="ClientID" type="text" value="<?php echo $client["ClientID"] ?>" readonly />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="FirstName">First Name: </label>
			<div class="controls">
				<input id="FirstName" name="FirstName" type="text" value="<?php echo $client["FirstName"] ?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="LastName">Last Name: </label>
			<div class="controls">
				<input id="LastName" name="LastName" type="text" value="<?php echo $client["LastName"] ?>" />
			</div>
		</div>
	</div>
	<div class="span6">
		<div class="control-group">
			<label class="control-label" for="Address">Address: </label>
			<div class="controls">
				<input id="Address" name="Address" type="text" value="<?php echo $client["Address"] ?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="City">City: </label>
			<div class="controls">
				<input id="City" name="City" type="text" value="<?php echo $client["City"] ?>" />
			</div>
		</div>
		<div class="row">
			<div class="span4">
		<div class="control-group">
			<label class="control-label" for="State">State: </label>
			<div class="controls">
				<select id="State" name="State" class="input-mini">
					<?php echo htmlOptionsStates($client["State"]) ?>
				</select>
			</div>
			</div>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="Zip">Zip: </label>
			<div class="controls">
				<input id="Zip" name="Zip" type="text" value="<?php echo $client["Zip"] ?>" />
			</div>
		</div>		
	</div>
</div>
<br/>
<div class="row">
	<div class="span6">
		<div class="control-group">
			<label class="control-label" for="Phone1Number">Primary Phone: </label>
			<div class="controls">
				<input id="Phone1Number" name="Phone1Number" type="tel" value="<?php echo $client["Phone1Number"] ?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="Phone2Number">Secondary Phone: </label>
			<div class="controls">
				<input id="Phone2Number" name="Phone2Number" type="tel" value="<?php echo $client["Phone2Number"] ?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="Email">Email: </label>
			<div class="controls">
				<input id="Email" name="Email" type="email" value="<?php echo $client["Email"] ?>" />
			</div>
		</div>
	</div>
	<div class="span6">
		<div class="control-group">
			<label class="control-label" for="Language">Language: </label>
			<div class="controls">
				<input id="Language" name="Language" type="text" value="<?php echo $client["Language"] ?>" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ClientNotes">Client Notes: </label>
			<div class="controls">
				<textarea id="ClientNotes" name="ClientNotes" rows="3"><?php echo $client["ClientNotes"] ?></textarea>
			</div>
		</div>
	</div>
</div>
</form>
<button id="updateClient" class="btn" onclick="updateClient()" >Update Client Info</button>
<script>
	function updateClient() {
		$("#clientForm").submit(); 
	}
</script>
<br />
<br />
<?php 
	require("contact_form.php"); 
	require("old_contact_form.php"); 
?>