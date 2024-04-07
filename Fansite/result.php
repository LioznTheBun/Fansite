<!DOCTYPE html>
<html lang="fr">

<head>
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/arcane-logo-a-1-ff3091e021ded0fcd5528dd5b58683db.png" />

    <title>Fansite sur Arcane</title>
    
</head>

<body>
    <header class="mb-5">
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/arcane-logo-a-1-ff3091e021ded0fcd5528dd5b58683db.png" width="30" height="30" alt="">Quiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="synopsis.html">Synopsis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="personnages.html">Les personnages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="univers.html">L'univers</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <article class="bg-img img-fluid row gx-0" style="background-image:url('img/51b1od7l0zy71.png') ; background-size: cover; width:100% ;height: 100vh; margin:0px; padding: 0px;">
            <section>
                <div id="page-wrap">

                    <h1> </h1>

                    <?php
                    if (empty($_POST['question-1-answers']) || empty($_POST['question-2-answers']) || empty($_POST['question-3-answers']) || empty($_POST['question-4-answers']) || empty($_POST['question-5-answers'])) {
                        echo 'Essayez de donner une réponse à toute les questions!';
                    } else {
                        $answer1 = $_POST['question-1-answers'];
                        $answer2 = $_POST['question-2-answers'];
                        $answer3 = $_POST['question-3-answers'];
                        $answer4 = $_POST['question-4-answers'];
                        $answer5 = $_POST['question-5-answers'];

                        $totalCorrect = 0;

                        if ($answer1 == "C") {
                            $totalCorrect++;
                        }
                        if ($answer2 == "D") {
                            $totalCorrect++;
                        }
                        if ($answer3 == "A") {
                            $totalCorrect++;
                        }
                        if ($answer4 == "B") {
                            $totalCorrect++;
                        }
                        if ($answer5 == "D") {
                            $totalCorrect++;
                        }

                        if ($totalCorrect < 3) {
                            echo "<div id='results'>$totalCorrect / 5   Réessayez</div>";
                        }
                        if ($totalCorrect >= 3 && $totalCorrect != 5) {
                            echo "<div id='results'>$totalCorrect / 5   Bien joué !</div>";
                        }
                        if ($totalCorrect == 5) {
                            echo "<div id='results'>$totalCorrect / 5   Vous êtes incollable sur la séries Arcane !</div>";
                        }
                    }
                    ?>
                    <br>
                    <button type="button" class="btn btn-dark"><a href="quizz.html" class="text-muted nav-link">Réessayer ?</a></button>

                </div>
            </section>
        </article>
    </main>
    <footer class="">
        <div class="container-fluid bg-dark pt-5">

            <ul class="nav bg-dark justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Accueil</a></li>
                <li class="nav-item"><a href="synopsis.html" class="nav-link px-2 text-muted">Synopsis</a></li>
                <li class="nav-item"><a href="personnages.html" class="nav-link px-2 text-muted">Les personnages</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">L'univers</a></li>
                <li class="nav-item"><a href="quizz.html" class="nav-link px-2 text-muted">Quizz</a></li>
            </ul>

            <p class="text-light text-center">© 2021 Riot Games, Inc. ARCANE LEAGUE OF LEGENDS et tous logos associés
                sont des marques, des marques de service et/ou des marques déposées de Riot Games, Inc.</p>
            <br>
        </div>
    </footer>

</body>

</html>