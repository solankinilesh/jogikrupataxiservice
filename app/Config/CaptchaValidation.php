<?php

namespace Config;

class CaptchaValidation
{
    public function verifyRecaptcha(string $str, ?string &$error = null): bool
    {
        $secretKey = getenv('GOOGLE_RECAPTCHA_SECRETKEY');

        if ($str && !empty($str)) {
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$str.'&remoteip='.$_SERVER['REMOTE_ADDR']);

            $responseData = json_decode($response);
            if ($responseData->success) { // Verified
                return true;
            }
        }

        $error = 'Invalid captcha';

        return false;
    }

    public function verifyRecaptchaV2(string $str, ?string &$error = null): bool
    {
        $secretKey = getenv('GOOGLE_RECAPTCHA_V2_SECRETKEY');

        if ($str && !empty($str)) {
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$str.'&remoteip='.$_SERVER['REMOTE_ADDR']);

            $responseData = json_decode($response);
            if ($responseData->success) { // Verified
                return true;
            }
        }

        $error = 'Invalid captcha';

        return false;
    }
}
