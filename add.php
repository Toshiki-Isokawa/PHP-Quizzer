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
                <h2>Add a Question</h2>
                <form method="post" action="add.php">
                    <p>
                        <label style="display: inline-block; width: 180px;"> Question Number: </label>
                        <input type="number" name="question_number" style=" width: 50px;
                                                                            padding: 4px;
                                                                            border-radius: 5px;
                                                                            border: 1px #ccc solid;"/>
                    </p>
                    <p>
                        <label style="display: inline-block; width: 180px;">Question Text</label>
                        <input type="text" name="question_text" style="width: 97%;
                                                                        padding: 4px;
                                                                        border-radius: 5px;
                                                                        border: 1px #ccc solid;"/>
                    </p>
                    <p>
                        <label style="display: inline-block; width: 180px;">Choice #1</label>
                        <input type="text" name="choice1" style="width: 97%;
                                                                        padding: 4px;
                                                                        border-radius: 5px;
                                                                        border: 1px #ccc solid;"/>
                    </p>
                    <p>
                        <label style="display: inline-block; width: 180px;">Choice #2</label>
                        <input type="text" name="choice2"style="width: 97%;
                                                                        padding: 4px;
                                                                        border-radius: 5px;
                                                                        border: 1px #ccc solid;" />
                    </p>
                    <p>
                        <label style="display: inline-block; width: 180px;">Choice #3</label>
                        <input type="text" name="choice3" style="width: 97%;
                                                                        padding: 4px;
                                                                        border-radius: 5px;
                                                                        border: 1px #ccc solid;"/>
                    </p>
                    <p>
                        <label style="display: inline-block; width: 180px;">Choice #4</label>
                        <input type="text" name="choice4" style="width: 97%;
                                                                        padding: 4px;
                                                                        border-radius: 5px;
                                                                        border: 1px #ccc solid;"/>
                    </p>
                    <p>
                        <label style="display: inline-block; width: 180px;">Choice #5</label>
                        <input type="text" name="choice5" style="width: 97%;
                                                                        padding: 4px;
                                                                        border-radius: 5px;
                                                                        border: 1px #ccc solid;"/>
                    </p>
                    <p>
                        <label style="display: inline-block; width: 180px;">Correct Choice Number: </label>
                        <input type="number" name="correct_choice" style=" width: 50px;
                                                                            padding: 4px;
                                                                            border-radius: 5px;
                                                                            border: 1px #ccc solid;"/>
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Submit" />
                    </p>
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