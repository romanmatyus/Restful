<?php
namespace Drahak\Api\Application\Responses;

use Nette\Application\IResponse;
use Nette\Object;
use Nette\Http;

/**
 * NullResponse
 * @package Drahak\Api\Responses
 * @author Drahomír Hanák
 */
class NullResponse extends Object implements IResponse
{

    /**
     * Do nothing
     * @param Http\IRequest $httpRequest
     * @param Http\IResponse $httpResponse
     */
    public function send(Http\IRequest $httpRequest, Http\IResponse $httpResponse)
    {
    }


}