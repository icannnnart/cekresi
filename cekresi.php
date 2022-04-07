<?php
error_reporting(true);
echo "\nNomer Resi : ";
$resi = trim(fgets(STDIN));
echo "Kurir [jne] [jnt] [anteraja] [tiki] [wahana] [pos] [trawlbens] [sicepat] : ";
$kurir = trim(fgets(STDIN));
$url = "https://pluginongkoskirim.com/cek-tarif-ongkir/front/resi-amp?__amp_source_origin=https%3A%2F%2Fpluginongkoskirim.com";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "kurir=$kurir&resi=$resi";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$mentah = json_decode($resp);
$status = $mentah ->data->detail->status;
$desc = $mentah->data->detail->history;
if (strpos($resp, 'found')) {
print_r("\n [ Status Paket ] : $status\n\n");
foreach ($desc as $key) {
  $ket = $key->desc;
  $tgl = $key->time;
  $lok = $key->position;
  print_r(" [ Keterangan ] : $ket\n");
  print_r(" [ Waktu ] : $tgl\n");
  print_r(" [ Lokasi ] : $lok\n\n");
}
} elseif (strpos($resp, 'Mohon maaf nomor resi')) {
   print_r("\n [ KODE RESI TIDAK DITEMUKAN ]\n");
}else {
   print_r('ERROR');
}



?>
