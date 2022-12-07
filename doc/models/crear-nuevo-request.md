
# Crear Nuevo Request

## Structure

`CrearNuevoRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardCode` | `string` | Required | - | getCardCode(): string | setCardCode(string cardCode): void |
| `cardName` | `string` | Required | - | getCardName(): string | setCardName(string cardName): void |
| `cardType` | `string` | Required | - | getCardType(): string | setCardType(string cardType): void |
| `federalTaxID` | `string` | Required | - | getFederalTaxID(): string | setFederalTaxID(string federalTaxID): void |

## Example (as JSON)

```json
{
  "CardCode": "C0001",
  "CardName": "Cliente desdeAPI",
  "CardType": "cCustomer",
  "FederalTaxID": "NO TIENE RNC"
}
```

