<?php require_once("cabecalho.php");
require_once("logica-usuario.php");
?>
				<h1>Seja bem-vindo! feito pelo github</h1>

				<?php if(usuarioEstaLogado()) { ?>
					<p class="text-success">Você está logado como <?= usuarioLogado() ?>.</p>
					<a href="logout.php">Deslogar</a></p>
				<?php } else { ?>
					<h2>Login</h2>
					<form action="login.php" method="post">
						<table class="table">
							<tr>
								<td>E-mail</td>
								<td><input class="form-control" type="email" name="email"/></td>						
							</tr>
							<tr>
								<td>Senha - password</td>
								<td><input class="form-control" type="password" name="senha"/></td>						
							</tr>
							<tr>
								<td><button class="btn btn-primary">Login</button><td/>
							</tr>				
						</table>
					</form>	
				<?php }?>	
<?php include("rodape.php") ?>