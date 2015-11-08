<?php

//when login
add_action('wp_login', 'set_admin_cookie');

//set a cookie on this machine
function set_admin_cookie()
{
    setcookie('ac_remove_yoast', 1, time() + 3600 * 24 * 1000, COOKIEPATH, COOKIE_DOMAIN, false);
}


