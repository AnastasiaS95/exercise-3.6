<?php
// Задание 1
$first = "Привет, ";
$second = "мир!";
$greeting = $first . $second; // Привет, мир!;

// Задание 2
$str = "Привет, мир!";
$upperStr = strtoupper($str); // ПРИВЕТ, МИР!
// Задание 3
$str1 = "apple";
$str2 = "apple";
$str3 = "Apple";
// Равенство
if ($str1 == $str2) {
}
// Задание 4
$text = "яблоко, банан, груша";
$search = ["яблоко", "груша"];
$replace = ["апельсин", "ананас"];
$newText = str_replace($search, $replace, $text); // апельсин, банан, ананас
// Задание 5
$text = "кот, кот, кот!";
$count = 0;
$newText = str_replace("кот", "собака", $text, $count); // собака, собака, собака!
echo $count; // 3 замены
// Задание 6
$name = "Алексей";
$age = 30;
$formattedString = sprintf("Меня зовут %s, мне %d лет.", $name, $age);
echo $formattedString; // Меня зовут Алексей, мне 30 лет.
// Задание 7
wordwrap(
string $string, // Исходная строка
int $width = 75, // Максимальная длина строки (по умолчанию — 75)
string $break = "\n", // Символ разрыва 
bool $cut = false // Обрезать слова, если они длиннее указанной длины
(по умолчанию — false)
): string
// Задание 8
echo nl2br("foo — это вам не\n bar");
