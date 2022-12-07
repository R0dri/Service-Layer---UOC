
# Crear Nuevo Request 1

## Structure

`CrearNuevoRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardCode` | `string` | Required | - | getCardCode(): string | setCardCode(string cardCode): void |
| `documentLines` | [`DocumentLine[]`](../../doc/models/document-line.md) | Required | - | getDocumentLines(): array | setDocumentLines(array documentLines): void |

## Example (as JSON)

```json
{
  "CardCode": "c001",
  "DocumentLines": [
    {
      "ItemCode": "i001",
      "Quantity": "100",
      "TaxCode": "T1",
      "UnitPrice": "30"
    }
  ]
}
```

