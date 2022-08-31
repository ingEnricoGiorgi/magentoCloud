<?php
declare (strict_types = 1);

namespace Custom\Module\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;

class InvioCurldue extends AbstractHelper
{

    public function invia()
    {
        $time = time();
        $message = "hello world";

        $urlmessage = urlencode($message);

        $ch = curl_init("https://enrico.reflexmania.it/custom/page/blocklayout/?message=$urlmessage&time=$time");

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'message=$urlmessage&time=$time');
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);

        curl_exec($ch);
        $info = curl_getinfo($ch);
        print_r($info['request_header']);
       
        curl_close($ch);
    }
}
