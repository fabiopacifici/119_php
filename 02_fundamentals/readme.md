# Fundamentals PHP

## Array

### numeric Array

create a numeric array

```php
$list = ['element', 'element2'];
```

print the array `var_dump($list);`

read a value from the array
`var_dump($list[0]);`

add a new value

```php
$list[] = 'element 3';
var_dump($list);
```

or use a method

`array_push($list, 'element 4');`

update an existing value

```php
$list[1] = 'Element 2';
var_dump($list, 'updated');
```

### Associative array

create an assoc array

```php
$game = [
  'name' => 'Mario',
  'game' => 'Mario Bross',
  'year' => '1985'
];

```

print the array `var_dump($game);`

read a value from the array `var_dump($game['game']);`

add a new value

```php
$game['console'] = 'Nintendo';
var_dump($game);
```

update

```php
$game['game'] = "Mario Bros";
var_dump($game);
```

### Complex data types - multidimentional array

```php
$team = [
  // primo livello: array "contenitore" con indici numerici

  [
    // secondi livelli: array associtativi
    "name" => "Fabio",
    "lastname" => "Forghieri",
    "role" => "Co-Founder",
  ],
  [
    "name" => "Michele",
    "lastname" => "Papagni",
    "role" => "Head of Teaching",
  ],

];

//$team[] = 'ciao';
var_dump($team);

```

read the firtst element
read the lastname key from the first element

```php
var_dump($team[1]['lastname']);
```

## Loop Foreach

```php
$products = [
  'biscuits',
  'cornflakes',
  'milk'
];

/*for each inside a numeric array*/
foreach ($products as $key => $product) {
  echo $key . ': ' . $product . '<br>';
}

/*for each with assoc array*/

foreach ($team[0] as $key => $member) {
  var_dump($member, $key);
}
```

### Example

```php
$animals = [
  "mammals" => ["cow", "pig", "horse", "dog"],
  "birds" => ["duck", "chicken"]
];

foreach ($animals as $animalClass) {
  foreach ($animalClass as $animal) {
    echo $animal;
  }
}
```
