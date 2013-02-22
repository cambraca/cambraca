<?php
header('Content-Type:text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<settings>
 
  <!--   GENERAL SETTINGS   -->
  <canvas_width>800</canvas_width>
  
  <canvas_height>600</canvas_height>
  
  <carousel_center_x_offset>0</carousel_center_x_offset>
  
  <carousel_center_y_offset>-50</carousel_center_y_offset>
  
  <image_width>150</image_width>
  
  <image_height>220</image_height>
  
  <radius_x>300</radius_x>
  
  <radius_y>100</radius_y>
  
  <radius_z>150</radius_z>
  
  <carousel_rotation_angle>0</carousel_rotation_angle>
  
  <back_thumb_transparency>0.4</back_thumb_transparency>
  
  <auto_play>yes</auto_play>
  
  <enable_mouse_wheel>yes</enable_mouse_wheel>
  
  <slideshow_delay>3.5</slideshow_delay>
 
  <background_color>#000000</background_color>
  
  <preloader_path>load/graphics/preloader.png</preloader_path>
  <preloader_size>32</preloader_size>
  <preloader_color>#FFFFFF</preloader_color>
  
  <!--   THUMBS SETTINGS   -->
  <border_size>0</border_size>
  <border_color>#FFFFFF</border_color>
  
  <show_tooltip>yes</show_tooltip>
  <tooltip_font>Verdana</tooltip_font>
  <tooltip_text_size>14</tooltip_text_size>
  <tooltip_text_color>#000000</tooltip_text_color>
  <tooltip_background_color>#FFFFFF</tooltip_background_color>
  
  <open_link_on_image_click>yes</open_link_on_image_click>
  <window_open_location>_self</window_open_location>
  
  <show_reflection>yes</show_reflection>
  <reflection_height>100</reflection_height>
  <reflection_distance>1</reflection_distance>
  <reflection_transparency>0.5</reflection_transparency>
   	
  <!--   SLIDE SHOW PRELOADER SETTINGS   -->
  <slide_show_preloader_x_position>20</slide_show_preloader_x_position>
  <slide_show_preloader_y_position>680</slide_show_preloader_y_position>
  
  <slide_show_preloader_size>24</slide_show_preloader_size>
  
  <slide_show_preloader_fill_color>#FFFFFF</slide_show_preloader_fill_color>
  <slide_show_preloader_background_color>#000000</slide_show_preloader_background_color>
  
  <!--   BUTTONS SETTINGS   -->
  <show_next_button>yes</show_next_button>
  <show_prev_button>yes</show_prev_button>
  <show_play_button>yes</show_play_button>
  
  <buttons_background_path>load/graphics/empty.png</buttons_background_path>
  <buttons_next_icon_path>load/graphics/empty.png</buttons_next_icon_path>
  <buttons_prev_icon_path>load/graphics/empty.png</buttons_prev_icon_path>
  <buttons_play_icon_path>load/graphics/empty.png</buttons_play_icon_path>
  <buttons_pause_icon_path>load/graphics/empty.png</buttons_pause_icon_path>
  
  <next_button_x_position>770</next_button_x_position>
  <next_button_y_position>670</next_button_y_position>
  <prev_button_x_position>710</prev_button_x_position>
  <prev_button_y_position>670</prev_button_y_position>
  <play_button_x_position>740</play_button_x_position>
  <play_button_y_position>670</play_button_y_position>

  <next_button_icon_color>#000000</next_button_icon_color>
  <next_button_background_color>#FFFFFF</next_button_background_color>
  <prev_button_icon_color>#000000</prev_button_icon_color>
  <prev_button_background_color>#FFFFFF</prev_button_background_color>
  <play_button_icon_color>#000000</play_button_icon_color>
  <play_button_background_color>#FFFFFF</play_button_background_color>
  
  <!--   SCROLLBAR SETTINGS   -->
  <show_scrollbar>yes</show_scrollbar>
  
  <scrollbar_width>400</scrollbar_width>
  <scrollbar_height>15</scrollbar_height>
  
  <scrollbar_handler_width>80</scrollbar_handler_width>
  
  <scrollbar_x_position>200</scrollbar_x_position>
  <scrollbar_y_position>673</scrollbar_y_position>
  
  <scrollbar_handler_color>#FFFFFF</scrollbar_handler_color>
  <scrollbar_track_bar_color>#000000</scrollbar_track_bar_color>
  
  <scrollbar_lines_image_path>load/graphics/empty.png</scrollbar_lines_image_path>

  
 <!--   ADD / REMOVE IMAGES FORM THE CAROUSEL   -->
 <images>
<?php

$images = array('twitter','facebook','github','linkedin','blog','gplus','soundcloud','youtube');
$urls = array(
	'http://twitter.com/cambraca',
	'http://facebook.com/cambraca',
	'http://github.com/cambraca',
	'http://www.linkedin.com/in/cambraca',
	'http://blog.cambraca.com',
	'https://plus.google.com/u/0/111394655730295880367/about',
	'https://soundcloud.com/cambraca',
	'http://www.youtube.com/cambraca1',
);
$texts = array('Twitter','Facebook','GitHub','LinkedIn','Blog','Google+','SoundCloud','YouTube');

$nums = range(0, count($images)-1);
shuffle($nums);
foreach ($nums as $k):
?>
	<image>
		<image_path>load/images/<?= $images[$k] ?>.png</image_path>
		<url_to_open_on_click><?= $urls[$k] ?></url_to_open_on_click>
		<text><?= $texts[$k] ?></text>
	</image>
<?php endforeach; ?>
 </images>
  
</settings>

