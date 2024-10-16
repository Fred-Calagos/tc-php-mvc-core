<?php

namespace thecore\phpmvc;

use thecore\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
