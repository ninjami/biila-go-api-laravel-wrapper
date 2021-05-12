# Biila Go Partner API Laravel Wrapper

This package provides a simple setup for using Biila Go Partner API with Laravel.

## Config values

**BIILA_GO_API_TOKEN (required)**

Token that grants access to the API.

**BIILA_GO_API_IDENTITY (optional)**

An optional email address that sets the user for the session. If not given, will default
to the owner user of the api token.

## Examples

### Get reservation index

```php
use BiilaGo\LaravelApiWrapper\Facades\BiilaGoApi;

$reservations = BiilaGoApi::getReservations()->json();
// OR
$reservations = BiilaGoApi::get('reservations')->json();
```

### Get a single reservation

```php
use BiilaGo\LaravelApiWrapper\Facades\BiilaGoApi;

$reservation = BiilaGoApi::getReservation('R-1')->json();
// OR
$reservation = BiilaGoApi::get('reservations/R-1')->json();
```

You can find information about the endpoints [here](https://developers.biila.io).
