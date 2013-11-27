<?php
echo "KyKy Anvar ;P";

class API 
{
	
	public function get_response($query_vals, $url){

		$ret = "";

		// Generate the POST string
		foreach($query_vals as $key => $value) {
			$ret .= $key.'='.urlencode($value).'&';
		}
		// Chop of the trailing ampersand
		$request = rtrim($ret, '&');


		$ch = curl_init("http://apis.anyclip.com".$url.$request); 
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		curl_close ($ch);

		$data = json_decode($response);

		return $data;
	}
}
?>