<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace iCount\iCount\Models\Operations;


class ShowPetByIdResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * unexpected error
     * 
     * @var ?\iCount\iCount\Models\Shared\Error $error
     */
	
    public ?\iCount\iCount\Models\Shared\Error $error = null;
    
    /**
     * Expected response to a valid request
     * 
     * @var ?\iCount\iCount\Models\Shared\Pet $pet
     */
	
    public ?\iCount\iCount\Models\Shared\Pet $pet = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->pet = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
