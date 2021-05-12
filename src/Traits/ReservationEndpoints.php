<?php

namespace BiilaGo\LaravelApiWrapper\Traits;

use Illuminate\Http\Client\Response;

trait ReservationEndpoints
{
    /**
     * GET request for reservation index.
     *
     * @param array $query
     * @return \Illuminate\Http\Client\Response
     */
    public function getReservations(array $query = []): Response
    {
        return $this->get('reservations', $query);
    }

    /**
     * GET request for viewing a reservation.
     *
     * @param string $reservationId
     * @return \Illuminate\Http\Client\Response
     */
    public function getReservation(string $reservationId): Response
    {
        return $this->get("reservations/$reservationId");
    }

    /**
     * POST request for previewing given reservation data.
     *
     * @param array $reservationData
     * @return \Illuminate\Http\Client\Response
     */
    public function previewReservation($reservationData): Response
    {
        return $this->post('reservations/manage/preview', $reservationData);
    }

    /**
     * POST request for storing given reservation data.
     *
     * @param array $reservationData
     * @return \Illuminate\Http\Client\Response
     */
    public function storeReservation($reservationData): Response
    {
        return $this->post('reservations/manage', $reservationData);
    }

    /**
     * POST request for submitting a reservation.
     *
     * @param string $reservationId
     * @return \Illuminate\Http\Client\Response
     */
    public function submitReservation(string $reservationId): Response
    {
        return $this->post("reservations/manage/$reservationId/submit");
    }
}