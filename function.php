<?php
// $json_api = JSON($site.'api');
function JSON ($url)
{
	$data = file_get_contents($url);
    return json_decode($data);
}

// $Language = Language('Russian');
function Language ($lang)
{
	$url = 'https://raw.githubusercontent.com/MinterCat/Language/master/MinterCat_'.$lang.'.json';
	$data = file_get_contents($url);
    return json_decode($data);
}
//$CheckHash = new CheckHash($api,$hash,$check);
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
//$GetStatusPage = GetStatusPage();
function GetStatusPage()
{
	$data = file_get_contents('https://explorer-api.minter.network/api/v1/status-page');
    $jsonCalled = json_decode($data);
    return $jsonCalled->data;
}
//$GetBlocks = GetBlocks();
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
function Users()
{
	$data = file_get_contents('https://api.mintercat.com/users');
	$json = json_decode($data,true);
	return json_decode(json_encode($json));
}