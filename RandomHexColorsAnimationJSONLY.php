<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8  />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<title> </title>
<style type="text/css">
.hepsi{ 
	width:590px; 
	height:auto;
	margin-left:auto;
	margin-right:auto;
}
.kutu , .kutu2{ 
	width:590px; 
	height:365px;
	float:left;
	opacity:0.6;
	margin-bottom:20px;
}
.ufak{
	width:23px;
	height:23px;
	float:left;
	}
</style>
</head><body>
<div class="hepsi">
<script type="text/javascript">
jQuery(document).ready(function() {
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
    },15);			

	var rand = new Array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
		var a =1;
		for (var i=0; i<375; i++){
			var color= rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0]+
			rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0]+rand[Math.floor(Math.random() * 15) + 0];
			
			var htmlStr = '<div class="ufak BeniSecBeniSec'+a+'" style="background:#'+color+'"></div>';
			jQuery(".kutu2").append(htmlStr);
			a++;
		}
});
</script> 
    
    <div class="kutu kutu2">

    </div>



</div>
</body></html>