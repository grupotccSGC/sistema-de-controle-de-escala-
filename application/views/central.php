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
 
	
	table{
    
    border: 1px solid #D0D0D0;
  }
        
        .footer{
              margin-top: 421px;
              padding-top: 20px;
              padding-bottom: 65px;
              color: #99979c;
              text-align: center;
              background-color: #2a2730;
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


<br>
<div class="container">
 <div class="row">
        <div class=" col-md-12"> 
        <h1 class="lead text-center" >
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span> Central de Notificação
        </h1>
      </div>
</div>



<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-hover table-striped">
  <?php foreach($da as $a){;?>

  <thead>
    <tr class="success">
    
      <th>Data</th>
      <th>Horario</th>
      <th>Status</th>
      <th>Observação</th>
      <th>Funcionario</th>
      <th>Operacão</th>
      
      
      </tr>
  </thead>

  <tbody>
    
    <tr>
      <td><?php echo $a->data?></td>
      <td><?php echo $a->horario; ?></td>
      <td><?php echo $a->status;?></td>
      <td><?php echo $a->obs; ?></td>
      <td><?php echo $a->funcionario;?></td>
      <td><?php echo $a->descricao;?></td>
      
      <?php }; ?>
    </tr>
  </tbody>
</table>

</div>
</div>
</div>
</div>




</div>





<div class="footer">
        
      </div>   





<script type="text/javascript">              
$(document).ready(function() {
    $('.data').mask("99/99/9999");
   });
    </script>
         
</body>
</html>