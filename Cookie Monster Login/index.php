<?php
/*
Plugin Name: Cookie Monster Login
Plugin URI: http://www.hostmatters.nl
Description: Wp-login.php access through a cookie
Version: 0.3 beta
Author: Niels
*/


if(	!defined('ABSPATH')) 
{
	die('You are not allowed to call this page directly.');
}

function cml_install ()
{
		
}


function cml_uninstall ()
{
	
}

register_activation_hook(__FILE__,'cml_install');
register_deactivation_hook( __FILE__, 'cml_uninstall' );


function cml_logo() { ?>
    <style type="text/css">
	        #login h1 a, .login h1 a {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAJz0lEQVR42tXQf2yV9RXH8U9p6W0LCDixheLaCgNTFAwDBlMREIUpi5sLguI2xTkH++EQMBP8kSyIIrQu2f4wm5og2QJSJxglKplEMJIFxFJArAiig2KhLSJIf0B79v7jxNw8Pr3Pc0tx3R+vk97vuefc86nelc6nBC7H7ViGF7EVH+II6nEMh/EB3sFaLMVMlCIbOj/Oz9IcXIc/YScsoBGHsBeVqEr6hzTDAt5DGSYiAXUm7eg8hViIKphrwlt4Erfje/g2eiOBLHRHDvqiGN/HHSjDFrTAXCUWoBDqBJSMc1aIx3AUhla8grtwKTKgDsrAYNyNV9EGQy2WoBA6F3ovo8MyMReHYajHCgxPMdMDJRiD6zENN2EyRqEYeSnmR6AcDTAcwhxkQh3Q4fAj8CYMTViOIijgAkzCo1iPvTiOM7CAFu/twTo8hInoBQWUoAzNMPwLw6F0qbJb2majAYbXMBIKGIenUI02WAe14QPfNRYK+C5eh6EBd0Hp0E5KTJl4AoYmzEcGlOQGvIwzsE7W4rsnQ0m6YQGaYXjC3xRD7PB5eB6GAxgf6F+OtbBvyAv+m0pyrd9mWIlcKIqqMiPloQKGbbg00J+HOtg3rA6/h5IMwnYY1iIXSkW7MlPKwioYNiMfcvlYDfsfWx24qwBvw/A8MqH2UFJ6EoZtgR8Zih2wLmIHhkAuH9thWAa1R7uz2vVzGA6iGHLDsB/Wxez32+SK8QnMsyiM9mSFGobjOI2rITcYB2Bd1DGMhNw1aMRxz6QgvU8JyMYmGOZD7mK8B+uiTqECk6AkC2CeKTvQo3T/ml/B8AYyIXTDC7Au6iDGQiEysRGGOcG+9lKSFOAznMYIyP0O1oXdCaUwwjN95hnlpA+yAbcEhjLIXYYGWBd1AkVQhHKYZ5STqimuP+rRgIGQWwPrwmqRD0UY6NnqUABB+jABYAEM5ZC7Dm2wLqwJw6AYymFYCEHaR0ECu9GEUgjdsRH2f2AGFEMpmjxrAtJHORImwrABcrmYjpmYkcKt+CGm4GFYkucwFTfiluBsjL3T8AP3Bqwdz0IxbYBhAr56LIdhNtQBozEPa2FJNuNRD5SA0jQO9+GP2AVrxyH0g6J4RvPM0v5cZaMKjSiB0nQ3WmER9qAUimk+LA3ToXZchF4QSjzrLmTrAEfhLN5GBuRvl0AxrIbFtB09oBg2wdLwV6gdizENQoZnbUWpPs7VTBhWQG4Z/HOkRbA03AvFsByWhh3oDgXk4CMsgdwKGGbqYJ4eh+F2yG1APS6EIoxCCyymKuRAEa7GWVhMn6MYCrgJhnWQmwXDUn2SpwoYxkLIxW4Y7oEiZGIzLA03QxG6YxssplZcBQWsgWEP8iCMg6FCn/bQVjSjCMJA1MHwDrKgCPfB0vASFMMiWBpuCcx/B1/AUI9LIBR55q36Tw9VowZ9IFyJZhhaMRGKUIR6WExf4jIowlCchMV0R2D+IZg7g1GQZ61BtQ711GFUIwHhWrTB3Eooin/P0vAIFMN6WEw/hVwCOwP965J61Tiswz1Vh53IgjAVlqQe34YiTEYbLKbdyIMi3AqLaUbEPTdCyPLMdarppTrsRBaEqbCA+6EI2dgOS8OPoQh98DEshimQeyakfxOELM9cpyMX6DCqkYAwAW2wJO8iG4pwHywN90AxlMMiNOJyCAWohQVMhpDwzIf1GX+gBn0gXIlmWJI2XA9FKMQxWAyfoh8Uw2icidh3EH0h/CLY9/lRkGetQbVqe2srmlEEYSDqYAHPQzE8C4thORRTN7wVsW8j5DaG9I8nZSzyzFt1tLcqYBgLIQdVsIAGFEMRJqAVlkIjroDwI1wERZgTsfNxCCPQFNLfgzzIsxoqdKyPlsIwC3L/hIV4AIqQhXdgKbwCoSf24WYowgAcTbFzKpLzBL0MuVkwLFVdH82EYTnkHoSFqEQCivBrWAo/gXAbDCuhGJ6DhfgEFyAHe2EhHobcchhmqr6vStGKLciAcI2/WYipUIT+qIWFeB+5EDbCcBQDoAjXow0W8DcIN8KCfGYi5Bm3eL5SNfRVNnahESUQ8rAXFuIfUAxPw0IshjAaLTA3B4qQwE5YwA0Q/g4LsQ89Ic/Y6JmzdZxHlMMwG3LLYSFO4FIowlU4GzJbAuHpQO8tdIMiLA7MVSEbhWiAhXgKcrNhnln6/EIJE2DYALmRaIGF+AMUIRNvB+ZWQRiAY4FeC8ZAEYbgFMwtgvAbmEu1dwPMM3/1mMAeNKEUcutgIaqQA0X4Jcy1YRKE+2EhVkAxrIfhJAZB2AIL8SrkStHkWROQTnwLwAMwlEFuAs7CQkyDIvRDDQz/RhYSqIKFOIDeUIQZMKyHMAZnYAGtmAy5MphnFaQvKK4/6tGAgZBbAwuxGorhLzDMhXAzLIVboQh9cQi3QSiHhXgRcgM9W71nFaSTFwFuCQxlkBuKBljACQyGIlyLGhRAWA9LYR0Uw8/QG71wABbwOUohVwbzjHLSKUqS/jiC0xgBud/CQiyGIvTEDAjD0QhL4SSGQDFNh4WYB7kRnumIZ5STvuz3NXNg2IhMCBlYAwvYjVwopqdgMTwIxfQSLOBFdIOQ6VnMsymZTlMCsrEJhvmQ64cdsIBpUBSfr4HFUIkEFGEwvgjM7kQ+5ObDPFN2YJ5ycahhOI7TuBpyg7EflmQtFMNcWExtmAxFWBiY+xhDIHe1ZzjumRSkRko77oThIIohNwz7Ye4khkApZGMbLA3PxNi5Heb24wrIFfvt5lkURk2UFJ6EYRvyITcEO2DuESiFKWiDpaEW/aF2TEjaWYmhkMv3m80zqD1qzk8pC6tg2IICyOVjNQwfIg9qxxpYB9wLteMZGNYG7irwWw2rPIPaQ4mUi7UwbMegQH8evsSdUIjLcArWAZuQAQWUYB8eCLwPwvakf0wulIpa8mPJxUoYDmB8oD8Gc5AFBSyFdVALRkIBV2B04G2832Z+ay4URWcKYsvEMhiasAAZkFPI5374FHYO/hzYG5ThtzTB/MZMKA5K2majAYbXMBJqx3TYOWjF60hAIUb6DYYGv03p0NmCDhmON2FoxgqUQAG9cA0WoQJVOOYzbTDXimbv7UKFz4z3HRlQkhKs8BnzW4ZD6VJr/w7LxFwcgqEB5RieYiYXhbgS4zHFjfe3QuRAYXx3ORpgOOQ3ZEIdQTlnhXgMtTC04hXMxiBkQB2U4Ttm+85WGGr9Nwuhc6G2/p2mEAtRCXPN2IzlmIVxKEJfJJDlEv5W5N+Z5TObfYe5SixEIdQJKAM6XQKTUI5KWEATalCNna4aNd6zgEqU+84E1JlklPMoG6W4DY+jAltRjRrUuRp/o8d3+K7PlPoOnS//BYbsVBXhxvhNAAAAAElFTkSuQmCC);
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'cml_logo' );

function cml_filter_http() 
{
  if(preg_match('/1\.0/',$_SERVER['SERVER_PROTOCOL'])) {
	   cml_forbidden(); 
	}
}
add_action('login_init','cml_filter_http');
    
function cml_set_login_protection_cookie() {
  if( strtoupper($_SERVER['REQUEST_METHOD'])=='GET' and !isset($_COOKIE['cookie_auth']) ) {
	  	setcookie('cookie_auth','QmFzZTY0IGlzIGEgZ2VuZXJpYyB0ZXJtIGZvciBhIG51bWJlciBvZiBzaW1pbGFyIGVuY29kaW5nIHNjaGVtZXMgdGhhdCBlbmNvZGUgYmluYXJ5IGRhdGEgYnkgdHJlYXRpbmcgaXQgbnVtZXJpY2FsbHkgYW5kIHRyYW5zbGF0aW5nIGl0IGludG8gYSBiYXNlIDY0IHJlcHJlc2VudGF0aW9uLiBUaGUgQmFzZTY0IHRlcm0gb3JpZ2luYXRlcyBmcm9tIGEgc3BlY2lmaWMgTUlNRSBjb250ZW50IHRyYW5zZmVyIGVuY29kaW5nLg==',time()+60*60*24);
    	
    	$_COOKIE['cookie_auth'] = 'QmFzZTY0IGlzIGEgZ2VuZXJpYyB0ZXJtIGZvciBhIG51bWJlciBvZiBzaW1pbGFyIGVuY29kaW5nIHNjaGVtZXMgdGhhdCBlbmNvZGUgYmluYXJ5IGRhdGEgYnkgdHJlYXRpbmcgaXQgbnVtZXJpY2FsbHkgYW5kIHRyYW5zbGF0aW5nIGl0IGludG8gYSBiYXNlIDY0IHJlcHJlc2VudGF0aW9uLiBUaGUgQmFzZTY0IHRlcm0gb3JpZ2luYXRlcyBmcm9tIGEgc3BlY2lmaWMgTUlNRSBjb250ZW50IHRyYW5zZmVyIGVuY29kaW5nLg==';
  }
}
add_action('init','cml_set_login_protection_cookie');

function cml_post_protection() {
  if( strtoupper($_SERVER['REQUEST_METHOD'])== 'POST' and !isset($_COOKIE['cookie_auth']) ) {
	  cml_forbidden();
  }
}
add_action('login_init','cml_post_protection');

function cml_forbidden() {
	  header("HTTP/1.0 403 Forbidden");
	  exit;
}


/* 
function cml_access() {
    global $error;
    if(empty($_POST['custom_field_name']))
    {
    $error  = 'Restricted area, please login to continue.';
    }
}
add_action('login_head','cml_access');
*/



function cml_loginURL() {
    return 'https://www.hostmatters.nl';
}
add_filter('login_headerurl', 'cml_loginURL');


function my_loginfooter() { ?>
		<img src="http://stats.hostmatters.nl/1.gif" height="1" width="1" style="height: 1px; padding: 0px;"/>
<?php }
add_action('login_footer','my_loginfooter');

