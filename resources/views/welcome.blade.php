<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    {{--Arrays--}}
    <?php
    $names = ['john', 'jeff', 'thomas'];

    $names[] = 'Alice';

//    echo '<pre>';
//      var_dump($names);
//    echo '<pre>';
//    die($names);
//    die(var_dump($names))

    ?>
    <!--    Associate arrays -->
    <?php
            $person = [
                    'age' => 35,
                    'name' => 'Joseph',
                    'status' => 'Married',
                    'gender' => 'Man'
            ];

            $person['car_type'] = 'Jeep' // Add to associate array
    ?>
    <body>
        <ul>
            <?php foreach($person as $details => $val) : ?>
                 <li> <?=$details; ?> : <strong><?= $val; ?> </strong></li>
            <?php endforeach; ?>



            <?php
                  foreach ($names as $name) {
                     echo "<li>$name</li>";
                   }
              ?>
        </ul>
    </body>
</html>

