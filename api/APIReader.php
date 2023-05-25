<?php

class APIReader {
    private $apiUrl;
    private $apiToken;

    public function __construct()
    {
        $this->apiUrl = getenv('API_URL');
        $this->apiToken = getenv('API_TOKEN');
    }

    public function getUsers()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        if (!empty($this->apiToken)) {
            // Add Authorization header with a token if available
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $this->apiToken,
                'Content-Type: application/json'
            ]);
        }

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            die('Request Error: ' . $error );
        }

        curl_close($curl);
        $users = json_decode($response);
        return $users;
    }
}
