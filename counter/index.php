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

    <!-- second element -->
    <div class="second_counter" style="margin-bottom: 2rem;">
        <h2>Second Counter</h2>
        <span class="value">0</span>
        <div class="btn-container">
            <button class="btn increase">Increase</button>
            <button class="btn reset">Reset</button>
            <button class="btn decrease">Decrease</button>
        </div>
    </div>
</body>
<script>
    function getElement(selection, value) {
        let element = document.querySelector(selection);
        if (element) {
            return element;
        }
        throw new Error(
            `the "${element}" you have selected does not exists`
        );
        // console.log(element);
    };

    class Counter {
        // constrator
        constructor(element, value) {
            this.element = element;
            this.value = value;
            this.increaseBtn = element.querySelector('.increase');
            this.resetBtn = element.querySelector(".reset");
            this.decreaseBtn = element.querySelector(".decrease");
            // console.log(this.increaseBtn);
            this.valueBtn = element.querySelector('.value')
            this.valueBtn.textContent = this.value;

            //bind the btn
            this.increase = this.increase.bind(this);
            this.decrease = this.decrease.bind(this);
            this.reset = this.reset.bind(this);

            //adding the event listners
            this.increaseBtn.addEventListener('click', this.increase)
            this.decreaseBtn.addEventListener('click', this.decrease)
            this.resetBtn.addEventListener('click', this.reset)
        }
        increase() {
            this.value++;
            this.valueBtn.textContent = this.value;
        }
        decrease() {
            this.value--;
            this.valueBtn.textContent = this.value;
        }
        reset() {
            this.value = 0;
            this.valueBtn.textContent = this.value;
        }
    }

    const firstCounter = new Counter(getElement(".first_counter"), 100)
    const secondCounter = new Counter(getElement(".second_counter"), 500)
    // function Counter(element, value) {
    //     this.element = element;
    //     this.value = value;
    //     this.increaseBtn = element.querySelector('.increase');
    //     this.resetBtn = element.querySelector(".reset");
    //     this.decreaseBtn = element.querySelector(".decrease");
    //     // console.log(this.increaseBtn);
    //     this.valueBtn = element.querySelector('.value')
    //     this.valueBtn.textContent = this.value;

    //     //bind the btn
    //     this.increase = this.increase.bind(this);
    //     this.decrease = this.decrease.bind(this);
    //     this.reset = this.reset.bind(this);

    //     //adding the event listners
    //     this.increaseBtn.addEventListener('click', this.increase)
    //     this.decreaseBtn.addEventListener('click', this.decrease)
    //     this.resetBtn.addEventListener('click', this.reset)
    // }

    // Counter.prototype.increase = function() {
    //     // console.log(this);
    //     this.value++;
    //     this.valueBtn.textContent = this.value;
    // }
    // Counter.prototype.decrease = function() {
    //     this.value--;
    //     this.valueBtn.textContent = this.value;
    // }
    // Counter.prototype.reset = function() {
    //     this.value = 0;
    //     this.valueBtn.textContent = this.value;
    // }


    // console.log(firstCounter);
</script>

</html>