<?php
namespace thecore\phpmvc;
/**
 * class router
 * 
 * @author
 * @package thecore\phpmvc
 */
class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}