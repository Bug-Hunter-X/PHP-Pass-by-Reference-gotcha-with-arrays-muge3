```php
function doubleArray(array $arr): array {
    foreach ($arr as &$value) {
        $value *= 2;
    }
    return $arr;
}

$numbers = [1, 2, 3, 4, 5];
doubleArray($numbers);
print_r($numbers);

$numbers2 = [1, 2, 3, 4, 5];
$result = doubleArray($numbers2);
print_r($result); 
print_r($numbers2);
```