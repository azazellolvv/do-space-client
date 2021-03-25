<?php


namespace Azazello\DOSpacesConnect;


/*
  INTERNAL FUNCTION - Throws error for catching.
*/

class SpacesAPIException extends \Exception
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function GetError()
    {
        $error = @json_decode($this->getMessage(), true);
        return $error["error"];
    }
}