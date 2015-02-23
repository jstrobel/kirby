<?php
kirbytext::$tags['instagram'] = array(
    'html' => function($tag) {
        $instaurl = file_get_contents('http://api.instagram.com/oembed?url='.$tag->attr('instagram'));
        return json_decode($instaurl)->html;
    }
);
?>
