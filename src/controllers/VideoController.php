<?php
    require_once('./../models/APIModel.php');
    
    class VideoController {
        private $api;
        public function __construct() {
            $this->api = new APIModel();
        }

        public function fetchVideos($account_id) {
            $token = $this->api->get_token();
    
            $videos = $this->api->get_videos($account_id);

            return $videos;
        }

        public function uploadVideo($name, $url) {
            $token = $this->api->get_token();
    
            $response = $this->api->upload_video($name, $url);
        }
    }
?>