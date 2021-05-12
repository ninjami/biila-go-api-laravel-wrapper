<?php

namespace BiilaGo\LaravelApiWrapper\Facades;

use BiilaGo\LaravelApiWrapper\BiilaGoApi as BaseBiilaGoApi;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\Response getOffice(string $officeId)
 * @method static \Illuminate\Http\Client\Response getOffices(array $query = [])
 * @method static \Illuminate\Http\Client\Response getPartner(string $partnerId)
 * @method static \Illuminate\Http\Client\Response getPartners(array $query = [])
 * @method static \Illuminate\Http\Client\Response getReservation(string $reservationId)
 * @method static \Illuminate\Http\Client\Response getReservations(array $query = [])
 * @method static \Illuminate\Http\Client\Response previewReservation(array $reservationData)
 * @method static \Illuminate\Http\Client\Response storeReservation(array $reservationData)
 * @method static \Illuminate\Http\Client\Response submitReservation(string $reservationId)
 * @method static \Illuminate\Http\Client\Response getShop(string $shopId)
 * @method static \Illuminate\Http\Client\Response getShops(array $query = [])
 */
class BiilaGoApi extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return BaseBiilaGoApi::class;
    }
}