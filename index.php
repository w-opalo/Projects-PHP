<?php
// $fruits = ['banana', 'apples', 'lemons', 'avocados'];

// echo '<pre>';
// foreach ($fruits as $fruit) {
//     if ($fruit === 'lemons') {
//         continue; // Skip "lemons" and move to the next item
//     }
//     var_dump($fruit);
// }
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello</h1>
</body>
<script>
    <?php

    $fruits = ['banana', 'apples', 'lemons', 'avocados'];
    foreach ($fruits as $fruit) {
        if ($fruit === 'lemons') {
            continue; // Skip "lemons" and move to the next item
        }
        var_dump($fruit);
    }
    // var_dump($fruit)
    ?>
</script>

</html>