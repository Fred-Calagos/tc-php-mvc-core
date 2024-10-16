<?php

namespace app\core\exception;

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have premission to access this page';
    protected $code = 403;
}
