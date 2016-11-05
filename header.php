<?php
	if(isset($_SESSION["steamid"])) {

include_once('steamauth/userInfo.php');}
?>

<audio id="bet1-sound" src="/sounds/Stavka-1.mp3" preload="auto"></audio>
<audio id="bet2-sound" src="/sounds/Stavka-2.mp3" preload="auto"></audio>
<audio id="bet3-sound" src="/sounds/Stavka-3.mp3" preload="auto"></audio>
<audio id="start-game-sound" src="/sounds/start-game.mp3" preload="auto"></audio>
<audio id="rulette-sound" src="/sounds/rulette.wav" preload="auto"></audio>
<audio id="rulette-end" src="/sounds/5.mp3" preload="auto"></audio>
<audio id="click-sound-1" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-2" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-3" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-4" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-5" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-6" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-7" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-8" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-9" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-10" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="rulet" src="/sounds/rulet.mp3" preload="auto"></audio>

<header>

	<div class="top">
		<div class="width">
<div class="content-left">
			<a href="/" class="logotype left"></a>
				<nav>
			<ul>
			<li><a href="/md5">ЧЕСТНО</a></li>
			<li><a href="/top">ТОП ИГРОКОВ</a></li>
			<li><a href="/history">ИСТОРИЯ ИГР</a></li>
			<li><a href="https://vk.com/letspw">ПОДДЕРЖКА</a></li>
			
			<ul/>
			</nav>
			</div>
				
			<?php if(!isset($_SESSION['steamid'])) {

        ?>
	<div class="content-right"><a class="enter" href="logger?login">Войти на сайт</a></div>
			
					 <?php } else { 

						include ('steamauth/userInfo.php');
						?>

		<div class="menu-user">
              <img src="<?php echo $steamprofile['avatarfull'];  ?>" width="65px" height="65px" alt=""></img>
                <div class="nick-name">
                   
                    <span class="namepf"><?php echo $steamprofile['personaname'];  ?></span>
                </div>

				
			
				
				<div class="panelcp">
				<span><a href="/myprofile">Мой профиль</a> | <a href="http://steamcommunity.com/id/id/tradeoffers/privacy#trade_offer_access_url">Взять ссылку</a> | <a href="/steamauth/logout.php">Выйти</a></span>
				</div>
				
				<div class="settings-url">
			<div class="right">
				<input type="text" rel="get-trade-link" placeholder="ВВЕДИТЕ ССЫЛКУ НА ОБМЕН!">
				<input type="submit" id="save-link" value="">
				</div>
		</div>
            </div>

			
			
						<div hidden id="steamtoken"><?php				
						function generateRandomString($length = 10) {
							$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
							$charactersLength = strlen($characters);
							$randomString = '';
							for ($i = 0; $i < $length; $i++) {
								$randomString .= $characters[rand(0, $charactersLength - 1)];
							}
							return $randomString;
						}
						$rstr = generateRandomString(32);
						$m = new MongoClient("mongodb://localhost:27017");
						$db = $m->admin;
						$collection = $db->auth;
						$document = array( "userid" => $_SESSION['steamid'] );
						$collection->remove($document);
						$document = array( "userid" => $_SESSION['steamid'], "token" => $rstr );
						$collection->insert($document);
						echo $rstr;
						?></div>

					
						

						<div hidden id="steamid"><?php echo $steamprofile['steamid'];?></div>
						
						

						

						<?php 

					}?>
			

		</div>
	</div>

	<div class="clear"></div>

</header>