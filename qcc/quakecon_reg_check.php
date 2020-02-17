# Pass age verification, check for string on sub-page of website.
<?php
$url = "http://www.quakecon.org/registration-2/";
// $file = __DIR__ . DIRECTORY_SEPARATOR . "cookie.txt";
$postData = array(
'ageDay' => '11',
'ageMonth' => 'November',
'ageYear' => '1993'
);
$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13");
curl_setopt($ch,CURLOPT_POSTFIELDS,$postData);
// curl_setopt($ch,CURLOPT_COOKIESESSION, true);
// curl_setopt($ch,CURLOPT_COOKIEJAR,$file); 
// curl_setopt($ch,CURLOPT_COOKIEFILE,$file);
$strCookie = 'cws_age_verification_dob=' . 1 . '; path=/';
curl_setopt( $ch, CURLOPT_COOKIE, $strCookie );

curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);

curl_close($ch);
echo $data;
?>
