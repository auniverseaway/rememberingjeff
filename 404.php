<?php 
$homeUrl = esc_url(home_url('/'));
header( 'Location: ' .  $homeUrl);  ?>