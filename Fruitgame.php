<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
    }

    #game-container {
        width: 300px;
        margin: 0 auto;
    }

    .fruit-card {
        border: 2px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .selected {
        background-color: #ccc;
    }

    .correct {
        background-color: #98FB98;
    }

    .incorrect {
        background-color: #FF7F7F;
    }
    </style>
</head>

<body>
    <h1>Fruit Season Game</h1>

    <div id="game-container">
        <div id="question" class="fruit-card"></div>
        <div id="options"></div>
        <button id="submit">Submit</button>
    </div>

    <script>
    // Define the fruit and season data
    var fruitData = [{
            fruit: 'Apple',
            season: 'Fall'
        },
        {
            fruit: 'Watermelon',
            season: 'Summer'
        },
        {
            fruit: 'Strawberry',
            season: 'Spring'
        },
        {
            fruit: 'Orange',
            season: 'Winter'
        }
    ];

    var currentQuestion = 0;
    var score = 0;

    // Function to load the next question
    function loadQuestion() {
        var questionElement = document.getElementById('question');
        var optionsElement = document.getElementById('options');
        var submitButton = document.getElementById('submit');

        // Clear previous question and options
        questionElement.innerHTML = '';
        optionsElement.innerHTML = '';

        if (currentQuestion >= fruitData.length) {
            // Game over, show the final score
            questionElement.innerHTML = 'Game Over! Final Score: ' + score;
            submitButton.disabled = true;
        } else {
            // Display the current question and options
            questionElement.innerHTML = 'Which season is best for ' + fruitData[currentQuestion].fruit + '?';

            // Shuffle the options randomly
            var shuffledOptions = shuffle([{
                    season: 'Spring',
                    correct: false
                },
                {
                    season: 'Summer',
                    correct: false
                },
                {
                    season: 'Fall',
                    correct: false
                },
                {
                    season: 'Winter',
                    correct: false
                }
            ]);

            // Add the options to the options container
            for (var i = 0; i < shuffledOptions.length; i++) {
                var option = document.createElement('div');
                option.className = 'fruit-card';
                option.innerHTML = shuffledOptions[i].season;
                option.dataset.correct = shuffledOptions[i].correct;

                option.addEventListener('click', function() {
                    // Remove selected class from all options
                    var options = document.getElementsByClassName('fruit-card');
                    for (var j = 0; j < options.length; j++) {
                        options[j].classList.remove('selected');
                    }

                    // Add selected class to the clicked option
                    this.classList.add('selected');
                });

                optionsElement.appendChild(option);
            }

            // Enable or disable the submit button based on whether an option is selected
            submitButton.disabled = true;
            optionsElement.addEventListener('click', function() {
                submitButton.disabled = false;
            });
        }
    }

    // Function to shuffle an array
    function shuffle(array) {
        var currentIndex = array.length;
        var temporaryValue, randomIndex;

        while (currentIndex !== 0) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }

    // Function to handle the submit button click
    function submitAnswer() {
        var selectedOption = document.querySelector('.selected');

        if (selectedOption) {
            if (selectedOption.dataset.correct === 'true') {
                selectedOption.classList.add('correct');
                score++;
            } else {
                selectedOption.classList.add('incorrect');
            }
        }

        currentQuestion++;
        setTimeout(loadQuestion, 1000);
    }


    // Load the initial question
    loadQuestion();

    // Attach event listener to the submit button
    var submitButton = document.getElementById('submit');
    submitButton.addEventListener('click', submitAnswer);
    </script>
</body>

</html>