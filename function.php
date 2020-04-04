<?php
function JSON ($url)
	{
		$data = file_get_contents($url);
		return json_decode($data);
	}
function Language ($lang)
	{
		$url = 'https://raw.githubusercontent.com/MinterCat/Language/master/MinterCat_'.$lang.'.json';
		$data = file_get_contents($url);
		return json_decode($data);
	}
class CheckHash
	{
		function __construct2($api,$hash)
			{
				$api = new MinterAPI($api);
				return $api->getTransaction($hash);
			}
		function __construct3($api, $hash, $check)
			{
				
				$api = new MinterAPI($api);
				$payload = $api->getTransaction($hash)->result->payload;
				$payload = base64_decode($payload); // {'type':1,'img':1,'hash':'0xBCAEC4A920F1EFB5B6D163D57660EF50A7630AB3B20A4B797C8EACC33BFCF055'}
				return json_decode($payload);
			}
	}
function GetStatusPage()
	{
		$data = file_get_contents('https://explorer-api.minter.network/api/v1/status-page');
		$jsonCalled = json_decode($data);
		return $jsonCalled->data;
	}
function GetBlocks()
	{
		$data = file_get_contents('https://explorer-api.minter.network/api/v1/blocks');
		$json = json_decode($data,true)['data'][0];
		return json_decode(json_encode($json));
	}

function Coin()
	{
		$data = file_get_contents('https://api.mintercat.com/coin');
		return json_decode($data);
	}
function Users()
	{
		$data = file_get_contents('https://api.mintercat.com/users');
		$json = json_decode($data,true);
		return json_decode(json_encode($json));
	}
class User
	{
		public $id;
		public $name;
		public $address;
		
		public static function ID($id)
			{
				$id -= 1;
				$data = file_get_contents('https://api.mintercat.com/users');
				$json = json_decode($data,true)[$id];
				return json_decode(json_encode($json));
			}
		public static function Address($address)
			{
				$data = file_get_contents('https://api.mintercat.com/users');
				$json = json_decode($data,true);
				foreach ($json as $value => $users) {
					$user = $users['address'];
					if ($user == $address) {$id = $users['id'];break;}
				}
				$id -= 1;
				$json = json_decode($data,true)[$id];
				return json_decode(json_encode($json));
			}
		public static function Nick($nick)
			{
				$data = file_get_contents('https://api.mintercat.com/users');
				$json = json_decode($data,true);
				foreach ($json as $value => $users) {
					$user = $users['nick'];
					if ($user == $nick) {$id = $users['id'];break;}
				}
				$id -= 1;
				$json = json_decode($data,true)[$id];
				return json_decode(json_encode($json));
			}
	}
class Cats
	{
		public $img;
		public $address;
		public $stored_id;
		
		public static function Img($img)
			{
				$data = file_get_contents('https://api.mintercat.com');
				$json = json_decode($data,true)['cats'];
				foreach ($json as $value => $cats) {
					$cat = $cats['img'];
					if ($cat == $img) {$cat = $cats;break;}
				}
				return json_decode(json_encode($cat));
			}
		public static function Counts()
			{
				$data = file_get_contents('https://api.mintercat.com');
				return json_decode($data)->count;
			}
		public static function Address($address)
			{
				$data = file_get_contents('https://api.mintercat.com/cats?addr=' . $address);
				$data = json_decode($data,true)[0];
				return json_decode(json_encode($data));
			}
		public static function StoredId($stored_id)
			{
				$data = file_get_contents('https://api.mintercat.com/cats?id=' . $stored_id);
				$data = json_decode($data,true)[0];
				return json_decode(json_encode($data));
			}
	}