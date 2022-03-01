<?php 
/**
 * Website: https://github.com/domondon1/itextmo-plugin
 * Acknowledge: Roderick Domondon
 *
 * all affected sections have comments starting with "PaperG"

 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author Roderick Domodnon <iea.domondon@gmail.com>
 * @version 1
 * @package PlaceLocalInclude
 * @subpackage itextmo Plugin
 */


function itext(){
$dom = new itextMo();
return $dom;
}

Class itextMo{

	function sendMsg($number,$message,$apicode){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
		$param = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($itexmo),
				),
			);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
	}

	function statusApi($apicode){
		$url = 'https://www.itexmo.com/php_api/serverstatus.php?apicode='.$apicode;
		return $this->decodeJson($url);
	}

	function checkApi($apicode){
		$url = 'https://www.itexmo.com/php_api/apicode_info.php?apicode='.$apicode;
		return $this->decodeJson($url);
	}

	function pendingSms($apicode,$sort = 'desc'){
		$url = 'https://www.itexmo.com/php_api/display_outgoing.php?sortby='.$sort.'&apicode='.$apicode;
		$ret =  $this->get_url_contents($url);
		if($this->get_url_contents($url) != 'EMPTY'){
			$ret =  $this->decodeJson($url);
		}
		return $ret;
	}

	function delete_pendingSms($apicode){
		$url = 'https://www.itexmo.com/php_api/delete_outgoing_all.php?apicode='.$apicode;
		$ret =  $this->get_url_contents($url);
		if($this->get_url_contents($url) != 'EMPTY'){
			$ret =  $this->decodeJson($url);
		}
		return $ret;
	}

	function displaySms($apicode){
		$url = 'https://www.itexmo.com/php_api/display_messages.php?apicode='.$apicode;
		$ret =  $this->get_url_contents($url);
		if($this->get_url_contents($url) != 'EMPTY'){
			$ret =  $this->decodeJson($url);
		}
		return $ret;
	}

	function display_originatorSms($apicode,$originator){
		$url = 'https://www.itexmo.com/php_api/display_messages_via_originator.php?apicode='.$apicode.'&originator='.$originator;
		$ret =  $this->get_url_contents($url);
		if($this->get_url_contents($url) != 'EMPTY'){
			$ret =  $this->decodeJson($url);
		}
		return $ret;
	}
	function delete_originatorSms($apicode,$originator){
		$url = 'https://www.itexmo.com/php_api/delete_message_via_originator.php?apicode='.$apicode.'&originator='.$originator;
		$ret =  $this->get_url_contents($url);
		if($this->get_url_contents($url) != 'EMPTY'){
			$ret =  $this->decodeJson($url);
		}
		return $ret;
	}

	function delete_idSms($apicode,$id){
		$url = 'https://www.itexmo.com/php_api/delete_message_via_id.php?apicode='.$apicode.'&id='.$id;
		$ret =  $this->get_url_contents($url);
		if($this->get_url_contents($url) != 'EMPTY'){
			$ret =  $this->decodeJson($url);
		}
		return $ret;
	}

	function deleteAll_recvSms($apicode){
		$url = 'https://www.itexmo.com/php_api/delete_messages_all.php?apicode='.$apicode;
		$ret =  $this->get_url_contents($url);
		if($this->get_url_contents($url) != 'EMPTY'){
			$ret =  $this->decodeJson($url);
		}
		return $ret;
	}

	private function get_url_contents($url){
		return file_get_contents($url);
	}

	private function decodeJson($url){
		$contents = $this->get_url_contents($url);
		$json_decode = json_decode($contents,true);
		return $json_decode;
	}
}


?>