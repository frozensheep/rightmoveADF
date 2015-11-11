$pemfile = "cert.pem";
$keyfile = "private_key.key";
$url = "someTestUrl";
$requestXml = "requestData";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
curl_setopt($ch, CURLOPT_SSLCERT, $pemfile);
curl_setopt($ch, CURLOPT_SSLCERTTYPE, 'PEM');
curl_setopt($ch, CURLOPT_SSLKEY, $keyfile);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestXml);
$ret = curl_exec($ch);