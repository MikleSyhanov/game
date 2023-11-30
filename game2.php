<?php
// Генерируем случайное число от 1 до 100
$secretNumber = rand(1, 100);

// Функция для вывода приветствия и правил игры
function displayWelcome() {
    echo "Добро пожаловать в игру 'Угадай число'!\n";
    echo "Попробуйте угадать число от 1 до 100.\n";
}

// Основной цикл игры
function playGame($secretNumber) {
    $attempts = 0;

    while (true) {
        echo "Введите ваш вариант: ";
        $guess = (int) fgets(STDIN);

        $attempts++;

        if ($guess === $secretNumber) {
            echo "Поздравляю! Вы угадали число $secretNumber за $attempts попыток.\n";
            break;
        } elseif ($guess < $secretNumber) {
            echo "Больше. Попробуйте еще раз.\n";
        } else {
            echo "Меньше. Попробуйте еще раз.\n";
        }
    }
}

// Запускаем игру
displayWelcome();
playGame($secretNumber);
