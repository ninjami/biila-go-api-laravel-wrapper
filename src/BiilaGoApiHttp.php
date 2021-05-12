<?php

namespace BiilaGo\LaravelApiWrapper;

use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\PendingRequest;
use LogicException;

class BiilaGoApiHttp extends PendingRequest
{
    const DEFAULT_DOMAIN = 'http://api.go.biila.io';

    /**
     * Undocumented function
     *
     * @param string|null $apiToken
     * @param string|null $identity [optional]
     * @param string|null $domain [optional]
     * @param \Illuminate\Http\Client\Factory|null $factory
     */
    public function __construct(
        ?string $apiToken,
        string $identity = null,
        string $domain = null,
        ?Factory $factory = null
    )
    {
        parent::__construct($factory);
        
        $domain = $domain ?: static::DEFAULT_DOMAIN;

        $this->baseUrl(rtrim($domain, '/') . '/v1/p')
            ->acceptJson()
            ->withApiToken($apiToken)
            ->attachHeaders($identity);
    }

    /**
     * Add api token to the request.
     *
     * @param string|null $apiToken
     * @return self
     */
    protected function withApiToken(?string $apiToken): self
    {
        if (!$apiToken) {
            throw new LogicException("Api token not set up in config for Biila Go API.");
        }

        return $this->withToken($apiToken);
    }

    /**
     * Resolve and attach headers for the request.
     *
     * @param string|null $identity
     * @return $this
     */
    protected function attachHeaders(?string $identity): self
    {
        $headers = [
            'Biila-Environment' => 'partner'
        ];

        if (is_string($identity) && strlen($identity) > 0) {
            $headers['Biila-Identity'] = $identity;
        }

        return $this->withHeaders($headers);
    }
}