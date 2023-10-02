<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace iCount\iCount\Models\Operations;


class ListPetsResponse
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
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
    /**
     * A paged array of pets
     * 
     * @var ?array<\iCount\iCount\Models\Shared\Pet> $pets
     */
	
    public ?array $pets = null;
    
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->error = null;
		$this->headers = null;
		$this->pets = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
