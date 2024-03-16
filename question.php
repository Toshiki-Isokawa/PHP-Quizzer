<?php include 'database.php'; ?>
<?php 
    //Set question number 
    $number = (int) $_GET['n'];

    /*
    *  Get Question
    */
    $query = "SELECT * FROM questions 
                WHERE question_number = $number"; 
    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();

    /*
    *  Get Choices
    */
    $query = "SELECT * FROM choices WHERE question_number = $number"; 
    //Get result
    $choice = $mysqli->query($query) or die($mysqli->error.__LINE__);
    

?>
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
                <div class="current">Question 1 of 5 </div>
                <p class="question">
                    <?php echo $question['text']; ?>
                </p>
                <form method="post" action="process.php">
                    <ul class="choices">
                        <?php while($row = $choice->fetch_assoc()) : ?>
                            <li><input name="choices" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2024, PHP QUizzer
            </div>
        </footer>
    </body>
</html>