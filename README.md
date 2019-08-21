# Raja Ongkir Library for CodeIgniter 3.x

CodeIgniter library for consuming [RajaOngkir](http://rajaongkir.com) API.
This library is an update from [hok00age](https://github.com/hok00age/rajaongkir-codeigniter) which is not updated. This library can be used for all types of accounts (starter, basic and pro).

## Installation

Place the file in the right place

1. `application/controllers/Rajaongkir.php` to `application/controllers`
2. `config/rajaongkir.php` to `config`
3. `libraries/RajaOngkir` to `libraries`
4. `libraries/rajaongkir.php` to `libraries`

## Configuration

Open "**application/config/rajaongkir.php**", enter the API key and change the account type.

## Usage

First, load the RajaOngkir library or autoload it in `config/autoload.php`.

```php
$this->load->library('rajaongkir');
```
### Make a request

```php
# Get all province
$provinces = $this->rajaongkir->province();

# Get all cities
$cities = $this->rajaongkir->city();

# Get districts based on cities
$subdistrict = $this->rajaongkir->subdistrict(151); // city_id = 151

# Get shipping costs
$cost = $this->rajaongkir->cost(501, 114, 1000, "jne");
```
### Response

The resulting response is a JSON string reply from RajaOngkir.

### Reference

[RajaOngkir Official Documentation](http://rajaongkir.com/dokumentasi)
