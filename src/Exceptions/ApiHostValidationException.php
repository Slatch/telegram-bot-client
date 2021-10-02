<?php

namespace Slatch\TelegramBotClient\Exceptions;

class ApiHostValidationException extends BaseException
{
    protected $message = 'Invalid host given';
}
