# Pets


### Available Operations

* [createPets](#createpets) - Create a pet
* [listPets](#listpets) - List all pets
* [showPetById](#showpetbyid) - Info for a specific pet

## createPets

Create a pet

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \iCount\iCount;
use \iCount\iCount\Models\Shared;

$sdk = iCount\ICount::builder()->build();

try {
        $request = new Shared\Pet();
    $request->id = 596804;
    $request->name = 'string';
    $request->tag = 'string';;

    $response = $sdk->pets->createPets($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `$request`                                                     | [\iCount\iCount\Models\Shared\Pet](../../Models/Shared/Pet.md) | :heavy_check_mark:                                             | The request object to use for the request.                     |


### Response

**[?\iCount\iCount\Models\Operations\CreatePetsResponse](../../Models/Operations/CreatePetsResponse.md)**


## listPets

List all pets

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \iCount\iCount;
use \iCount\iCount\Models\Operations;

$sdk = iCount\ICount::builder()->build();

try {
        $request = new Operations\ListPetsRequest();
    $request->limit = 21453;;

    $response = $sdk->pets->listPets($request);

    if ($response->pets !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\iCount\iCount\Models\Operations\ListPetsRequest](../../Models/Operations/ListPetsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\iCount\iCount\Models\Operations\ListPetsResponse](../../Models/Operations/ListPetsResponse.md)**


## showPetById

Info for a specific pet

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \iCount\iCount;
use \iCount\iCount\Models\Operations;

$sdk = iCount\ICount::builder()->build();

try {
        $request = new Operations\ShowPetByIdRequest();
    $request->petId = 'string';;

    $response = $sdk->pets->showPetById($request);

    if ($response->pet !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\iCount\iCount\Models\Operations\ShowPetByIdRequest](../../Models/Operations/ShowPetByIdRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\iCount\iCount\Models\Operations\ShowPetByIdResponse](../../Models/Operations/ShowPetByIdResponse.md)**

