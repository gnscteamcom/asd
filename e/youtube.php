<?php 
$uuu = substr("$u",8);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR">
<head>
<meta charset="UTF-8"/>
<meta name="robots" content="noindex" />
<META NAME="GOOGLEBOT" CONTENT="NOINDEX" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="https://content.jwplatform.com/libraries/uJpqcdAZ.js"></script>
<script type="text/javascript">jwplayer.key = "ABCdeFG123456SeVenABCdeFG123456SeVen==";</script>

<style type="text/css">
*{margin:0;padding:0}#picasa{position:absolute;width:100%!important;height:100%!important}
</style>
</head>
<body>
<div>
<center>
<div id="picasa" class="picasa"></div>
<script type="text/javascript">
	var playerInstance = jwplayer("picasa");
		playerInstance.setup({
		id:'picasa',
		controls: true,
		displaytitle: true,
		//flashplayer: "http://p.jwpcdn.com/player/v/7.3.6/jwplayer.flash.swf",
		width: "100%",
		height: "100%",
		aspectratio: "16:9",
		fullscreen: "true",
		//primary: 'html5',
		provider: 'http',
		autostart: false,
		abouttext: "Google Video Player",
        aboutlink: "http://wpplayer.org/",
		sources: [<?php
echo '{file:"'.$uuu.'"}';
?>],
        tracks: [{ 
		    file: 'http://wpplayer.org/e/getsub.php?linksub=<?php echo $suben; ?>', 
		    label: 'English', 
		    kind: 'captions',
		    "default":true
		  }],
         captions: {
        color: '#FFFFFF',
        fontSize: 20,
        backgroundOpacity: 20
    },
	
});	


		</script>
</center>
</div>
</body>
</html>
