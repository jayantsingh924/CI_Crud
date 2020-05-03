



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

   
	<div class="container" style="padding-top: 130px;">
		 <?php
    
        $msg = $this->uri->segment(2);
		    if($msg == 'success')
		        {
		  ?>
		       <div class="alert alert-dismissible alert-success">
	             <strong>Well done!</strong> You successfully <a href="#" class="alert-link"> inserted.</a>.
		       </div>
    <?php
             }
   
      ?>
	
       <form method = "POST" action = "<?php echo base_url(); ?>home/update">
        


    <?php 
      if(isset($user_data)){
      foreach($user_data->result_array() as $u)
      {
    
    ?>

		  
		   <div class="form-group">
		      <label>Full Name</label>
		      <input type="text" class="form-control" name= 'name' value="<?php echo $u['name']; ?>">
		      <span class="text-danger"><?php echo form_error('name'); ?></span>
		   </div>

       <div class="form-group">
       
          <input type="hidden" class="form-control" name= 'id' value="<?php echo $u['id']; ?>">
        
       </div>

		    <div class="form-group">
		      <label for="exampleInputEmail1">Email address</label>
		      <input type="email" class="form-control"  name= 'email' value="<?php echo $u['email']; ?>">
		      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
		      <span class="text-danger"><?php echo form_error('email'); ?></span>
		    </div>

		    <div class="form-group">
		       <button class="btn btn-primary"  value = 'submit'>update</button>
		    </div>
   <?php
 
   } }
    
   ?>
		    
    </form>
</div>

   <div style="padding-top: 196px;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">RESOFTECH PVT. LTD.</a>
     
</nav>
  </body>
</html>
