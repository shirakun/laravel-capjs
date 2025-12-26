<?php
namespace Shirakun\LaravelCapjs\Exceptions;

use Exception;

class UnkownErrorOccuredException extends Exception
{
    protected int $status = 500;
}
