<?php

$url = "https://air9q2dn.anycast.nagra.com/AIR9Q2DN/wvls/contentlicenseservice/v1/licenses";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "authority: air9q2dn.anycast.nagra.com",
   "sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="90", "Microsoft Edge";v="90"",
   "accept: application/json",
   "nv-authorizations: eyJraWQiOiIzNjk0MDciLCJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ2ZXIiOiIxLjAiLCJ0eXAiOiJDb250ZW50QXV0aFoiLCJleHAiOjE2MjY4NDAwNTIsImNvbnRlbnRSaWdodHMiOlt7ImNvbnRlbnRJZCI6InplZWNpbmVtYWhkIiwic3RhcnQiOiIyMDIxLTA1LTIyVDA5OjMwOjUyLjU2M1oiLCJlbmQiOiIyMDIxLTA2LTAxVDE2OjI4OjA1LjI2N1oiLCJkdXJhdGlvbiI6NTE4NDAwMCwic3RvcmFibGUiOnRydWUsImRlZmF1bHRVc2FnZVJ1bGVzIjp7ImRpZ2l0YWxPbmx5IjpmYWxzZSwiaGRjcCI6ZmFsc2UsInVucHJvdGVjdGVkRGlnaXRhbE91dHB1dCI6dHJ1ZX19XX0.h2UHjIx4QBc2O2eeGa8EoadHIeyP3vRknhL6gn0kFNo",
   "sec-ch-ua-mobile: ?0",
   "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36 Edg/90.0.818.62",
   "content-type: application/json",
   "origin: https://www.airtelxstream.in",
   "sec-fetch-site: cross-site",
   "sec-fetch-mode: cors",
   "sec-fetch-dest: empty",
   "referer: https://www.airtelxstream.in/",
   "accept-language: en-US,en;q=0.9",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"challenge":"CAQ="}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>
