<?php
$data = [
  [
    '_id' => '1',
    'name' => 'mario',
    'slug' => 'http://mario',

  ],
  [
    '_id' => '2',
    'name' => 'luis',
    'slug' => 'http://luis',

  ],
  // [
  //   '_id' => '',
  //   'name' => '',
  //   'slug' => '',

  // ],
  // [
  //   '_id' => '',
  //   'name' => '',
  //   'slug' => '',

  // ],
  // [
  //   '_id' => '',
  //   'name' => '',
  //   'slug' => '',

  // ],

  ];
  //obtener todo
//  var_dump($data);

 //iterar todos 

foreach ($data as $item) {
echo $item['_id'].' <br>';
echo $item['name'].' <br>';
echo $item['slug'].' <br>';
echo '<hr>';



 }