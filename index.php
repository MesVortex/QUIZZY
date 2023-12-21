<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>QUIZZY</title>
</head>
<body>
  <header class="navbar bg-body-tertiary shadow border-bottom">
    <div class="mx-auto | logo-box">
      <a class="navbar-brand" href="#">
        <img src="./images/Quizzy_Logo.png" class="logo" alt="">
      </a>
    </div>
  </header>
  <section>
    <h1 class="text-center mt-4">WELCOME TO <span class="text-primary">QUIZZY</span></h1>
    <p class="text-center">Ready To <span class="text-primary">Test</span> Your Knowledge?</p>
    <form class="flex-column w-50 mx-auto mt-5" action="">
      <div class="form-floating mb-3">
        <input type="text" name="Pseudonyme" class="form-control" id="floatingInput" placeholder="">
        <label for="floatingInput">Enter Your NickName</label>
      </div>
      <div class="text-end">
        <button class="btn btn-primary px-5">Play!</button>
      </div>
    </form>
  </section>
  <div class="my-5">
    <p class="text-center text-danger fw-bold">Before You Start, You Must know:</p>
  </div>
  <section class="mt-5 d-flex justify-content-between flex-wrap gap-5">
    <div class="accordion w-25 mx-5" id="Rule1">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Rule #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#Rule1">
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion w-25 mx-5" id="Rule2">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
            Rule #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#Rule2">
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion w-25 mx-5" id="Rule3">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
            Rule #3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#Rule3">
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion w-25 mx-5" id="Rule4">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
            Rule #4
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#Rule4">
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>