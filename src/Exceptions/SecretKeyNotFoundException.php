<?php
namespace Shirakun\LaravelCapjs\Exceptions;

use Exception;

class SecretKeyNotFoundException extends Exception
{
    protected int $status = 500;
}
