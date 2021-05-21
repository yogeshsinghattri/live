<?php
 
 // A sample PHP Script to POST data using cURL
    
  // Prepare new cURL resource
  $crl = curl_init('https://air9q2dn.anycast.nagra.com/AIR9Q2DN/wvls/contentlicenseservice/v1/licenses');
  curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($crl, CURLINFO_HEADER_OUT, true);
  curl_setopt($crl, CURLOPT_POST, true);
  curl_setopt($crl, CURLOPT_POSTFIELDS, $post_data);
    
  // Set HTTP Header for POST request 
  curl_setopt($crl, CURLOPT_HTTPHEADER, array(
      'nv-authorizations: eyJraWQiOiIzNjk0MDciLCJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ2ZXIiOiIxLjAiLCJ0eXAiOiJDb250ZW50QXV0aFoiLCJleHAiOjE2MjY4MDA5MTgsImNvbnRlbnRSaWdodHMiOlt7ImNvbnRlbnRJZCI6InplZW5ld3MiLCJzdGFydCI6IjIwMjEtMDUtMjFUMjI6Mzg6MzguOTQ4WiIsImVuZCI6IjIwMjEtMDYtMDFUMDU6MzU6NTEuNjUyWiIsImR1cmF0aW9uIjo1MTg0MDAwLCJzdG9yYWJsZSI6dHJ1ZSwiZGVmYXVsdFVzYWdlUnVsZXMiOnsiZGlnaXRhbE9ubHkiOmZhbHNlLCJoZGNwIjpmYWxzZSwidW5wcm90ZWN0ZWREaWdpdGFsT3V0cHV0Ijp0cnVlfX1dfQ.oaYkCxA-jfxI-rzRg0XvBk_QCQyzVlWIIZ1_mqf_D9U',
      'Content-Length: ' . strlen($payload))
  );
    
  // Submit the POST request
  $result = curl_exec($crl);
    
  // handle curl error
  if ($result === false) {
      // throw new Exception('Curl error: ' . curl_error($crl));
      //print_r('Curl error: ' . curl_error($crl));
      $result_noti = 0; die();
  } else {
 
      $result_noti = 1; die();
  }
  // Close cURL session handle
  curl_close($crl);
    
?>