<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <title>Word-Generator-Test</title>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        body {
            background: #fff;
        }
    </style>
</head>

<body>
    <br />
    <main>
        <center>
            <br />
            <h5 style="opacity:0.8">Word-Generator-Test</h5>
            <br />
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                    <form class="col s12" method="post">
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='text' id='text' />
                                <label for='text'>Text</label>
                            </div>
                        </div>
                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='download' class='col s12 btn btn-large'>download</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </center>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["text"])) {

        $argv = ['text' => $_POST["text"]];
        include('vendor/kxl/word-generator/index.php');
    }
}
?>