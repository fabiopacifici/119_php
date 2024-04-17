<?php

/* 
Descrizione
Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.

Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.

Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).

Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).

Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus
Mostrare lo stato del task → se completato, barrare il testo
Permettere di segnare un task come completato facendo click sul testo
Permettere il toggle del task (completato/non completato)
Abilitare l’eliminazione di un task

*/


?>
<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Document</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
  <link href='./assets/css/style.css' rel='stylesheet'>
</head>

<body>
  <div id='app'>

    <div class="container">
      <h1 class="display-1 py-3 text-center text-white">Todo list</h1>
      <div class="col-4 mx-auto">
        <div class="card">
          <ul class="list-group list-group-numbered">
            <li class="list-group-item" v-for="(task, index) in tasks">
              <span @click="toggleTask(index)" :class="{ 'text-decoration-line-through': task.done }">
                {{ task.text }}
              </span>
            </li>
          </ul>
        </div>

        <div class="input-group my-3">
          <input type="text" class="form-control" placeholder="Add a new task" v-model="newTask">
          <button class="btn btn-outline-warning" type="button" @click="addTask()">Add</button>
        </div>

      </div>
    </div>

  </div>


  <!-- CDN -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

  <!-- Development only cdn, disable in production -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src='./assets/js/app.js'></script>
</body>

</html>