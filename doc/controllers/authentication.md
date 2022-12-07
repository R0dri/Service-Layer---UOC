# Authentication

```php
$authenticationController = $client->getAuthenticationController();
```

## Class Name

`AuthenticationController`

## Methods

* [Login - UOC](../../doc/controllers/authentication.md#login---uoc)
* [Logout - UOC](../../doc/controllers/authentication.md#logout---uoc)


# Login - UOC

UOC Auth Params:
{
"CompanyDB": "UOC_TEST30V2",
"UserName": "integrador",
"Password": "B1AdminUOC"
}

Retorna 2 cookies (RouteID; B1SESSION) que deben ser almacenadas y añadidas en el {header} de todas las consultas siguientes.

```php
function loginUOC(LoginUOCRequest $body): LoginUOCRequest
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`LoginUOCRequest`](../../doc/models/login-uoc-request.md) | Body, Required | - |

## Response Type

[`LoginUOCRequest`](../../doc/models/login-uoc-request.md)

## Example Usage

```php
$body_companyDB = 'UOC_TEST30V2';
$body_userName = 'integrador';
$body_password = 'B1AdminUOC';
$body = new Models\LoginUOCRequest(
    $body_companyDB,
    $body_userName,
    $body_password
);

$result = $authenticationController->loginUOC($body);
```


# Logout - UOC

```php
function logoutUOC(): void
```

## Response Type

`void`

## Example Usage

```php
$authenticationController->logoutUOC();
```

