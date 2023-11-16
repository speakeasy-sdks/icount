<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace iCount\iCount;

/**
 * ICount
 * 
 * @package iCount\iCount
 * @access public
 */
class ICount
{
	public const SERVERS = [
		'http://petstore.swagger.io/v1',
	];
  	
	public Pets $pets;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return ICountBuilder
	 */
	public static function builder(): ICountBuilder
	{
		return new ICountBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->pets = new Pets($this->sdkConfiguration);
	}
}