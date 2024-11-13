<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>

<body>
    <!-- first Element -->
    <div class="first_counter" style="margin-bottom: 2rem;">
        <h2>First Counter</h2>
        <span class="value">0</span>
        <div class="btn-container">
            <button class="btn increase">Increase</button>
            <button class="btn reset">Reset</button>
            <button class="btn decrease">Decrease</button>
        </div>
    </div>
</body>
<script>
    const value = document.querySelector('.value');
    const btns = document.querySelectorAll('.btn');
    let vaalue = 0;
    btns.forEach(function(btn) {
        // console.log(btn);

        btn.addEventListener('click', function(e) {
            let style = e.currentTarget.classList;
            // console.log(style);
            if (style.contains('increase')) {
                vaalue++
            } else if (style.contains('decrease')) {
                vaalue--
            } else {

                vaalue = 0;
            }

            if (vaalue > 0) {
                value.style.color = 'green';
            } else if (vaalue < 0) {
                value.style.color = 'red';
            } else {
                value.style.color = 'black';
            }

            value.textContent = vaalue;



        })
    })
</script>

</html>