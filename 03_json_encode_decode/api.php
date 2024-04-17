<?php
/* 
$tasks = [
  [
    'text' => 'learn php',
    'done' => 'false'
  ],
  [
    'text' => 'learn mysql',
    'done' => 'false'
  ],
  [
    'text' => 'learn laravel',
    'done' => 'false'
  ]
];

$json_string = json_encode($tasks); */


if (isset($_POST['newTaskText'])) {
  // add the data to the json object
  // create the new task array
  $tasktext = $_POST['newTaskText'];
  $task = [
    'text' => $tasktext,
    'done' => false
  ];

  // read the json file
  $json_string = file_get_contents('tasks.json');
  // turn it into an assoc array
  $tasksArray = json_decode($json_string, true);

  // insert the new task at the beginning of the array
  array_unshift($tasksArray, $task);
  //var_dump($tasksArray);
  //die;

  //put the content back into the json file
  // 1. encode the plain php array into a json string
  $tasks_json = json_encode($tasksArray);
  // 2. use file put contents to put the content back into the file
  file_put_contents('tasks.json', $tasks_json);
  //die;
} else if (isset($_POST['updateTask'])) {
  // update


} else if (isset($_POST['deleteTask'])) {
  //delete
}

// Don't need to encode becaus its already a json
$json_string = file_get_contents('tasks.json');

header('Content-type: application/json');

//var_dump($json_string);
//👇 Enable this to print the json
echo $json_string;
