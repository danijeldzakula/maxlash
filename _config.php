<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  $helperBase = '/home/vanja/Dev/osv/prelanders/lander-api';
  $baseUrl = 'http://track.leadsadmin.vjs/api';
} else {
  $helperBase = '/var/www/lander-api';
  $baseUrl = 'http://adsfxs.pro/api';
  $offer_code = 'f2532e7b-6cdf-4ecb-80cf-5b84330e4acf';
}
?>