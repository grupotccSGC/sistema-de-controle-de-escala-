<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url();?>bootstrap-3.3.7-dist/css/bootstrap.css">


    <script src=" <?php echo base_url();?>bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script><script src="<?php echo base_url();?>bootstrap-3.3.7-dist/pluguin/jquery.maskedinput.min.js" type="text/javascript"></script>

<script src=" <?php echo base_url();?>bootstrap-3.3.7-dist/js/jquery.cep.min.js" type="text/javascript"></script>
    



  <style type="text/css">


	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #708090;
  }
       
	
	        
        .footer{
              margin-top: 90px;
              padding-top: 20px;
              padding-bottom: 48px;
              color: #99979c;
              text-align: center;
              background-color: #2a2730;
           }



.center{
   display: flex;
   justify-content: center;
   margin-top: 12%;
}
       .bo{
        border: 1px solid blue;
       }    
        
       }
</style>
</head>
<body>

<div class="container">
<?php 
      if($this->session->flashdata('mensagem')){
       echo "<h4 class='alert alert-success alert-warning alert-dismissible'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>x</span></button>"
.$this->session->flashdata('mensagem')."</h4>";
      }
        ;?></p>

  <div class="center">
<div class="col-md-4 well bo">
<p class="text center">SERVICE CONTROLLER</p>
    <div class="panel panel-primary">
  <div class="panel-heading"><p class="text-center">Login</p></div>
  <br>
  <div class="panel-body">
  
<?php  echo form_open('Login/verifica'); ?>
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">
      <span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
      <input type="email" class="form-control" placeholder="Email" required name="email">
       </div>
  </div>


  <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">
      <span class="glyphicon glyphicon-link" aria-hidden="true"></span></div>
      <input type="password" class="form-control" placeholder="senha" required name="senha">
       </div>
  </div>
<button type="submit" class="btn btn-primary"> Acessar</button>
</form>


</div>
    </div>
  </div>

</div>
</div>
 </body>
</html>