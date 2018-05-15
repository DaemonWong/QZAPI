<?php

class URL{
    public function combineURL($baseURL,$keysArr){
        $combined = $baseURL."?";
        $valueArr = array();
        foreach($keysArr as $key => $val){
            $valueArr[] = "$key=$val";
        }
        $keyStr = implode("&",$valueArr);
        $combined .= ($keyStr);
        return $combined;
    }
	
    public function getData($url, $token){
        $ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'token:' . $token
		));
		$response =  curl_exec($ch);
		curl_close($ch);
        if(empty($response)) return false;
        return json_decode($response, true);
    }

    public function get($url, $keysArr, $token = ""){
        $combined = $this->combineURL($url, $keysArr);
        return $this->getData($combined, $token);
    }
}
?>