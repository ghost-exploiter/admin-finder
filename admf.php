<?php
// Mau recode??
// Yodah ambil sono
// tapi jan lupabawa nama tim w yak
// greetz : INFINITY CYBER TEAM - BLACK CODERS ANONYMOUS - G45 CYBER TEAM

print "   
              ADMIN FINDER V.1.5
          ____ _____       ____ __    __    __    ____ 
         / ___| ____|     / ___/ /_  / /_  / /_  / ___|
        | |  _|  _| _____| |  | '_ \| '_ \| '_ \| |    
        | |_| | |__|_____| |__| (_) | (_) | (_) | |___ 
         \____|_____|     \____\___/ \___/ \___/ \____|

        
        ---------------------------------------------------------------
        |                     GHOST EXPLOITER TEAM                    |
        |-------------------------------------------------------------|
        | AUTHOR           : Arjun Gans [  MR.AR ]                    |
        | FACEBOOK         : Arjun Gans                               |
        | THANKS TO        : [LEGENAD166] [MAXI] [MR.ONION]           |
        |                    [Mr.JHON] [ACAB] [MR.DESTROYER] [Mr.Riy] |
        | Contack WhatsApp : 085395339220                             |
        | Contack Gmail    : muslimcyberarmy009@gmail.com.com         |
        --------------------------------------------------------------- 
";

echo "masukan site  : ";
$target = trim(fgets(STDIN));
$list = "cakil_wordlist.txt";
if(!preg_match("/^http:\/\//",$target) AND !preg_match("/^https:\/\//",$target)){
	$targetnya = "http://$target";
}else{
	$targetnya = $target;
}

$buka = fopen("$list","r");
$ukuran = filesize("$list");
$baca = fread($buka,$ukuran);
$lists = explode("\r\n",$baca);

foreach($lists as $login){
	$log = "$targetnya/$login";
	$ch = curl_init("$log");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	if($httpcode == 200){
		 $handle = fopen("result.txt", "a+");
		fwrite($handle, "$log\n");
		print "\n\n [".date('H:m:s')."] Mencoba : $log => Ditemukan\n";
	}else{
		print "\n[".date('H:m:s')."] Mencoba : $log => tidak di temukan";
	}
}
  
?>

