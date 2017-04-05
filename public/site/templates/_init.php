<?php

/**
 * Initialization file for template files
 *
 * This file is automatically included as a result of $config->prependTemplateFile
 * option specified in your /site/config.php.
 *
 * You can initialize anything you want to here. In the case of this beginner profile,
 * we are using it just to include another file with shared functions.
 *
 */

include_once("./_func.php");
if ($page->template == "home" && $input->urlSegment) {
 require("./{$input->urlSegment}.php");
 exit;
}

if(isset($_COOKIE["language"])) {
  $savedLanguage = $_COOKIE["language"];
} else {
  $savedLanguage = $user->language;
    setcookie('language', $savedLanguage, time()+(60*60*24*30), '/');
}

if($savedLanguage != $user->language) {
  $url = substr($pages->get('/')->httpUrl, 0, -4) . $page->localUrl($savedLanguage);
  $session->redirect($url);
}