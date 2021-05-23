<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://air9q2dn.anycast.nagra.com/AIR9Q2DN/wvls/contentlicenseservice/v1/licenses');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: air9q2dn.anycast.nagra.com';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"90\", \"Microsoft Edge\";v=\"90\"';
$headers[] = 'Accept: application/json';
$headers[] = 'Nv-Authorizations: eyJraWQiOiIzNjk0MDciLCJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ2ZXIiOiIxLjAiLCJ0eXAiOiJDb250ZW50QXV0aFoiLCJleHAiOjE2MjY4NDAwNTIsImNvbnRlbnRSaWdodHMiOlt7ImNvbnRlbnRJZCI6InplZWNpbmVtYWhkIiwic3RhcnQiOiIyMDIxLTA1LTIyVDA5OjMwOjUyLjU2M1oiLCJlbmQiOiIyMDIxLTA2LTAxVDE2OjI4OjA1LjI2N1oiLCJkdXJhdGlvbiI6NTE4NDAwMCwic3RvcmFibGUiOnRydWUsImRlZmF1bHRVc2FnZVJ1bGVzIjp7ImRpZ2l0YWxPbmx5IjpmYWxzZSwiaGRjcCI6ZmFsc2UsInVucHJvdGVjdGVkRGlnaXRhbE91dHB1dCI6dHJ1ZX19XX0.h2UHjIx4QBc2O2eeGa8EoadHIeyP3vRknhL6gn0kFNo';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36 Edg/90.0.818.62';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://www.airtelxstream.in';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.airtelxstream.in/';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
