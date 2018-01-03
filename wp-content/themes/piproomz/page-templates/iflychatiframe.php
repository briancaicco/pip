<?php

// Template Name: iFlyChat Ajax iframe

$room_id = $_GET["room_id"];
echo '<div class="iflychat-embed" data-room-id="'. $room_id .'" data-height="100%" data-width="100%"></div>';

?>
<script type="text/javascript">
/* <![CDATA[ */
var iflychat_app_id = "66618c7f-735c-44bb-bfd4-a47a81d5a7fd";
var iflychat_external_cdn_host = "cdn.iflychat.com";
var iflychat_auth_url = "http:\/\/localhost:8888\/piproomz-web\/wp-admin\/admin-ajax.php";
/* ]]> */
</script>
<script type="text/javascript" src="http://localhost:8888/piproomz-web/wp-content/plugins/iflychat/js/iflychat.js"></script>
<script src="//cdn.iflychat.com/js/iflychat-v2.min.js?app_id=66618c7f-735c-44bb-bfd4-a47a81d5a7fd" async=""></script>


