<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use iCount\iCount;
use iCount\iCount\Models\Shared;

$sdk = iCount\ICount::builder()->build();

try {
    $request = new Shared\Pet();
    $request->id = 596804;
    $request->name = 'string';
    $request->tag = 'string';

    $response = $sdk->pets->createPets($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->