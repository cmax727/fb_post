<?php
if(!empty($_REQUEST['request_ids'])) {


	 $APPLICATION_ID = "379258938775123";
	 $APPLICATION_SECRET = "caec98153c78964f2d5cd33920091d7d";
     $app_token = get_app_access($APPLICATION_ID,$APPLICATION_SECRET);
 
 // We may have more than one request, so it's better to loop
    $requests = explode(',',$_REQUEST['request_ids']);
    foreach($requests as $request_id) {
        $request_content = json_decode(file_get_contents("https://graph.facebook.com/$request_id?$app_token"), TRUE);
         //echo "Redirect to fan page id=" . $request_content["data"] ."<br/>";
		 //$from_id = $request_content['from']['id'];
		if($request_content["data"] > 1) {
			$id=$request_content["data"];
			$Url="http://www.facebook.com/profile.php?id=".$id."&sk=app_379258938775123";
			//echo $Url; 
			echo "<script type='text/javascript'>top.location.href = '$Url';</script>";
		 }
    }
	
	exit;
}
 
function get_app_access($appId, $appSecret) {
    $token_url =    "https://graph.facebook.com/oauth/access_token?" .
                    "client_id=" . $appId .
                    "&client_secret=" . $appSecret .
                    "&grant_type=client_credentials";
    $token = file_get_contents($token_url);
    return $token;                 
}

?>