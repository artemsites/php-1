<?php
////////////////////////////////////////////////////////////////////////////////
echo "<pre><hr>
    3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
    Обязательно использовать оператор return.

    4. Реализовать функцию с тремя параметрами: function mathOperation(\$arg1, \$arg2, \$operation), 
    где \$arg1, \$arg2 – значения аргументов, \$operation – строка с названием операции. 
    В зависимости от переданного значения операции выполнить одну из арифметических операций 
    (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
<br>";
////////////////////////////////////////////////////////////////////////////////
function arifmetica($a, $b, $operator) {
    switch ($operator) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            return $a / $b;
        default:
            return "DEFAULT SWITCH CASE VALUE";
    }
}
echo arifmetica(12, -5, "/");
////////////////////////////////////////////////////////////////////////////////
echo "</pre><hr>";
////////////////////////////////////////////////////////////////////////////////
// 5 задание выполнено в предыдущем уроке...