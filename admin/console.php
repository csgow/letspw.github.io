	
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


<?php include('head.php'); ?>


<div class="content">
<!-- <middle> -->

	
<?php include('left.php'); ?>



<div class="rightbar" id="rightbar">
<div class="game-number">Консоль</div>

<!--Подключаем Jquery!-->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>

<script type="text/javascript">
	//Загружаем библиотеку JQuery
	google.load("jquery", "1.3.2");
	google.load("jqueryui", "1.7.2");
		
	//Функция загрузки сообщений
	function load_messes()
	{
		$.ajax({
                type: "POST",
                url:  "log.php",
                data: "req=ok",
                // Выводим то что вернул PHP
                success: function(test)
				{
					//Очищаем форму ввода
					$("#messages").empty();
					//Выводим что вернул нам php
					$("#messages").append(test);
					//Прокручиваем блок вниз(если сообщений много)
					$("#messages").scrollTop(90000);
                }
        });
	}
</script>
<pre>
<div id="messages">
</div>
</pre>
<script>
//При загрузке страницы подгружаем сообщения
load_messes();
//Ставим цикл на каждые три секунды
setInterval(load_messes,5000);
</script>


<div class="copyright">Ru-Skript.ru</div>
</div>
<!-- </middle> -->
<div class="clear"></div>
</div>
</body>
</html>
	
	
	
	
	
	<?php
		}
	?>