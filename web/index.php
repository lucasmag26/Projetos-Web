<!DOCTYPE html>
<html>
<head>
	<title>Plano Santa Casa Saúde</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
</head>
<body class="fundo">
<div class="plano_fundo"></div>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div style="background-color: rgb(255, 255, 255) !important" class="card">
			<div class="card-body">
				<form id='login_form'>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-alt"></i></span>
						</div>
						<input type="text"  class="form-control form-control-lg" id='login' name='login' placeholder="CNPJ ou Cod. da Empresa" required>	
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control form-control-lg" id='password' name='password' placeholder="Senha" required>
					</div>

					<div class="input-group form-group">
						<input type="submit" value="Entrar" class="btn form-control form-control-lg login_btn">
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>

<!--JAVASCRIPT-->
<script>


    //CHAMA FUNCAO CRIA USUARIO
    $(document).on('submit', '#login_form', function(){ //alert("Ok");
            
            //COLOTA INFORMACOES DO FORM
            var login_form=$(this).serializeArray()

            const login = login_form[0].value
            const senha = login_form[1].value
            //CHAMA A FUNCAO LOGIN

			$.ajax({
				method: "POST",
				crossDomain: true,
				url: "verifica_login.php",
				data: {login: login,senha: senha},
				success : function(result,xhr){
					
					var resultado = JSON.parse(result);
                    console.log(resultado.message)

                if(resultado.message == 1){
                    //location.replace("www.google.com");
                    window.location.replace("http://google.com");

                }else if(resultado.message == 2){
                    alert("Não foi possível fazer o login, senha errada!");
                }else{
                    alert("Não foi possível fazer o login, senha ou Usuário incorretos!");
                }
					
					
                                
                },

                error: function(xhr, resp, text){

                    //ERRO
					//alert(resp.cpf);
					alert("Não foi possível fazer o login!");
                    //location.replace("index.php");

                }
            });

        return false;
        
    });

</script>
<div class="container-fluid">            
		<div style="margin-top: 0.8%; text-align: center;"><p6 style="color: #999999; font-size: 14px;">©<?php echo date("Y")?> – IEP Núcleo de Soluções Tecnológicas - V1.0</p6></div>								
</div>
</html>
<footer>
</footer>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--POPPER-->    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!--SCRIPTS UNIVERSAIS JWT-->
