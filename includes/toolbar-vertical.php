 	<div id="toolbar-container-vertical" class="toolbar">
 		<div class="button-div" id="toolbar-vertical">

			<button id="translate" class="toolbar-button-vertical flag-vertical"><img id="flag" src="images/english-flag.png">
				<?php tooltip('अनुवाद');?>
			</button>

			<button onclick="parent.location.href = 'index.php';" class="toolbar-button-vertical next-prev">
 				<img src="images/home.png"  height = "80%" >
 				<?php tooltip('Home');?>
 			</button>

			<button onclick="LOOMA.setStore('scroll', 0, 'session'); parent.location.href = 'looma-library.php?fp=../content/';" class="toolbar-button-vertical ">
				<!-- call looma-library.php with path to starting folder of the Library. -->
				<img src="images/library.png"  height= "80%" >
				<?php tooltip('Library');?>
			</button>

			<button onclick="parent.location.href = 'looma-dictionary.php';" class="toolbar-button-vertical ">
				<img src="images/dictionary.png"  height= "80%" >
				<?php tooltip('Dictionary');?>
			</button>

			<button onclick="parent.location.href = 'looma-paint.php?ModPagespeed=off';" class="toolbar-button-vertical ">
				<img src="images/paint.png" height = "80%"  >
				<?php tooltip('Paint');?>
			</button>

			<button onclick="parent.location.href = 'looma-map.php';" class="toolbar-button-vertical ">
				<img src="images/maps.png"  height = "80%" >
				<?php tooltip('Maps');?>
			</button>

			<button onclick="parent.location.href = 'looma-games.php';" class="toolbar-button-vertical ">
				<img src="images/games.png"  height = "80%" >
				<?php tooltip('Games');?>
			</button>

			<button onclick="parent.location.href = 'looma-calculator.php';" class="toolbar-button-vertical ">
				<img src="images/calc.png"  height = "80%" >
				<?php tooltip('Calculator');?>
			</button>

			<button onclick="parent.location.href = 'looma-web.php';" class="toolbar-button-vertical ">
				<img src="images/web.png"  height = "80%" >
				<?php tooltip('Web');?>
			</button>

			<button onclick="parent.location.href = 'looma-settings.php';" class="toolbar-button-vertical ">
				<img src="images/settings.png"  height = "80%" >
				<?php tooltip('Settings');?>
			</button>

			<button onclick="parent.location.href = 'looma-info.php';" class="toolbar-button-vertical ">
				<img src="images/info.png"  height = "80%" >
				<?php tooltip('Info');?>
			</button>

			<button  class="toolbar-button-vertical" onclick="parent.history.back();">
				<img src="images/back-arrow.png" height = "80%"  >
				<?php tooltip('Back');?>
			</button>

			<!--<button  class="toolbar-button-vertical next-prev" onclick="parent.history.forward()">
				<img src="images/forward-arrow.png" width = "60px" height = "80%" ></button> -->

		</div>
		<!-- <span class="logo"><img  src="images/logos/LoomaLogoTransparent.png"></span>		 -->
	</div>