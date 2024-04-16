<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex Badwords</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body>


  <main>
    <div class="container">
      <h1>Badwords filter</h1>


      <form action="server.php" method="post">

        <div class="mb-3">
          <label for="word" class="form-label">Word</label>
          <input type="text" class="form-control" name="word" id="word" aria-describedby="wordHelper" placeholder="word to censor" />
          <small id="wordHelper" class="form-text text-muted">Type a wort censor here</small>
        </div>

        <div class="mb-3">
          <label for="sentence" class="form-label">Sentence</label>
          <input type="text" class="form-control" name="sentence" id="sentence" aria-describedby="sentenceHelper" placeholder="word to censor" />
          <small id="sentenceHelper" class="form-text text-muted">Type a sentence to censor</small>
        </div>


        <button type="submit" class="btn btn-primary">
          Submit
        </button>



      </form>


    </div>
  </main>



</body>

</html>