<?php

namespace BiilaGo\LaravelApiWrapper\Traits;

use Illuminate\Http\Client\Response;

trait ShopEndpoints
{
    /**
     * GET request for shop index.
     *
     * @param array $query
     * @return \Illuminate\Http\Client\Response
     */
    public function getShopIndex(array $query = []): Response
    {
        return $this->get('shops', $query);
    }

    /**
     * GET request for viewing a shop.
     *
     * @param string $shopId
     * @return \Illuminate\Http\Client\Response
     */
    public function getShop(string $shopId): Response
    {
        return $this->get("shops/$shopId");
    }
}