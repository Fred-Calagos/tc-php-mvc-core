<?php

namespace thecore\phpmvc\exception;

class NotFoundException extends \Exception
{
    protected $message = 'Page Not Found';
    protected $code = 404;
}
