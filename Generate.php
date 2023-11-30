<?php
// Generate a random number between 1 and 100
$secretNumber = rand(1, 100);

// Function to display a welcome message and game rules
function displayWelcome() {
    echo "Welcome to the 'Guess the Number' game!\n";
    echo "Try to guess the number between 1 and 100.\n";
}

// Main game loop
function playGame($secretNumber) {
    $attempts = 0;

    while (true) {
        echo "Enter your guess: ";
        $guess = (int) fgets(STDIN);

        $attempts++;

        if ($guess === $secretNumber) {
            echo "Congratulations! You guessed the number $secretNumber in $attempts attempts.\n";
            break;
        } elseif ($guess < $secretNumber) {
            echo "Higher. Try again.\n";
        } else {
            echo "Lower. Try again.\n";
        }
    }
}

// Start the game
displayWelcome();
playGame($secretNumber);
