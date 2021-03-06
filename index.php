<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функції</title>
</head>
<body>
    <?php
    
// Даны переменные $a = 10 и $b = 3. Найдите остаток от деления $a на $b.

$a = 10;
$b = 3;
echo $a % $b .'</br>';

/* Даны переменные $a и $b. Проверьте, что $a делится без остатка на $b. Если это так — выведите 'Делится' и результат деления, иначе
выведите 'Делится с остатком' и остаток от деления.*/

$a = 2;
$b = 3;
if($a % $b == 0 && $b !=0){
	echo "Ділиться!";
}else{
	echo "Не ділиться!" . '</br>';
}

// Возведите 2 в 10 степень. Результат запишите в переменную $st.
$st = pow(2,10);
echo $st . '</br>';

// Найдите квадратный корень из 245.

echo sqrt(245) . '</br>';

/* Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. Найдите квадратный
корень из суммы квадратов его элементов. Для решения
воспользуйтесь циклом foreach.*/

$arr = array(4, 2, 5, 19, 13, 0, 10);
$result = 0;
foreach($arr as $a){
	$result += pow($a, 2);
}
echo $result.'</br>';
echo sqrt($result).'</br>';

/* Найдите квадратный корень из 379. Результат округлите до целых, до
десятых, до сотых.*/
$a = sqrt(379);
echo 'Заокруглення числа до цілого: '.round($a).'</br>'; 
echo 'Заокруглення числа до десятих: '.round($a,1).'</br>'; 
echo 'Заокруглення числа до сотих: '.round($a,2).'</br>'; 

/*Найдите квадратный корень из 587. Округлите результат в большую
и меньшую сторону, запишите результаты округления в
ассоциативный массив с ключами 'floor' и 'ceil'.*/

$a = sqrt(587);
$f = floor($a);
$c = ceil($a);
$arr = array("floor"=>"$f", "ceil"=>"$c");
echo $arr["floor"] . '</br>';
echo $arr["ceil"] . '</br>';

/*Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и
максимальное числа.*/

echo 'Мінімальне число: '.min(4, -2, 5, 19, -130, 0, 10).'</br>';
echo 'Максимальне число: '.max(4, -2, 5, 19, -130, 0, 10).'</br>';

//дана строка 'html css php'. найдите количество символов в этой строке

echo strlen('html css php') .'</br>';
 
//Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
$password = '12345';
if (strlen($password) < 5)
	echo "Пароль дуже короткий, мінімум 5 символів";
elseif (strlen($password) > 10)
	echo "Пароль дуже довгий, максимум 10 символів";
else
	echo "Пароль підходить! Ура!".'</br>';
// Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
$str = 'html css php';
echo substr($str, 0, 4 ).', ';
echo substr($str, 5, 3).', ';
echo substr($str, -3, 3).'</br>'; 

//Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
$str = 'Olena';
$str1 = substr($str, -3, 3);
echo $str1. '</br>';
   
//Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
$str = 'http://jkjdrfdty.efhehf.com';
if (substr($str, 0, 7) == 'http://')
	echo "Так". '</br>';
else 
	echo "Ні". '</br>';

//Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.

if (substr($str, 0, 7) == 'http://' || substr($str, 0, 8) == 'https://')
	echo "Так". '</br>';
else 
	echo "Ні". '</br>';

//Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.

$str = 'kjlkl.png';
if (substr($str, -4) == '.png')
	echo "Так". '</br>';
else 
	echo "Ні". '</br>';

//Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
$str = 'hjkkjlpo.jpg';
if (substr($str, -4) == '.png' || substr($str, -4) == '.jpg')
	echo "Так". '</br>';
else 
	echo "Ні". '</br>';
    
//Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.

$str ='gdhsgdhs gsdhsghj';
if (strlen($str) > 5)
	$exitStr = substr($str, 0, 5).'...';
else
	$exitStr = $str;
echo $exitStr. '</br>';



//Работа с str_replace
//Для решения задач данного блока вам понадобятся следующие функции: str_replace. Дана строка '31.12.2013'. Замените все точки на дефисы.

$date = '31.12.2013';
echo str_replace('.', '-', $date). '</br>';
 
//Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.

$str = 'edeheneuauaaabd cecuwwd abbdiwowlc';
$exitStr = str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
echo $exitStr. '</br>';
 
//Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.

$str = '1a2b3c4b5d6e7f8g9h0';
$exitStr = preg_replace("/\d/", "", $str);
echo $exitStr.'<br>';
$exitStr1 = str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'], [''], $str).'<br>';
echo $exitStr1. '</br>';
// 2 variant
$exitStr2 = $str;
for ($i = 0; $i < 10; $i++){
	$exitStr2 = str_replace($i, '', $exitStr2);
}
echo $exitStr2. '</br>';

//Работа с strtr
//Для решения задач данного блока вам понадобятся следующие функции: strtr. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).

$str = 'rfadfbfjbcdhbqabsiwxc';
$exitStr = strtr($str, 'abc', '123').'<br>';
echo $exitStr. '</br>';
$exitStr2 = strtr($str, ['a'=>1, 'b'=>2, 'c'=>3]);
echo $exitStr2. '</br>';
 
//Работа с substr_replace
//Для решения задач данного блока вам понадобятся следующие функции: substr_replace. Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.

$str = 'feefefev88eveveved';
echo substr_replace($str, '!!!', 3, 5). '</br>';
 
//Работа с strpos, strrpos
//Для решения задач данного блока вам понадобятся следующие функции: strpos, strrpos. Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.

$str = 'abc abc abc';
echo strpos($str, 'b'). '</br>';
 
//Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.

echo strrpos($str, 'b'). '</br>';
 
//Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.

echo strpos($str, 'b', 3). '</br>';

//Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
$str = 'aaa aaa aaa aaa aaa';

echo strpos($str, ' ', strpos($str, ' ')+1). '</br>';
 
//Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.

$str = '..efefefefefe';
if (strpos($str, '..') !== false) {
	echo "Є". '</br>';
} else {
	echo "Немає". '</br>';
};
 
//Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.

$str = 'http://efefef.efefe.ty';
if (strpos($str, 'http://') === 0) {
	echo "Так". '</br>';
} else {
	echo "Ні". '</br>';
};
 
//Работа с explode, implode
//Для решения задач данного блока вам понадобятся следующие функции: explode, implode. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$str = 'html css php';
$arr = explode(' ', $str);
echo'<pre>';
var_dump($arr);
echo'<pre>';

//Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
$arr = ['html', 'css', 'php'];
$str = implode(', ', $arr);
echo'<pre>';
echo $str;
echo'<pre>';

//В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.

$date = '2022-01-4';
$arr = explode('-', $date);
echo $arr[2].'.'.$arr[1].'.'.$arr[0].'<br>';
$arr = array_reverse($arr);
$str = implode('.', $arr);
echo $str. '</br>';
 
//Работа с str_split
//Для решения задач данного блока вам понадобятся следующие функции: str_split. Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.

$str = '1234567890';
$arr = str_split($str, 2);
echo'<pre>';
var_dump($arr);
echo'<pre>';

//Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.

$arr = str_split($str);
echo'<pre>';
var_dump($arr);
echo'<pre>';
//Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.

$arr = str_split($str, 2);
echo implode('-', $arr). '</br>';

//Работа с trim, ltrim, rtrim
//Для решения задач данного блока вам понадобятся следующие функции: trim, ltrim, rtrim. Дана строка. Очистите ее от концевых пробелов.

$str = ' eff efef ';
echo trim($str). '</br>';
 
//Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.

$str = '/php/';
echo trim($str, '/'). '</br>';

//Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.

$str = 'слова слова слова.';
echo trim($str, '.').'.'. '</br>';

//Работа с strrev
//Для решения задач данного блока вам понадобятся следующие функции: strrev. Дана строка '12345'. Сделайте из нее строку '54321'.

$str = '12345';
echo strrev($str). '</br>';
 
//Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).

$str = 'otto';
$exitStr = ($str == strrev($str)) ? 'Так' : 'Ні';
echo $exitStr. '</br>';
 
//Работа с str_shuffle
//Для решения задач данного блока вам понадобятся следующие функции: str_shuffle. Дана строка. Перемешайте символы этой строки в случайном порядке.

echo str_shuffle($str). '</br>';
 
//Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.

$str = 'abcdefghiklmnopqrstvxyz';
$shuffle = str_shuffle($str);
echo substr($shuffle, 0, 6);

//Работа с number_format
//Для решения задач данного блока вам понадобятся следующие функции: number_format. Дана строка '12345678'. Сделайте из нее строку '12 345 678'.

$str = '12345678';
echo number_format($str, 0, ',', ' '). '</br>';
 
//Работа с str_repeat
/*Для решения задач данного блока вам понадобятся следующие функции: str_repeat. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat.
x
xx
xxx
xxxx
xxxxx*/
for ($i = 1; $i<10; $i++)
echo str_repeat('x', $i).'</br>';

/*Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.
1
22
333
4444
55555
666666
7777777
88888888
999999999 */

for ($i = 1; $i<10; $i++)
echo str_repeat($i, $i).'</br>';
 
//Работа с strip_tags и htmlspecialchars
//Для решения задач данного блока вам понадобятся следующие функции: htmlspecialchars, strip_tags. Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.

$str = 'html, <b>php</b>, js';
echo strip_tags($str). '</br>';
 
//Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.

echo strip_tags($str, '<b><i>');

//Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.

echo htmlspecialchars($str). '</br>';
 
//Работа с chr и ord
//Для решения задач данного блока вам понадобятся следующие функции: chr, ord. Узнайте код символов 'a', 'b', 'c', пробела.

echo ord('a').'</br>';
echo ord('b').'</br>';
echo ord('c').'</br>';
echo ord(' '). '</br>';

//Выведите на экран символ с кодом 33.

echo chr(33). '</br>';
 
//Запишите в переменную $str случайный символ - большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.

$str = chr(rand(65,90));
echo $str. '</br>';
 
//Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.

$str = '';
$len = 15;
for ($i = 0; $i < $len; $i++)
	$str .= chr(rand(97,122));
echo $str. '</br>';

//Дана буква английского алфавита. Узнайте, она маленькая или большая.

$letter = 'd';
$answer = (ord($letter) >= 65 && ord($letter) <= 90) ? 'Велика' : ((ord($letter) >= 97 && ord($letter) <= 122) ? 'Маленька' : 'Не буква латинського алфавіту');
echo $answer. '</br>';
 
//Работа с strchr, strrchr
//Для решения задач данного блока вам понадобятся следующие функции: strchr, strrchr. Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.

$str = 'ab-cd-ef';
echo strchr($str, '-'). '</br>';

//Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.

echo strrchr($str, '-'). '</br>';
 
//Работа с strstr
//Для решения задач данного блока вам понадобятся следующие функции: strstr. Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.

$str = 'ab--cd--ef';
echo strstr($str, '--'). '</br>';

// Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками. -->

$arr = explode('_', 'var_test_text');
$str = '';
foreach ($arr as $key=>$val) {
    if($key == 0) {
        $str .= $val;
    } else {
        $str .=  ucfirst($val);
    }
}
echo $str. '</br>';

//Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3. -->

$arr = [5, 31, 17, 7, 73, 33];
foreach ($arr as $val){
    if (strpos($val, '3') !== false){
        echo $val.'<br>';
    }
}
?>

</body>
</html>