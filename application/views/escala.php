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
    
<script src=" <?php echo base_url();?>bootstrap-3.3.7-dist/pluguin/jquery.timepicker.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo base_url();?>bootstrap-3.3.7-dist/pluguin/jquery.timepicker.css">

<script src=" <?php echo base_url();?>bootstrap-3.3.7-dist/pluguin/bootstrap-datepicker.js" type="text/javascript"></script>

<script src=" <?php echo base_url();?>bootstrap-3.3.7-dist/pluguin/bootstrap-datepicker.pt-BR.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo base_url();?>bootstrap-3.3.7-dist/pluguin/datepicker.css">




  <style type="text/css">


	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
	  color: #4F5155;
		padding-top: 70px; 
	}
       
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
	  font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#ta{ width: 220px;}
        
        .footer{
              margin-top: 163px;
              padding-top: 20px;
              padding-bottom: 63px;
              color: #99979c;
              text-align: center;
              background-color: #2a2730;
           }
        
        .escode{
          display: none;
        }
       
</style>
</head>
<body>


<nav class="navbar navbar-fixed-top navbar-inverse ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('Welcome/central');?>">SERVICE CONTROLLER</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">

    <li><a href="<?php echo base_url('Welcome'); ?>">Empresa</a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastro <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('Welcome/funcionario'); ?>">Funcionario</a></li>
            <li><a href="<?php echo base_url('Welcome/operacoes'); ?>">Operações</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('Welcome/escala'); ?>">Escala_trabalho</a></li>
            <li role="separator" class="divider"></li>
            </ul>
        </li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('Welcome/consulta_fun'); ?>">Funcionario</a></li>
            <li><a href="<?php echo base_url('Welcome/consulta_op'); ?>">Operações</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url('Welcome/consulta_es'); ?>">Escala_trabalho</a></li>
            <li role="separator" class="divider"></li>
            </ul>
        </li>

      </ul>


  <ul class="nav navbar-nav navbar-right">
  <li><a href="<?php echo base_url('Login/Sair/');?>"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a></li> 

    </ul>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="container-fluid">
    <div class="row">
        <div class=" col-md-12"> 
        <h1 class="lead text-center" ><span class="glyphicon glyphicon-th" aria-hidden="true">
        </span> Cadastro da Escala de Trabalho </h1></div>
    </div>

    <div class="row">
<div class="col-md-4">
<div class="alert" role="alert"><p class="lead">campo obrigatório <font color="red"><b>*</b></font></p>  
</div>
<?php echo validation_errors(); ?>
</div>


<div class="col-md-6">
    <p> <?php 
      if($this->session->flashdata('mensagem')){
       echo "<h3 class='alert alert-success'>".$this->session->flashdata('mensagem')."</h3>";
      }
        ;?></p>
  
</div>
</div>
<div class="row">

      <?php if(!empty($da)){
          echo form_open('Welcome/atualizar_es');
        }else{
          echo form_open('Welcome/cadastro_es');
        } ?>
 
        <input type="hidden" name="id" value="<?php if(!empty($da)){echo $da->id;} ?>">




        <div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1">Data  <font color="red"><b>*</b></font></label>
    <input type="text" name="data" class="form-control datepicker" required  value="<?php if(!empty($da)){echo $da->data;}?> <?php echo set_value('data'); ?>">
  </div>
</div>
     

    
     
        <div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1">Horario <font color="red"><b>*</b></font></label>
    <input type="text" name="horario" class="form-control hora"  id= "cpf"value="<?php if(!empty($da)){echo $da->horario;}?> <?php echo set_value('horario'); ?>" required>
  </div>
</div>   



<div class="col-md-3">
   <div class="form-group">
     <label for="exampleInputEmail1">Operação</label>
   <select class="form-control" name="ope" required id="s">
   <option value="">Selecione</option>
   <?php foreach ($de as  $di) {;?>
    <option value="<?php echo $di->id;?>">
    <?php echo $di->descricao;?>
    </option>
<?php };?>
</select>
  </div>
</div>


<div class="col-md-10">
   <div class="form-group">
     <label for="exampleInputEmail1">Obs <font color="red"><b>*</b></font></label>
    <input type="text" name="obs" class="form-control"  id= "cpf"value="<?php if(!empty($da)){echo $da->obs;}?> <?php echo set_value('obs'); ?>" required>
  </div>
</div>  




        
<div class="col-md-5 col-lg-offset-5">
   <div class="form-group">
    <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Salvar</button>
  </div>
</div>    
        
</form>
    
  </div>

    
   </div> 
    
    
<div class="footer">
        
      </div>   
    
         
<script type="text/javascript">              
$(document).ready(function() {
    verifica_edit();
    });

$('.hora').timepicker({
  'timeFormat': 'H:i',
  'minTime': '8:00 am',
  'maxTime': '11:30pm',
  'step':'5',
  //'disableTimeRanges':[['1:pm','2:pm']]
   });

$('.datepicker').datepicker({
format: 'dd/mm/yyyy',                
language: 'pt-BR',
orientation: "bottom left",
 });



function verifica_edit(){
 var per="<?php  if(!empty($da->perfil)){echo $da->perfil;}?>";
 var cpf="<?php if(!empty($da->cpf)) {echo $da->cpf;}?>" ;
 if(per!=""){
$('#se').val(per);
$('#cpf').val(cpf);

}

}

</script>
    
</body>
</html>