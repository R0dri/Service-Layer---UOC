# Quotations

```php
$quotationsController = $client->getQuotationsController();
```

## Class Name

`QuotationsController`

## Methods

* [Listar Todos](../../doc/controllers/quotations.md#listar-todos)
* [Ver Cotización](../../doc/controllers/quotations.md#ver-cotización)
* [Crear Nuevo](../../doc/controllers/quotations.md#crear-nuevo)
* [Actualizar](../../doc/controllers/quotations.md#actualizar)
* [Cerrar](../../doc/controllers/quotations.md#cerrar)
* [Cancelar](../../doc/controllers/quotations.md#cancelar)
* [Reabrir](../../doc/controllers/quotations.md#reabrir)
* [Generar Documento De Cancelación](../../doc/controllers/quotations.md#generar-documento-de-cancelación)


# Listar Todos

```php
function listarTodos(): void
```

## Response Type

`void`

## Example Usage

```php
$quotationsController->listarTodos();
```


# Ver Cotización

```php
function verCotizaciN(): void
```

## Response Type

`void`

## Example Usage

```php
$quotationsController->verCotizaciN();
```


# Crear Nuevo

```php
function crearNuevo(CrearNuevoRequest1 $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CrearNuevoRequest1`](../../doc/models/crear-nuevo-request-1.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_cardCode = 'c001';
$body_documentLines = [];

$body_documentLines_0_itemCode = 'i001';
$body_documentLines_0_quantity = '100';
$body_documentLines_0_taxCode = 'T1';
$body_documentLines_0_unitPrice = '30';
$body_documentLines[0] = new Models\DocumentLine(
    $body_documentLines_0_itemCode,
    $body_documentLines_0_quantity,
    $body_documentLines_0_taxCode,
    $body_documentLines_0_unitPrice
);

$body = new Models\CrearNuevoRequest1(
    $body_cardCode,
    $body_documentLines
);

$quotationsController->crearNuevo($body);
```


# Actualizar

```php
function actualizar(ActualizarRequest1 $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ActualizarRequest1`](../../doc/models/actualizar-request-1.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_comments = 'new comments - modified by Service Layer';
$body = new Models\ActualizarRequest1(
    $body_comments
);

$quotationsController->actualizar($body);
```


# Cerrar

```php
function cerrar(): void
```

## Response Type

`void`

## Example Usage

```php
$quotationsController->cerrar();
```


# Cancelar

```php
function cancelar(): void
```

## Response Type

`void`

## Example Usage

```php
$quotationsController->cancelar();
```


# Reabrir

```php
function reabrir(): void
```

## Response Type

`void`

## Example Usage

```php
$quotationsController->reabrir();
```


# Generar Documento De Cancelación

```php
function generarDocumentoDeCancelaciN(): void
```

## Response Type

`void`

## Example Usage

```php
$quotationsController->generarDocumentoDeCancelaciN();
```

