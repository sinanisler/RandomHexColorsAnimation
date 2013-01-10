<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RandomHexColorsAnimation - Github.com/sinanisler</title>
<style type="text/css">
.kutu{ 
	width:576px; 
	height:346px;
	float:left;
	opacity:0.5;
	filter:alpha(opacity=60);
	margin-bottom:20px;
	padding:20px;
	border:solid 23px #212121;
	position:relative;
}
.ufak{
	width:23px;
	height:23px;
	float:left;
	}

.hepsi{ 
	width:900px;
	height:auto;
	float:left;
	padding-top:5px;
	padding-bottom:40px;
}
</style>
<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
</head><body>
<div class="hepsi">
    <script type="text/javascript">
    jQuery(document).ready(function() {
        // Coded by Sinan İŞLER
        var rand = new Array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
            var color= rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0]+
            rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0];
        setInterval(function(){
            var rand2 = new Array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
            var color2= rand2[Math.floor(Math.random() * 15) + 0]+rand2[Math.floor(Math.random() * 15) + 0]+rand2[Math.floor(Math.random() * 15) + 0]+
            rand2[Math.floor(Math.random() * 15) + 0]+rand2[Math.floor(Math.random() * 15) + 0]+rand2[Math.floor(Math.random() * 15) + 0];
            var rand3 =  Math.floor(Math.random() * 375) + 1;
            var htmlStr = '<div class="ufak" style="background:#'+color2+'"></div>';
            jQuery(".BeniSecBeniSec"+rand3).html(htmlStr);
        },16);			
    });
    </script>     
    <div class="kutu randomsec">
        <?php $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
              for ($i = 1; $i <= 375; $i++) {
                  $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].
                  $rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];  
		?><div class="ufak <?php echo "BeniSecBeniSec".$i; ?>" style="background:<?php echo $color; ?>"></div><?php  } ?>
    </div>
        

</div>
