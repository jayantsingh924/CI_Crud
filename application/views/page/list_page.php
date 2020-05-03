




<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter Learning</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assest/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" 
          integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
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
        if($msg == 'update_msg')
            {
      ?>
           <div class="alert alert-dismissible alert-success">
               <strong>Well done!</strong> You successfully <a href="#" class="alert-link"> updated.</a>.
           </div>
    <?php
             }
      elseif($msg == 'delete_msg')
         {
          ?>
          <div class="alert alert-dismissible alert-danger">
              <strong>Well done!</strong> You successfully <a href="#" class="alert-link"> Deleted.</a>.
          </div>
   <?php
         }
         elseif($msg == 'success')
         {
          ?>
          <div class="alert alert-dismissible alert-success">
              <strong>Well done!</strong> You successfully <a href="#" class="alert-link"> inserted.</a>.
          </div>
   <?php
         }   
   
      ?>
 
    <div style="padding-bottom: 10px;">
    	<a href="<?php echo base_url();?>home/insert_page" class="btn btn-primary"  value ='submit'>Add record</a>
      <a href="<?php echo base_url();?>home/fetch_data" class="btn btn-default"  value ='submit'>reload page</a>
	</div>	

<table class="table table-stripd table-hover">
  <thead>
    <tr class="table-primary">
      <th scope="col">sr. no.</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">created date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  
   <?php 
         $row = 0;  $sno = $row+1;

foreach ($users as $u)
{

?>
    <tr>
      <th scope="row"><?php echo $sno ?></th>
      <td> <?php echo $u['name'] ?></td>
      <td> <?php echo $u['email'] ?></td>
      <td> <?php echo $u['register_date'] ?></td>
      <td>
      	<a href="<?php echo base_url(); ?>home/update_data/<?php echo $u['id']; ?>">Edit</a>
      	/
      	<a href="#" class="delete_btn" id="<?php echo $u['id']; ?>" style="color:red;">Delete</a>
        </td>
    </tr>

  <?php
    $sno++;

}



 ?>
 
  </tbody>
</table> 

</div>

   <div style="padding-top: 152px;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">RESOFTECH PVT. LTD.</a>
     
</nav>

<script>
$(document).ready(function(){
   $(".delete_btn").click(function(){
     var id = $(this).attr("id");
     if(confirm("Are you sure you want to delete this?"))
       {
          window.location= "<?php echo base_url();?>home/delete_data/"+id;
       }
    else 
       {   
          console.log('he is weak');
            return false;
       }   
   });
});

</script> 
 </body>
</html>
