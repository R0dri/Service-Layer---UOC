# Business Partners

```php
$businessPartnersController = $client->getBusinessPartnersController();
```

## Class Name

`BusinessPartnersController`

## Methods

* [Listar Todos](../../doc/controllers/business-partners.md#listar-todos)
* [Ver Business Partner](../../doc/controllers/business-partners.md#ver-business-partner)
* [Crear Nuevo](../../doc/controllers/business-partners.md#crear-nuevo)
* [Actualizar](../../doc/controllers/business-partners.md#actualizar)
* [New Request](../../doc/controllers/business-partners.md#new-request)


# Listar Todos

```php
function listarTodos(): void
```

## Response Type

`void`

## Example Usage

```php
$businessPartnersController->listarTodos();
```


# Ver Business Partner

```php
function verBusinessPartner(string $select): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `select` | `string` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$select = 'CardCode,CardName,CardType';

$businessPartnersController->verBusinessPartner($select);
```


# Crear Nuevo

```php
function crearNuevo(CrearNuevoRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CrearNuevoRequest`](../../doc/models/crear-nuevo-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_cardCode = 'C0001';
$body_cardName = 'Cliente desdeAPI';
$body_cardType = 'cCustomer';
$body_federalTaxID = 'NO TIENE RNC';
$body = new Models\CrearNuevoRequest(
    $body_cardCode,
    $body_cardName,
    $body_cardType,
    $body_federalTaxID
);

$businessPartnersController->crearNuevo($body);
```


# Actualizar

```php
function actualizar(ActualizarRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ActualizarRequest`](../../doc/models/actualizar-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_cardName = 'Updated customer name';
$body = new Models\ActualizarRequest(
    $body_cardName
);

$businessPartnersController->actualizar($body);
```


# New Request

```php
function newRequest(): void
```

## Response Type

`void`

## Example Usage

```php
$businessPartnersController->newRequest();
```

