<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://investing-cryptocurrency-markets.p.rapidapi.com/get-ico-calendar?pair_ID=33&sort=related_days&lang_ID=1&time_utc_offset=28800",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: investing-cryptocurrency-markets.p.rapidapi.com",
		"x-rapidapi-key: 22b4c9a4b5msh9350cd435c79fedp1991f8jsn69dee99e9d13"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>