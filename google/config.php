<?php
/*
------------------------------------------------------
  www.idiotminds.com
--------------------------------------------------------
*/
session_start();

$base_url= filter_var('Your domain path', FILTER_SANITIZE_URL);

// Visit https://code.google.com/apis/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
define('CLIENT_ID','Your Google Api Client Id');
define('CLIENT_SECRET','Your Google Api Client Secret');
define('REDIRECT_URI','Your google Api Redirect path');
define('APPROVAL_PROMPT','auto');
define('ACCESS_TYPE','offline');
?>