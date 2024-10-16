<?php

namespace thecore\phpmvc\exception;

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have premission to access this page';
    protected $code = 403;
}
