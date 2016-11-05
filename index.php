<?php include('head.php'); ?>
<?php include('header.php'); ?>

<div class="container">

<!--1-->

			
			
			

<div class="content-info">
            <div class="block-left">
                <div class="textes">
                    <h2>Дорогой друг!</h2>
                    <p>
                        Ты находишься на сайте Lets.PW - игровой рулетки CS:GO<br>
                        Ты не везучий? Всю жизнь твои друзья\знакомые<br>
                        выигрываю в лотерею баснословные деньги, а ты и делал<br>
                        что завидовал т.к тебе никогда не везло? Тогда это твой<br>
                        шанс сорвать большой куш!
                    </p>
                </div>
				
				<div class="block-avatar">
              <h4>ПОСЛЕДНЯЯ ПОБЕДА</h4>
			<span id="winner-avatar">load</span>
			<div class="namegood" id="winner-name"></div>
			<ul>
				<li>Выигрыш: <span id="winner-money"></span></li>
				<li>Шанс: <span id="winner-chance"></span></li>
			</ul>
			</div>
			
			
                <ul class="block-info">
                    <li>
                        <div class="inf" id="inf1">load</div>
                        <div class="titles">ON-LINE</div>
                    </li>
                    <li>
                        <div class="inf"><div id="inf14">Не было</div></div>
                        <div class="titles">ИГР СЕГОДНЯ</div>
                    </li>
                    <li>
                        <div class="inf"id="inf4">load</div>
                        <div class="titles">МАКС.ДЖЕКПОТ</div>
                    </li>
                </ul>
            </div>
            <div class="block-right">
                <ul>
				
                    <li>Добавь к нику <span class="text-color-gold">Lets.PW</span> и получи</li>
					<li>Всегда <span class="text-color-gold">+5 к шансу</span> выигрыша</li>
					<li>Всегда <span class="text-color-gold">-3 к комиссии</span></li>
					<li>Выделение ника <span class="text-color-gold">золотым</span> цветом</li>
					<li>И другие привелегии...</li>
					<li></li>
                    
                </ul>
            </div>
        </div>



<!-- новая панель -->
	<div class="rightbarer">
	<a href="http://vk.com/letspw"><img class="banner" src="//lets.pw/styles/images/banner.png"></img></a>
        <div class="panel">
            <div class="panel-left">
                <div class="numberr">
                    <h2>Игра #<span class="game-num">load</h2>
                </div>
                <a class="panel-sound">Звук: <a href="#" class="sound-link-on">вкл</a><a class="panel-sound-slash">/</a><a href="#" class="sound-link-off">выкл</a></a>
            </div>
            <div class="panel-right">
                <p>Банк: <span id="jackpot-temp">load</span></p>
				<?php if(isset($_SESSION['steamid'])) {

        ?><p>Ты внёс <span id="player-items-count">0</span> из 20 вещей.</p>                 <p>Твой шанс: <span id="chance-temp">0</span>%</p><?php 

					}?>
            </div>
        </div>
		
		<div class="block-downoland">
            <div class="downoland" id="rightbar">
			
			<div class="progressive">
				<div class="line" id="pb" style="width: 0%;"><span>&nbsp;</span></div>
			</div>
			
			</div>
            <div class="downoland-time">
                <span>или через</span>
				
                <div class="time"><div id="timer"><h2>00:00</h2></div></div>
			
            </div><?php if(isset($_SESSION['steamid'])) {

        ?>
					<a href="https://steamcommunity.com/tradeoffer/new/?partner=47409693&token=i_8Q5Xlj" target="_blank" class="downoland-btn button button-3d-primary button-rounded">Внести вещи</a>
            <?php 

					}?>
			        </div>
		
		
	
      
        
                <!-- весь контент-->
				
				
				<div class="added-short-inform">
<div class="game-end acceptoffer hiddenes">
 <div class="text"><div>Вы 1 в очереди.</div>Подождите, ваша ставка обрабатывается.</div>
</div>


<div class="game-end maxitem hiddenes">
<div class="text"><div>Ваше предложение обмена отклонено</div>Максимальное колличество поставленых вещей 20</div>
</div>
<div class="game-end notradelink hiddenes">
<div class="text"><div>Ваше предложение обмена отклонено</div>Введите ссылку на обмен в настройках</div>
</div>
<div class="game-end errortrade hiddenes">
<div class="text"><div>Ваше предложение обмена отклонено</div>Минимальная ставка 5 рублей!</div>
</div>	
<div class="game-point hiddenes">
<div class="text"><div>Игра окончена!</div>Число раунда: <span id="roundNum">???</span> / Победный билет: #<span id="winner-ticket">???</span> / Победный скин: <span id="winner-item">???</span></div>
</div>
<div class="game-end pauses hiddenes">
<div class="text"><div>Ставки не принимаются</div><span id="winner-item">В данный момент стим ушёл в пролаг. Ждём когда он очухается ;)</span></div>
</div>
</div>
				
				
				
								
				
				
				
				<div class="roulette hiddenes">
			<div class="inbox" style="-moz-transform: translate3d(390px, 0, 0);-ms-transform: translate3d(390px, 0, 0);-o-transform: translate3d(390px, 0, 0);-webkit-transform: translate3d(390px, 0, 0);transform: translate3d(390px, 0, 0); -moz-transition: 13s ease;-o-transition: 13s ease;-webkit-transition: 13s ease;transition: 13s ease; backface-visibility: hidden;">


			</div>
		</div>
		<div class="choice-winner gameend hiddenes">
			<div class="text">Победил игрок: <span id="winner-end">???</span> / Выигрыш: <span class="winner-cost-value">???</span></div>
			
		</div>
		
		
		
	
		
		
		
				
				
				
				<div class="swiper-container">
<div class="swiper-wrapper" style="cursor: -webkit-grab;">
<div ng-transclude="" class="swiper-slide users-add hidden" ></div>
</div>
</div>



<div class="panel-added bg-shorts hiddenes">
            <div class="panel-left">
                <div class="numberr">
                    <h2>Игроки</h2>
                </div>
             <span class="progress-game"> Прогресс игры <span id="items-count-temps">0</span>%</span>
            </div>
            <div class="panel-right">
			 <p>Хэш раунда: <span id="roundHash">load</span></p>
            </div>
        </div>
		<div class="added-short">
<div class="bg-shorts" id="game"></div>
</div>



<div class="game-end gamepause hiddenes">
<div class="text"><div>Данная игра заканчивается</div>Принимаются последние ставки из очереди в текущую игру</div>		
</div>
				<!-- весь контент-->
        
		
<?php include('left.php'); ?>
		
		
		
       <!-- <footer>
            <div class="footer-left">
                    ИГРА НАЧАЛАСЬ! Вносите депозиты
            </div>
            <div class="footer-right">
                <p>Хэш раунда: <a href="#"><span id="roundHash">load</span></a></p>
            </div>
        </footer> -->
		
		
	
		
		
		
		
		
						
		
		
		
		
		
		
		
		<!-- прогресс
		 <span id="items-count-temps">0</span>%
		 прогресс конец -->
		
		
		
<!-- новая панель -->
		
		


	

		
		
		



<script type="text/javascript">
				var swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					slidesPerView: 3,
					paginationClickable: true,
					spaceBetween: 0
				});
				</script>
<div class="copyright">Lets.pw | Designed by InsUpCray | All rights reserved | Support group vk.com/letspw</div>
<!-- </middle> -->
<div class="clear"></div></div>
	</div>



</body>
</html>