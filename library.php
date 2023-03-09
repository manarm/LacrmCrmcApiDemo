<?php

function CallLacrmApi(string $Function, array $Parameters=array()) {
	global $API_KEY;
	$CurlHandle = curl_init("https://api.lessannoyingcrm.com/v2/");
	$Headers = array(
			"Content-Type: application/json",
			"Authorization: " . $API_KEY
	);
	$Body = array(
			"Function" => $Function,
			"Parameters" => $Parameters
	);

// LOCAL DEV ONLY
curl_setopt($CurlHandle, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($CurlHandle, CURLOPT_SSL_VERIFYPEER, 0);

	curl_setopt($CurlHandle, CURLOPT_POSTFIELDS, json_encode($Body));
	curl_setopt($CurlHandle, CURLOPT_HTTPHEADER, $Headers);
	curl_setopt($CurlHandle, CURLOPT_RETURNTRANSFER, true);

	$CurlResult = curl_exec($CurlHandle);
	$ReturnValue = false;
	if (curl_errno($CurlHandle)) {
			error_log(curl_error($CurlHandle));
	} else {
			$ResultObject = json_decode($CurlResult, true);
			$HttpCode = curl_getinfo($CurlHandle, CURLINFO_HTTP_CODE);
			if ($HttpCode === 400) {
					error_log("Error $ResultObject[ErrorCode]: $ResultObject[ErrorDescription]");
			} else {
					$ReturnValue = $ResultObject;
			}
	}

	curl_close($CurlHandle);
	return $ReturnValue;
}