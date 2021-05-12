<?php

namespace BiilaGo\LaravelApiWrapper\Traits;

use Illuminate\Http\Client\Response;

trait OfficeEndpoints
{
    /**
     * GET request for office index.
     *
     * @param array $query
     * @return \Illuminate\Http\Client\Response
     */
    public function getOffices(array $query = []): Response
    {
        return $this->get('offices', $query);
    }

    /**
     * GET request for viewing a office.
     *
     * @param string $officeId
     * @return \Illuminate\Http\Client\Response
     */
    public function getOffice(string $officeId): Response
    {
        return $this->get("offices/$officeId");
    }
}