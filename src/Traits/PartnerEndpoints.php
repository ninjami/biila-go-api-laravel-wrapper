<?php

namespace BiilaGo\LaravelApiWrapper\Traits;

use Illuminate\Http\Client\Response;

trait PartnerEndpoints
{
    /**
     * GET request for partner index.
     *
     * @param array $query
     * @return \Illuminate\Http\Client\Response
     */
    public function getPartnerIndex(array $query = []): Response
    {
        return $this->get('partners', $query);
    }

    /**
     * GET request for viewing a partner.
     *
     * @param string $partnerId
     * @return \Illuminate\Http\Client\Response
     */
    public function getPartner(string $partnerId): Response
    {
        return $this->get("partners/$partnerId");
    }
}