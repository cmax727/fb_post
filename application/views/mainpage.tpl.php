<?php
$data = $_SESSION['data'];
$firstTime = $_SESSION['firstTime'];
$baseUrl = base_url();

$job_id= isset($data["app_data"]) ? $data["app_data"] : false;
$page_id=$data["page"]["id"];
$page_data = json_decode(file_get_contents("https://graph.facebook.com/$page_id"));
$page_link=$page_data->link;


$share_image = $baseUrl . "images/img.png";
$shareUrl_main = $page_link ."?sk=app_379258938775123";
//$shareUrl_job = $page_link ."?sk=app_379258938775123&app_data="; // put job id
//echo "Page ID=" .$page_id . "<br/>page link =". $shareUrl_main . "<br/>job id =". $job_id;

if (isset($data["app_data"]) && $firstTime == 1)
	{
	// show post.php with ID = $job_id
	// break
      redirect(base_url() . 'main/readmore/' . $job_id);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
    <link rel="stylesheet" href="<?=base_url()?>css/style.css" type="text/css" media="screen" title="default" />
		
<!--		<script type="text/javascript">
        var shareUrl_job="<?php echo $shareUrl_job; ?>";
		var page_id="<?php echo $page_id; ?>";
		var share_image="<?php echo $share_image; ?>";
		
		
		</script>-->
		<script type="text/javascript">
			function framesetsize(w,h)
			{
			var obj =   new Object;
			obj.width=w;
			obj.height=h;
			FB.Canvas.setSize(obj);
			}
		</script>
		<link rel="stylesheet" href="<?=base_url()?>css/style.css" type="text/css" />
		<script src="<?=base_url()?>js/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>js/fb-functions.js" type="text/javascript" ></script>
	</head>
    <body onload="framesetsize(810,2000);document.getElementById('hdn').focus();"> <!--specify the height and width for resize-->
		<div id="fb-root"></div> <!--this div is required by the Javascript SDK-->
		<div id="container" class="home">
                    <input type="text" style="height: 1px;width:1px;position: relative;top: -200px;" id="hdn" />
                    <a href="<?=base_url()?>main/postjobform" id="post-job"><img alt="" src="<?=base_url()?>images/post_a_job.png" /></a>
                    <div class="clear"></div>
      <?php foreach ($jobs as $value): ?>
       <?php  $this->load->view('job.tpl.php', array('job' => $value, 'page_link' => $page_link, 'page_id' => $page_id, 'share_image' => $share_image));?>
     <?php endforeach; ?>         
    <div id="pagi">
      <?=$peganation?>
		</div>
		<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
	</body>
</html>
