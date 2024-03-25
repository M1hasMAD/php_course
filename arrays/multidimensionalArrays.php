<?php
$persons = [ // array of arrays
    [ // first array
        'name' => 'Mikhail',
        'age' => 20,
        'height' => 189.5,
        'isMarried' => false,
        'DoIHavePet' => true,
        'Cars' => ['BMW' => 'M5F90',
            'Audi' => 'RS6C7']
    ],
    [ // second array
        'name' => 'Alex',
        'age' => 30,
        'height' => 180.2,
        'isMarried' => true,
        'DoIHavePet' => false,
        'Cars' => ['Mercedes', 'Volvo']
    ],
    [ // third array
        'name' => 'John',
        'age' => 40,
        'height' => 190.5,
        'isMarried' => true,
        'DoIHavePet' => true,
        'Cars' => ['Dodge', 'Nissan']
    ]
];

foreach ($persons as $person) { // wrong way bc will output every array
    echo $person;
}

foreach ($persons as $person) { // correct way bc 'print_r' will convert every array to string
    echo print_r($person);
}

foreach ($persons as $person) { // output only names of persons
    echo $person['name'];
}