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

</div>

   <div class="container" style="padding-top: 250px;">

    <!-- !st row   -->
   	   <div class="row">
   	   	   <div class="col">
              <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
              <div class="card-header">login page </div>
              <div class="card-body">
                   <h4 class="card-title"><a href="<?php echo base_url(); ?>home/login"  
                       style="color: white;"> Login </a></h4>
              </div>
            </div>
   	   	   </div>
   	   	   <div class="col">

             <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
              <div class="card-header">List Page</div>
              <div class="card-body">
                   <h4 class="card-title"><a href="<?php echo base_url(); ?>home/fetch_data"  
                       style="color: white;"> list </a></h4>
              </div>
            </div>


   	   	   	 
   	   	   </div>
   	   	   <div class="col">
              <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
              <div class="card-header">Form Page</div>
              <div class="card-body">
                   <h4 class="card-title"><a href="<?php echo base_url(); ?>form"  
                       style="color: white;"> form </a></h4>
              </div>
              </div>
           </div>  
       
       </div>

 </div>


 <div style="padding-top: 211px;">
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="#">CYBESTURE PVT. LTD.</a>
     </nav>
 </div>

  
</body>
</html>