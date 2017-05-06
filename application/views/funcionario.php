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
		background-color: #fff;
		color: #4F5155;
		padding-top: 70px; 
	}
       
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		//font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#ta{ width: 220px;}
        
        .footer{
              margin-top: 15px;
              padding-top: 20px;
              padding-bottom: 66px;
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
        <div class=" col-md-12"> <h1 class="lead text-center" ><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Cadastro de Funcionario </h1></div>
        
 </div>

<div class="row">
<div class="col-md-4">
<div class="alert" role="alert"><p class="lead">campo obrigatório <font color="red"><b>*</b></font></p>  </div>

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

<?php if(!empty($da)){
          echo form_open('Welcome/atualizar_fu');
        }else{
          echo form_open('Welcome/cadastra_fu');
        } ?>
 
          <input type="hidden" name="id" value="<?php if(!empty($da)){echo $da->id;} ?>">

 <div class="col-md-8">
   <div class="form-group">
     <label for="exampleInputEmail1">Nome do Funcionario  <font color="red"><b>*</b></font></label>
    <input type="text" name="nome" class="form-control" required value="<?php if(!empty($da)){echo $da->nome;}?> <?php echo set_value('nome'); ?>">
  </div>
</div>
        
     
  <div class="col-md-3">
   <div class="form-group">
     <label for="exampleInputEmail1">CPF <font color="red"><b>*</b></font></label>
<input type="text" name="cpf" class="form-control"  id= "cpf"value="<?php if(!empty($da)){echo $da->cpf;}?> <?php echo set_value('cpf'); ?>"  required>
  </div>
</div>   
        
        
<div class="col-md-3">
   <div class="form-group">
     <label for="exampleInputEmail1">Identidade <font color="red"><b>*</b></font></label>
    <input type="text" name="identidade"  
    value="<?php if(!empty($da)){echo $da->identidade;}?> <?php echo set_value('identidade'); ?>" class="form-control" required id="ide">
  </div>
</div>
    
        
<div class="col-md-3">
   <div class="form-group">
     <label for="exampleInputEmail1">TELEFONE  <font color="red"><b>*</b></font></label>
  <input type="text" name="tele" class="form-control tele"  required value="<?php if(!empty($da)){echo $da->telefone;}?> <?php echo set_value('tele');?>">
  </div>
</div>
 

<div class="col-md-2">
   <div class="form-group">
     <label for="exampleInputEmail1">Sexo</label>
   <select class="form-control" name="sexo" required id="s">
   <option value="">Selecione</option>
  <option value="Masculino" <?php echo  set_select('sexo', 'Masculino');?>>Masculino</option>
  <option value="Feminino" <?php echo  set_select('sexo', 'Feminino'); ?>>Feminino</option>
</select>
  </div>
</div>


<div class="col-md-2">
   <div class="form-group">
     <label for="exampleInputEmail1">Cargo</label>
   <select class="form-control" name="cargo" required id="cargo">
   <option value="">Selecione</option>
  <option value="Gerente" <?php echo  set_select('cargo', 'Gerente'); ?>>Gerente</option>
  <option value="Supervisor" <?php echo  set_select('cargo', 'Supervisor'); ?>>Supervisor</option>
  <option value="Auxiliar administrativo" <?php echo  set_select('cargo', 'Auxiliar administrativo'); ?> >Auxiliar administrativo </option>
</select>
  </div>
</div>


        
 <div class="col-md-2">
   <div class="form-group">
     <label for="exampleInputEmail1">CEP  <font color="red"><b>*</b></font></label>
    <input type="text" name="cep" class="form-control cep"  required value="<?php if(!empty($da)){echo $da->cep;}?> <?php echo set_value('cep'); ?>">
  </div>
</div>
 
        
 <div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1">ESTADO  <font color="red"><b>*</b></font></label>
    <input type="text" name="estado" class="form-control" required data-cep="uf" value="<?php if(!empty($da)){echo $da->estado;}?> <?php echo set_value('estado'); ?>">
  </div>
</div>


<div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1">CIDADE <font color="red"><b>*</b></font></label>
    <input type="text" name="cidade" class="form-control" required data-cep="cidade"  value="<?php if(!empty($da)){echo $da->cidade;}?> <?php echo set_value('cidade'); ?>">
  </div>
</div>



<div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1"> BAIRRO  <font color="red"><b>*</b></font></label>
<input type="text" name="bairro" class="form-control" required data-cep="bairro" value="<?php if(!empty($da)){echo $da->bairro;}?> <?php echo set_value('bairro'); ?>">
  </div>
</div>



<div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1">ENDEREÇO  <font color="red"><b>*</b></font></label>
    <input type="text" name="end" class="form-control" required data-cep="logradouro" value="<?php if(!empty($da)){echo $da->endereco;}?> <?php echo set_value('end'); ?>">
  </div>
</div>


<div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1">Email  <font color="red"><b>*</b></font></label>
      <input type="email" name="email" class="form-control" required value="<?php if(!empty($da)){echo $da->email;}?> <?php echo set_value('email'); ?>">
  </div>
</div>



<div class="col-md-4">
   <div class="form-group">
     <label for="exampleInputEmail1">SENHA  <font color="red"><b>*</b></font></label>
    <input type="password" name="senha" class="form-control" required>
  </div>
</div>



   
<div class="col-md-5 col-lg-offset-5">
   <div class="form-group">
    <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Salvar</button>
  </div>
</div>    
        
        
        
    </form>
    
    
	
</div>

    
   
    
<div class="footer">
        
      </div>   
    
         
<script type="text/javascript">              
$(document).ready(function() {
    $('.tele').mask("99999-9999");
    $('#cpf').mask("999.999.999-99");
    $('#ide').mask('99.999.999-9');
    verifica_edit();
    $('.cep').cep();
    });



function verifica_edit(){
 var sexo="<?php  if(!empty($da->sexo)){echo $da->sexo;}?>";
 var cargo="<?php if(!empty($da->cargo)) {echo $da->cargo;}?>" ;
 if(sexo!=""){
$('#s').val(sexo);
$('#cargo').val(cargo);

}

}

</script>
    
</body>
</html>