<?php
session_start();
//error_reporting(E_ALL);
ini_set("display_errors", 0);

function existance_var($var=""){
  return ((isset($var) && !empty($var)) || $var==="0" || is_numeric($var) || $var===0 || (is_string($var) && strlen($var)>0) || is_array($var));
}
function existance_str($var=""){
  return (existance_var($var) && is_string($var) && strlen($var)>0 && !is_array($var));
}
$_COOKIE["PHPSESSID"]=(isset($_COOKIE["PHPSESSID"]) && !empty($_COOKIE["PHPSESSID"])) ? $_COOKIE["PHPSESSID"] : '';
$_COOKIE["PHPSESSID"]=existance_str($_COOKIE["PHPSESSID"]) ? $_COOKIE["PHPSESSID"] : '';
if($_COOKIE["PHPSESSID"]==""){
 session_id();
 echo "Refresh the page to begin. If you have already nothing please activate your cookies.";
}else{
  $dirname=$_COOKIE["PHPSESSID"];if(!file_exists($dirname."/initGame")){header("location: play.php");}
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
  <style type="text/css">
    .follower{
  position : absolute;
  width:10px;
  height:10px;
      -webkit-border-radius: 10000px;
      -moz-border-radius: 10000px;
      border-radius: 10000px;
      border: 1px red solid;
}
#follower_0{
      border: 2px green solid;
}
    body{
    	padding:0px;margin:0px;
    }
  </style>
  <title>Criminals X Hunter</title>
<script type='text/javascript'>//<![CDATA[

$(window).load(function(){

function Kill(idS,idD,xS,yS,xD,yD){
	result=0;
    serialized="idS="+idS+"&idD="+idD+"&xS="+xS+"&yS="+yS+"&xD="+xD+"&yD="+yD;
    $(function() {
    	$.ajax({
		url: 'kill.php',
		data: serialized,
		async: false,  
    	success:function(data) {
      		result=parseFloat(data);
    	}
        });
    });
    if(result>0)return result;
    else return 0;
}

function sortFunction(a, b) {
    if (a[0] === b[0]) {
        return 0;
    }
    else {
        return (a[0] < b[0]) ? -1 : 1;
    }
}

function InitKillers(){
	result=[];
    $(function() {
    	$.ajax({
		url: '<?php echo $_COOKIE["PHPSESSID"];?>/killers.json',
		async: false,
		dataType: 'json',
		success: function (killers) {
        	var arr=Object.keys(killers);
        	arr.forEach(function(key){
        		killers[key][1]=parseFloat(killers[key][1]);
        		killers[key][2]=parseFloat(killers[key][2]);
        		killers[key][5]=1;
        		result.push(killers[key]);
    		});
        	for(i=0;i<arr.length;i++){
				$( "body" ).prepend( '<img id="follower_'+result[i][0]+'" src="'+result[i][4]+'" class="follower" style="top:'+(result[i][2]-(result[i][3]/2))+'px;left:'+(result[i][1]-(result[i][3]/2))+'px;width:'+result[i][3]+'px;height:'+result[i][3]+'px">' );
			}
		}
		});
    });
    result2=[];
    $(function() {
    	$.ajax({
		url: '<?php echo $_COOKIE["PHPSESSID"];?>/killed.json',
		async: false,
		dataType: 'json',
		success: function (killers) {
        	var arr=Object.keys(killers);
        	arr.forEach(function(key){
        		killers[key][5]=0;
        		result2.push(killers[key]);
    		});
        	for(i=0;i<arr.length;i++){
				$( "body" ).prepend( '<img id="follower_'+result2[i][0]+'" src="'+result2[i][4]+'" class="follower" style="top:'+(result2[i][2]-(result2[i][3]/2))+'px;left:'+(result2[i][1]-(result2[i][3]/2))+'px;width:'+result2[i][3]+'px;height:'+result2[i][3]+'px;display:none;">' );
			}
		}
		});
    });
    start=result.length;
    for(i=0;i<result2.length;i++){
    	result[start+i]=result2[i];
    }
    result=result.sort(sortFunction);
    return result;
}

function ReviveKillers(){
    result=[];
    $(function() {
    	$.ajax({
		url: 'revive.php',
		async: false,
		dataType: 'json',
		success: function (killers) {
        	var arr=Object.keys(killers);
        	arr.forEach(function(key){
        		killers[key][1]=parseFloat(killers[key][1]);
        		killers[key][2]=parseFloat(killers[key][2]);
        		result.push(killers[key]);
    		});
        	for(i=0;i<arr.length;i++){
        		$("#follower_"+result[i][0]).css({top:(result[i][2]-(result[i][3]/2)),left:(result[i][1]-(result[i][3]/2)),width:result[i][3],height:result[i][3]});
            if(result[i][0]==0)$("#revive").hide();
			}
		}
        });
    });
    return result;
}

function getFlag(){
    result=[];
    $(function() {
      $.ajax({
    url: 'flag.php',
    async: false,
    success: function (flag) {
      $("#flag").text(flag);
    }
        });
    });
    return result;
}

var mouseX = 0, mouseY = 0;
var id=0, xp = 0, yp = 0,alive=1;
var pointsId=[],pointsX=[],pointsY=[];

var followerID=[];
var followerX=[];
var followerY=[];
var followerSize=[];
var followerSrc=[];
var followerState=[];

killers=InitKillers();
for(i=0;i<killers.length;i++){
	followerID.push(killers[i][0]);
	followerX.push(killers[i][1]);
	followerY.push(killers[i][2]);
	followerSize.push(killers[i][3]);
	followerSrc.push(killers[i][4]);
	followerState.push(killers[i][5]);
}

var loop1 = setInterval(function(){
	var res2=ReviveKillers();
	for(i=0;i<res2.length;i++){
		pos=followerID.indexOf(res2[i][0]);
		if(pos!=-1){
			followerID[pos]=res2[i][0];
			followerX[pos]=res2[i][1];
			followerY[pos]=res2[i][2];
			followerSize[pos]=res2[i][3];
			followerSrc[pos]=res2[i][4];
			followerState[pos]=1;
		}

		$("#follower_"+res2[i][0]).show();
	}
}, 1000 );
$(document).mousemove(function(e){
   mouseX = e.pageX;
   mouseY = e.pageY;
});

 var loop = setInterval(function(){
  var follower = $("#follower_"+id);
  for(i=0;i<followerID.length;i++){
		$( "#follower_"+followerID[i] ).css('zIndex',followerSize[i]);
  }
  if(followerState[0]==1){//console.log("oui");
	tmpRx=(mouseX - xp) ;
	tmpRy=(mouseY - yp) ;
	tmpRt=Math.sqrt(Math.pow(tmpRx,2)+Math.pow(tmpRy,2));
	tmpx=(mouseX - xp) / 50;
	tmpy=(mouseY - yp) / 50;
	tmpt=Math.sqrt(Math.pow(tmpx,2)+Math.pow(tmpy,2));
	if(tmpRt>(followerSize[id]/2)){
		addedX=(tmpx/tmpt)*100/(followerSize[id]);
		addedY=(tmpy/tmpt)*100/(followerSize[id]);
		xp+=addedX;
		yp+=addedY;
	}else{
		xp += tmpx;
		yp += tmpy;
	}
	followerX[id]=xp;followerY[id]=yp;
  }
    if(followerState[0]==1)follower.css({left:(xp-(followerSize[id]/2)), top:(yp-(followerSize[id]/2)),width: followerSize[id], height: followerSize[id]});

    for(i=0;i<followerID.length;i++){
     if(followerState[i]!=0){
      for(j=0;j<followerID.length;j++){
       if(i!=j && followerState[j]!=0){
		if(Math.sqrt(Math.pow(Math.abs(followerX[i]-followerX[j]),2)+Math.pow(Math.abs(followerY[i]-followerY[j]),2))<followerSize[i]/2 && followerSize[i]>followerSize[j]){

			$("#follower_"+followerID[j]).hide();
      if(j==0)$("#revive").show();
  		followerState[j]=0;
  		followerSize[i]=KillAction(followerID[i],followerID[j],followerX[i],followerY[i],followerX[j],followerY[j]);
      getFlag();
		}
	   }
	  }
	 }
	}
	var limiteMapXMin=0,limiteMapYMin=0,limiteMapXMax=6366,limiteMapYMax=10000;
	for(i=0;i<followerID.length;i++){
	 if(followerState[i]!=0 && followerID[i]!=0){
	  var distMinFollow=10000000000;
	  var distMinSkip=10000000000;
	  var nSkip=0,nFollow=0;
	  var followed=i;
	  var skiped=i;
      for(j=0;j<followerID.length;j++){
       if(i!=j && followerState[j]!=0){
		tmp=Math.sqrt(Math.pow(Math.abs(followerX[i]-followerX[j]),2)+Math.pow(Math.abs(followerY[i]-followerY[j]),2));
		if(tmp<distMinFollow && followerSize[i]>followerSize[j]){distMinFollow=tmp;followed=j;nFollow++;}
		if(tmp<distMinSkip && followerSize[i]<followerSize[j]){distMinSkip=tmp;skiped=j;nSkip++;}
	   }
	  }	
	  var angleFollow = Math.atan2(followerY[followed] - followerY[i], followerX[followed] - followerX[i]);
	  var angleSkip = Math.atan2(followerY[i]-followerY[skiped], followerX[i]-followerX[skiped]);
	  if(distMinSkip<followerSize[skiped] || nFollow==0){
	 	  followerX[i]+=(Math.cos(angleSkip)*150/(followerSize[i]));
	 	  followerY[i]+=(Math.sin(angleSkip)*150/(followerSize[i]));
	  }else{
	 	  followerX[i]+=(Math.cos(angleFollow)*150/(followerSize[i]));
	 	  followerY[i]+=(Math.sin(angleFollow)*150/(followerSize[i]));
	  }
	  $("#follower_"+followerID[i]).css({left:(followerX[i]-(followerSize[i]/2)), top:(followerY[i]-(followerSize[i]/2)),width: followerSize[i], height: followerSize[i]});
	 }
	}
 }, 50);

});//]]> 

</script>


</head>
<body>
<div style="position:fixed;bottom:0px;">
<a href="play.php">Play again</a>
Flag: <span id="flag">Too early to give you the flag</span>
</div>
</body>

</html>
<?php }?>
