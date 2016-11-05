
   <?php

session_start();
include('../steamauth/userInfo.php');
if($steamprofile['steamid'] == '76561198206942704'){
	$_SESSION['adm_login'] = 1;
}
?>
<?php

		if(!isset($_SESSION['adm_login'])){
			
			header("Location: /");
			
			
			?>
			
			
			
	<?php
		}else{

?>
<header>
<div class="container">
	<div class="top">
		<div class="width">

			<a href="/" class="logotype left"></a>
		<ul class="menu">
					<li><a href="/admin/">ГЛАВНАЯ</a></li>
					<li><a href="/admin/users.php">ПОЛЬЗОВАТЕЛИ</a></li>
					<li><a href="/admin/sett.php">НАСТРОЙКИ</a></li>
					<li><a href="/admin/console.php">КОНСОЛЬ</a></li>
				</ul>
		</div>
		</div>
		
			</div>	<?php
		}
	?>