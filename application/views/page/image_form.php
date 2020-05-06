

	   <div class="container" style="padding-top: 230px;">
          <div class="row">

             <div class="col">
		         <form id='upload_form' enctype="multipart/form-data">
                       <legend><?php echo $title; ?></legend>

		              <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                               <input type="file" class="form-control-file" id="image_file" name = "image_file">
                                     <small class="form-text text-muted">Only JPG, JPEG, PNG Files are allowed.</small>
                  </div>

		              <div class="form-group">
		                  <button class="btn btn-primary" id="upload" value = 'submit'>submit</button>
		              </div>
                 </form>
             </div>

              <div class="col">
                 <div id="upload_image">

                 </div>

             </div>
          </div>

</div>

<div style="padding-top: 172px;">
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">RESOFTECH PVT. LTD.</a>
   </nav>
<div>

<script src="<?php echo base_url(); ?>assest/jquery.js"> </script>
<script>

$(document).ready(function(){
  $("#upload_form").on('submit', function(e){
   e.preventDefault();


   if($('#image_file').val() == '')
      {
        alert('please select a file.');
      }
  else
      {
      $.ajax({
               url:"<?php echo base_url(); ?>Home/ajax_upload",
						   method:"POST",
               data:new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(data){
                    $('#upload_image').html(data);
              }
            });
      }

  });
});

 </script>

  </body>
</html>
