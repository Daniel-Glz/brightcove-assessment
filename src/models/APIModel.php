<?php
    require_once('./../config.php');

    class APIModel {
        private $token;

        public function get_videos($account_id) {
            $url = str_replace('{{account_id}}', $account_id, CMS_URL) . '/videos';
            
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer ' . $this->token
                ),
                CURLOPT_RETURNTRANSFER => true
            ));
            
            $response = curl_exec($ch);
            curl_close($ch);

            return json_decode($response, true);
        }

        private function create_video_object($name) {
            $url = str_replace('{{account_id}}', ACCOUNT_ID, CMS_URL) . '/videos';

            $data = array(
                'name' => $name
            );

            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_POST => 1,
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer ' . $this->token,
                    'Content-Type: application/json'
                ),
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_RETURNTRANSFER => true
            ));

            $response = curl_exec($ch);
            $response = json_decode($response, true);
            
            return $response['id'];
        }

        public function upload_video($name, $video_url) {
            $video_id = $this->create_video_object($name);

            $url = str_replace('{{account_id}}', ACCOUNT_ID, INGEST_URL);
            $url = str_replace('{{video_id}}', $video_id, $url);
            
            $data = array(
                'master' => array(
                    'url' => $video_url
                )
            );

            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_POST => 1,
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer ' . $this->token,
                    'Content-Type: application/json'
                ),
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_RETURNTRANSFER => true
            ));

            $response = curl_exec($ch);

            return json_decode($response, true);
        }

        public function get_token() {
            $ch = curl_init(AUTH_URL);
            $data = array('grant_type' => 'client_credentials');
            $data = http_build_query($data);

            curl_setopt_array($ch, array(
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded',
                    'Authorization: Basic ' . base64_encode(CLIENT_ID. ':' . CLIENT_SECRET)
                ),
                CURLOPT_RETURNTRANSFER => true
            ));

            $response = curl_exec($ch);
            curl_close($ch);

            $response = json_decode($response, true);
            $this->token = $response['access_token'];

            return $this->token;
        }
    }
?>