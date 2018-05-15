<?php
	require_once("url.class.php");

	class QZAPI {
		private $keys;
		public $url;
		
		public function __construct($url){
			$this->keys = array(
				"url" => $url
			);
			$this->url = new URL();
		}

		public function authUser($username,$password){
			$this->keys['username'] = $username;
			$this->keys['password'] = $password;
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "authUser",
				"xh" => $keys['username'],
				"pwd" => $keys['password']
			));
			return $response;
		}

		public function getStudentIdInfo($token, $xh)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getStudentIdInfo",
				"xh" => $xh
			), $token);
			return $response;
		}
		
		public function getCurrentTime($token, $date)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getCurrentTime",
				"currDate" => $date
			), $token);
			return $response;
		}

		public function getUserInfo($token, $xh)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getUserInfo",
				"xh" => $xh
			), $token);
			return $response;
		}

		public function getKbcxAzc($token, $xh, $xnxqid, $zc)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getKbcxAzc",
				"xh" => $xh,
				"xnxqid" => $xnxqid,
				"zc" => $zc
			), $token);
			return $response;
		}

		public function getXqcx($token)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getXqcx"
			), $token);
			return $response;
		}

		public function getJxlcx($token, $jzwid, $jzwmc)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getJxlcx",
				"jzwid" => $jzwid,
				"jzwmc" => $jzwmc
			), $token);
			return $response;
		}
		
		public function getKxJscx($token, $time, $idleTime, $xqid = "", $jxlid = "", $classroomNumber = "")
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getKxJscx",
				"time" => $time,
				"idleTime" => $idleTime,
				"xqid" => $xqid,
				"jxlid" => $jxlid,
				"classroomNumber" => $classroomNumber
			), $token);
			return $response;
		}
		
		public function getXnxq($token, $xh)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getXnxq",
				"xh" => $xh
			), $token);
			return $response;
		}
		
		public function getCjcx($token, $xh, $xnxqid)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getCjcx",
				"xh" => $xh,
				"xnxqid" => $xnxqid
			), $token);
			return $response;
		}
		
		public function getKscx($token, $xh)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getKscx",
				"xh" => $xh
			), $token);
			return $response;
		}
		
		public function getEarlyWarnInfo($token, $xh, $history)
		{
			$keys = $this->keys;
			$response = $this->url->get($keys['url'], array(
				"method" => "getEarlyWarnInfo",
				"xh" => $xh,
				"history" => $history
			), $token);
			return $response;
		}
	}
?>