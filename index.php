<?php require_once("calculadora.php"); ?>

<!DOCTYPE html>
  <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Calculadora - PHP/MaterializeCSS</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col s8 offset-s2">
                    <h4 class="header center">Calculadora</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row">
                                    <form method="post">
                                        <div class="input-field col s6">
                                            <input type="number" id="num1" name="n1" />
                                            <label for="num1">Operando 1</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input type="number" id="num2" name="n2" />
                                            <label for="num2">Operando 2</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button type="submit" name="op" value="soma"
                                                    class="btn col s2 offset-s1 red lighten-1"
                                            ><b>+</b></button>

                                            <button type="submit" name="op" value="subtracao"
                                                    class="btn col s2 offset-s1 blue lighten-1"
                                            ><b>-</b></button>

                                            <button type="submit" name="op" value="multiplicacao"
                                                    class="btn col s2 offset-s1 amber darken-1"
                                            ><b>&times</b></button>

                                            <button type="submit" name="op" value="divisao"
                                                    class="btn col s2 offset-s1 green darken-1"
                                            ><b>&divide</b></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-action">
                                <a href="#">Resultado: <?php echo $valor; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    </body>
  </html>

 
        