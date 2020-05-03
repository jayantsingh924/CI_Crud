<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter Learning</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/bootstrap.min.css">
</head>

<body>

  <div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Codeigniter CRUD</a>
 

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Feature</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>


   </div>  


        <a class="nav-link" href="<?php echo base_url();?>Dashboard" style="color: white;"><h3>Comming Soon</h3></a>
      
</nav>

   
	<div class="container" style="padding-top: 130px; width: 50%;">
		
	   <form method = "POST" action = "<?php echo base_url(); ?>home/login_save">
          <legend><?php echo $title; ?> </legend>
          
          <div class="form-group">
		      <label for="exampleInputEmail1">Email address</label>
		      <input type="email" class="form-control"  name= 'email' placeholder="Enter your email">
		      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
		      <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>
            
		   <div class="form-group">
		      <label>Password</label>
		      <input type="password" class="form-control" name= 'pass' placeholder="Enter your password">
		      <span class="text-danger"><?php echo form_error('pass'); ?></span>
		   </div>

		  

		    <div class="form-group">
               <button class="btn btn-primary"  value = 'submit'>submit</button>
               <input type="reset" class="btn btn-default"  value = 'reset'>
        </div>
  <?php 
           if($this->session->flashdata('error') != '') 
             {
       
  ?>
        <div class="alert alert-dismissible alert-danger">
            <strong>Oh snap!</strong> 
                   <a href="#" class="alert-link"><?php echo $this->session->flashdata('error'); ?>.</a>
        </div>

  <?php 
            } 
  ?> 
    </form>
</div>

   <div style="padding-top: 152px;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">RESOFTECH PVT. LTD.</a>
     
</nav>
  </body>
</html>
