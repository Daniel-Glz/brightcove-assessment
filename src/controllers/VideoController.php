<?php
    require_once('./../models/APIModel.php');
    
    class VideoController {
        public static function fetchVideos($account_id) {
            $api = new APIModel();
            $token = $api->get_token();
    
            $videos = $api->get_videos($account_id);

            return $videos;
        }
    }
?>