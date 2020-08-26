<?php
class YoutubeWidget extends WP_Widget {
  public function __construc(){
    parent::__construct('youtube_widget', 'Youtube Widget',);
  }
  public function widget($args, $instance){
    echo 'bonjour';
  }
  public function form($instance){

  }
  public function update ($newInstance, $oldInstance){
    return [];
  }
}
 ?>
