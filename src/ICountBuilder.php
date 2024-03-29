<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */


declare(strict_types=1);

namespace iCount\iCount;

/**
 * ICountBuilder is used to configure and build an instance of the SDK.
 * 
 * @package iCount\iCount
 */
class ICountBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {}

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return ICountBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): ICountBuilder
    {
        $this->sdkConfig->defaultClient = $client;

        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return ICountBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): ICountBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }
    
    /**
     * setServer is used to configure the server for the SDK
     *
     * @param int $serverIdx
     * @return ICountBuilder
     */
    public function setServerIndex(int $serverIdx): ICountBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;

        return $this;
    }
    
    
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return ICount
     */
    public function build(): ICount
    {
		if ($this->sdkConfig->defaultClient === null) {
			$this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}
		if ($this->sdkConfig->securityClient === null) {
			$this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
		}

        return new ICount($this->sdkConfig);
    }
}