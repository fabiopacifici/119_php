# Json encode/decode + files manipulation

From array to json

```php

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
```

encode the array to a json
`$json_string = json_encode($tasks);`
`header('Content-type: application/json');`

👇 Enable this to print the json
`echo $json_string;`

## back to php

`var_dump($json_string);`

From json to array (PHP)

```php
$array_from_json = json_decode($json_string, true);

var_dump($array_from_json);
```

## File get and put contents

- file_get_contents()
- file_put_contents()

### file put contents

```php
file_put_contents('tasks.json', $json_string);
```

file get contents

```php
$file_content = file_get_contents('tasks.json');

var_dump($file_content);
```

## Todolist recap

The application is slip in two parts:

- backend (API)
- frontend (Vue CDN)
  
The backend exposes an api endpoint as file called api.php

### define api.php

Create an array of associative array, after that we do `json_encode` to transform the plain
php array into a json string `$json_string`

```php

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

$json_string = json_encode($tasks); 

```

After the array has been changed into a json we need to add the header and echo to print
the json to out endpoint (api.php)

```php
#Inside api.php

header('Content-type: application/json');

//var_dump($json_string);
//👇 Enable this to print the json
echo $json_string;
```

Now our api.php looks like the following

```php

# api.php
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

$json_string = json_encode($tasks); 
header('Content-type: application/json');
echo $json_string;

```

now if you visit **localhost/api.php** (on windowns) or **localhost:8888/api.php** (on macos) you
should see a json output like those we used before from other services.

```json
[
//...  
  {
    "text": "learn mysql",
    "done": "false"
  },
  {
    "text": "learn laravel",
    "done": "false"
  },

]

```

In the next step we can start a building the application on the front using vue 3

### Create a Vue application

Our app vue will consume our api data and print the results onto the screen.
Create an index.php file and place inside the basic vue3 markup

```php
# index.php

<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Document</title>

  <!-- 🤓 bootstrap if you need -->

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

  <!-- 🤓 your css -->
  <link href='./assets/css/style.css' rel='stylesheet'>
</head>

<body>

  <div id='app'>

   /* Loop over the data now here */

  </div>


  <!-- 🤓 Remeber to include the CDN links for vue js and axios  👇👇👇👇 -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

  <!-- 🤓 Remeber me 👇👇👇👇 -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  
  <!-- 🤓 Remeber me 👇👇👇👇 -->
  <script src='./assets/js/app.js'></script>
</body>

</html>


```

### Create the vue instance

now create the vue instance and make our ajax call inside the `mounted`

```js
// app.js

const { createApp } = Vue
createApp({
  data() {
    return {
      tasks: [],
      base_api_url: 'api.php', // 👈 This is the file where you encoded as json
      error: '',
      
    }
  },
  mounted(){
    // use axios.get to perform a get requiest to our api.php file
    // the will respond with json that we can consume
    axios.get(this.base_api_url)
    .then((result) => {

      // log the call response
      console.log(result); 
      // save the received tasks
      this.tasks = result.data;
    }).catch((err) => {
      console.log(err.message);
      this.error = err.message
    });
  }
}).mount('#app')


```

### Print the data onto the screen

Now that we have the data we can loop over them inside our template

```php
// index.php 
 /* Loop over the data now here */
<ul class="list-group list-group-numbered">
  <li class="list-group-item" v-for="(task, index) in tasks">
    <span>
      {{ task.text }}
    </span>
  </li>
</ul>

```

## Adding a new task to our list

To add new tasks we need to:

- add input field
- perform a POST request

```php

// index.php
<div class="input-group my-3">
  <input type="text" class="form-control" placeholder="Add a new task" v-model="newTask">
  <button class="btn btn-outline-warning" type="button" @click="addTask()">Add</button>
</div>

```

In the code above you need to add two vue directives: `v-model` and `v-on`
these directives will bind the input with the instance and run on click the `addTask` method.
Now inside add task we can perform a post request

```js
// app.js
methods: {

    addTask(){
      // without data persistancy
      //this.tasks.unshift({done: false, text: this.newTask});
      const data = {
        newTaskText: this.newTask
      }
      this.newTask = '';

      axios
      .post(this.base_api_url, data, { headers: {'Content-type' : 'multipart/form-data' } })
      .then(response => {
        console.log(response); // this is the response you get from the api call to api.php
        this.tasks = response.data; // you save the entire response back to the tasks array
      })

    }
  },

```

Add the methods above inside the vue instance and in the addTask method we do the axios post call.
In the code above there are few key elements:

- the `data` constant that is used to prepare the data that we want to send with the post request
- the third parameter that is the object with the header `{ headers: {'Content-type' : 'multipart/form-data' }}`
  
### Handle the post request on the server-side

On the server side our api.php file will receive the api call from axios with the data that we prepared in the previous step - so we need to take them using the $_POST superglobal

Before we handle the POST request let's make a quick change to allow data persistancy

```php

/* 
We remove this array to allow the user to use the tasks.json file
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


/* 🤓 HERE handle the post request */


// Don't need to encode becaus its already a json
$json_string = file_get_contents('tasks.json');

header('Content-type: application/json');

//var_dump($json_string);
//👇 Enable this to print the json
echo $json_string;

```

In the code above we comment out the array and instad we use file_get_contents() to read
a json file that is then used as is and echoed out.

Now we handle the post request

```php

// api.php
//..


/* 🤓 HERE handle the post request */

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
}

//...
```

Now if everything works you should see the json file with an additional entry.
