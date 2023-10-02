<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace iCount\iCount\Models\Operations;

use \iCount\iCount\Utils\SpeakeasyMetadata;
class ListPetsRequest
{
    /**
     * How many items to return at one time (max 100)
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
	public function __construct()
	{
		$this->limit = null;
	}
}
