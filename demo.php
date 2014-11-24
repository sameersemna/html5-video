<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
	<?php 
	$vid_src = './vid/demo.mp4';
	$img_src = './img/demo.jpg';
	$width = '640';
	$height = '360';
	$autoplay = 'false';
	?>
    <video controls="controls" poster="<?php echo $img_src ?>" width="<?php echo $width ?>" height="<?php echo $height ?>">
        <source src="<?php echo $vid_src ?>" type="video/mp4" />
        <object type="application/x-shockwave-flash"
                data="swf/flowplayer-3.2.18.swf" width="<?php echo $width ?>" height="<?php echo $height ?>">
            <param name="movie" value="swf/flowplayer-3.2.18.swf" />
            <param name="allowFullScreen" value="true" />
            <param name="wmode" value="transparent" />
            <?php /* note the encoded path to the image and video files, relative to the .swf */ ?>
            <param name="flashVars"
                   value="config={'playlist':['<?php echo urlencode($img_src) ?>',{'url':'<?php echo urlencode($vid_src) ?>','autoPlay':<?php echo $autoplay ?>}]}" />
            <img src="img/demo.jpg" width="<?php echo $width ?>" height="<?php echo $height ?>" title="No Flash found" />
        </object>
    </video>
</body>
</html>
