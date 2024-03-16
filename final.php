<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP Quizzer</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PHP Quizzer</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2> You are done! </h2>
                <p>Congrats! You have completed the test </P>
                <?php 
                if (isset($_GET['score'])) {
                    $final_score = $_GET['score'];

                    echo "<p>Final Score: $final_score</p>";
                }
                ?>
                
                <a href="question.php?n=1"class="start"> Take Again </a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2024, PHP QUizzer
            </div>
        </footer>
    </body>
</html>