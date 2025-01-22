<!DOCTYPE html>
<html lang="en">
<head>
<?php require "estilo.php" ?>
<title>Adicionar Usuario</title>
<body>
<?php 

$id = $_GET['id'];

 ?>
<div id="reactContainer">
   <div  id="transitionContainer">
    <div class="active-screen screen-container slide-from-right-enter-done">
    <div data-block="Common.Layout" class="OSBlockWidget" id="$b1">
    <div   class="layout layout-side layout-native ios-bounce aside" id="b1-LayoutWrapper">
        <!-- drawer-->
    <?php require "drawer.php" ?>

				<h1 data-advancedhtml="" class="header-title">
					<div class="OSInline" id="b1-Title">
						<span style="font-weight: bold;">Nova Usuario</span>
					</div>
				</h1>
				<div class="header-right" id="b1-HeaderRight"></div>
			</div>
		</div>
	</div>
	<div class="header-top-content ph" id="b1-HeaderContent"></div>
</header>
<div data-container="" class="content" id="b1-ContentWrapper">
	<div data-container="" class="main-content ThemeGrid_Container" role="main" id="b1-MainContentWrapper">
		<div class="content-middle" id="b1-Content">



		<?php 

			if (isset($_POST['butao'])) {
				
				$nome = $_POST['nome'];
				$apelido = $_POST['apelido'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cell = $_POST['cell'];
				$painel = $_POST['painel'];

				$mysql = mysqli_query($conexao,"UPDATE acesso SET nome = '$nome', apelido = '$apelido', username = '$username', password = '$password', status = 'ativo', cell = '$cell', painel = '$painel' WHERE id_user = '$id'");
				echo "<script>alert('usuario Actualizado com sucesso');</script>";


			}


			 ?>

<?php 
            

            $selecUp = mysqli_query($conexao, "SELECT * from acesso where id_user = '$id'");

            while ($rows2 = mysqli_fetch_assoc($selecUp)) {
                // code...
          


             ?>
			<form  method="post"   class="form card OSFillParent" >
				
				<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Nome</span>
					</label>
					<span class="input-text">
						<input data-input="" value="<?php echo $rows2['nome']; ?>" class="form-control OSFillParent" type="text"  maxlength="250" name="nome"  wfd-id="id3"></span>
					</div>
					<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Apeido</span>
					</label>
					<span class="input-text">
						<input data-input="" value="<?php echo $rows2['apelido']; ?>" class="form-control OSFillParent" type="text"  maxlength="250" name="apelido"  wfd-id="id3"></span>
					</div>

					<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Username</span>
					</label>
					<span class="input-text">
						<input data-input="" value="<?php echo $rows2['username']; ?>" class="form-control OSFillParent" type="text"  maxlength="250" name="username"  wfd-id="id3"></span>
					</div>
					<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Password</span>
					</label>
					<span class="input-text">
						 <input data-input="" value="<?php echo $rows2['password']; ?>" class="form-control OSFillParent" type="password"  maxlength="250" name="password"  wfd-id="id3"></span>
					</div>
<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Numero de Telefone</span>
					</label>
					<span class="input-text">
						<input data-input="" value="<?php echo $rows2['cell']; ?>" class="form-control OSFillParent" type="text"   name="cell" maxlength="9"></span>
					</div>
					<div data-container="">
					<label data-label="" class="OSFillParent" for="Input_Name2">
						<span style="font-weight: bold;">Tipo de Usuario</span>
					</label>
					<span class="input-text">
						<select data-input="" class="form-control OSFillParent" name="painel">
						<option  value="<?php echo $rows2['painel']; ?>"><strong><?php echo $rows2['painel']; ?></strong></option>
						
                            
						<option disabled >ESCOLHA NOVO TIPO DE USUARIO</option>
							<option value="admin">Admin</option>
							<option value="staff">Staff</option>
							<option value="basic">Basic</option>
						</select>
					</span>
					</div>
						<div data-container="" style="margin-top: 20px;">
							<button data-button="" class="btn" type="button">Voltar</button>
						<button data-button="" name="butao" class="btn btn-primary ThemeGrid_MarginGutter" type="submit">Guardar</button>
						</div>
					</form>
                    <?php 

                    }

                     ?>
				</div>
			</div>
		</div>
		<footer data-advancedhtml="" role="contentinfo" class="content-bottom">
			<div class="footer ph" id="b1-Bottom">
				<div data-block="Common.BottomBar" class="OSBlockWidget" id="$b3">
					<div data-container="" class="bottom-bar-wrapper">
						<div data-container="" class="bottom-bar ph"></div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div data-container="" class="offline-data-sync">
		<div data-block="Common.OfflineDataSyncEvents" class="OSBlockWidget" id="b1-$b2">
			<div data-block="Private.OfflineDataSyncCore" class="OSBlockWidget" id="b1-b2-$b1">
				<div data-block="Private.NetworkStatusChanged" class="OSBlockWidget" id="b1-b2-b1-$b1">
					<div data-container=""></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

<script src="js/data.js"></script>  
<script src="js/menusub.js"></script>      
</body>
</html>