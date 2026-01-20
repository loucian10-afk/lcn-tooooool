$ip = $_SERVER ;
$user_agent = $_SERVER ?? 'none';
$referrer = $_SERVER ?? 'none';
$language = $_SERVER ?? 'none';
$time = date('Y-m-d H:i:s');

$log = " IP: $ip | UA: $user_agent | Referrer: $referrer | Lang: $language\n";
file_put_contents('logs.txt', $log, FILE_APPEND);

header('Content-Type: image/gif');
echo base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
exit;
?>