
# Login UOC Request

## Structure

`LoginUOCRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `companyDB` | `string` | Required | **Default**: `'UOC_TEST30V2'` | getCompanyDB(): string | setCompanyDB(string companyDB): void |
| `userName` | `string` | Required | **Default**: `'integrador'` | getUserName(): string | setUserName(string userName): void |
| `password` | `string` | Required | **Default**: `'B1AdminUOC'` | getPassword(): string | setPassword(string password): void |

## Example (as JSON)

```json
{
  "CompanyDB": "UOC_TEST30V2",
  "UserName": "integrador",
  "Password": "B1AdminUOC"
}
```

