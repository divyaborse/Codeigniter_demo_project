<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<br><br><br>
<form method="post" action="<?php echo base_url()?>IntellifyAdd_teacher/form_validation">
	<!--<?php
	/*if($this->url->segment(2)=="inserted"){
		echo '<p class="text-success">Data Inserted</p>';
	}*/
	?>-->
	<div class="form-group">
		<input type="text" name="Name" class="form-control" placeholder="Name">
<span class="text-danger"><?php echo form_error("Name");?></span>
	</div>

<div class="form-group">
		<input type="text" name="Number" class="form-control" placeholder="Number">
	<span class="text-danger"><?php echo form_error("Number");?></span>	
	</div>
<div class="form-group">
		<input type="text" name="Email" class="form-control" placeholder="Email">
	<span class="text-danger"><?php echo form_error("Email");?></span>	
	</div>
<div class="form-group">
		<input type="text" name="School_name" class="form-control" placeholder="School_name">
		<span class="text-danger"><?php echo form_error("School_name");?></span>
	</div>
<div class="form-group">
		<input type="text" name="Class" class="form-control" placeholder="Class">
		<span class="text-danger"><?php echo form_error("Class");?></span>
	</div>
	 <div class="form-group">
     
      <select id="Gender" class="form-control" name="Gender">
        <option selected>Male</option>
        <option>Female</option>
        <option>other</option>
          <span class="text-danger"><?php echo form_error("Gender");?></span>
      </select>
    
    </div>
<div class="form-group">
		<input type="submit" name="insert" class="btn btn-info">
		
	</div>
</form>
</div>

</body>
</html>
