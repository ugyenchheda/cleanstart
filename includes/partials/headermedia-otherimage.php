<?php
/*
 ______ _____   _______ _______ _______ _______ ______ _______ 
|   __ \     |_|    ___|_     _|   |   |       |   __ \   _   |
|    __/       |    ___| |   | |       |   -   |      <       |
|___|  |_______|_______| |___| |___|___|_______|___|__|___|___|

P L E T H O R A T H E M E S . C O M            (c) 2014

Head Panel Section / Other Image

*/
Plethora_Theme::dev_comment('Head Panel Template part ( other image version ) loaded: '. THEME_PARTIALS_DIR . '/'. basename( __FILE__ ), 'templateparts');
$title_html = Plethora_Theme::html_headermedia_title(); // Get the Title
$subtitle_html = Plethora_Theme::html_headermedia_subtitle(); // Get the Subtitle
$header_image_html = Plethora_Theme::html_headermedia_otherimage(); // Get the Other Image

if ( !empty( $header_image_html )) { $nophoto_class = ''; $comment = 'other image display'; } else { $nophoto_class = ' no_photo';  $comment = 'should be other image display, but apparently no other image was found on post meta!'; } 
?>
<?php Plethora_Theme::dev_comment('Start >>> Head Panel Section ( '. $comment .' )', 'layout'); ?>
<div class="full_page_photo<?php echo $nophoto_class; ?>"<?php echo $header_image_html; ?>>
     <div class="hgroup">
      <?php  
          echo $title_html;
          echo $subtitle_html;
      ?>
     </div>
</div>
<?php Plethora_Theme::dev_comment('End <<< Head Panel Section', 'layout'); ?>
<?php Plethora_Theme::dev_comment('End <<< '. THEME_PARTIALS_DIR . '/'. basename( __FILE__ ), 'templateparts'); ?>