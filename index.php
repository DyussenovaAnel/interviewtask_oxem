<?php
include_once('classes\Chicken.classes.php');
include_once('classes\Cow.classes.php');
include_once('classes\Farm.classes.php');

//Система должна добавить животных в хлев (10 коров и 20 кур).
$farm = new Farm(1);
for($i = 1; $i <= 10; $i++) {
    ${"cow$i"} = new Cow($i);
    $farm ->add_animal(${"cow$i"});
}

for($i = 1; $i <= 20; $i++) {
    ${"chicken$i"} = new Chicken($i);
    $farm ->add_animal(${"chicken$i"});
}

//Вывести на экран информацию о количестве каждого типа животных на ферме.
$text = $farm ->getInfoAnimals();
echo $text."<br>";

//7 раз (неделю) произвести сбор продукции (подоить коров и собрать яйца у кур).
for($i = 0; $i <= 6; $i++) {
    $farm ->get_all_today_products();
}

//Вывести на экран общее кол-во собранных за неделю шт. яиц и литров молока.
$text = $farm ->getInfoLastWeek();
echo $text."<br>";

//Добавить на ферму ещё 5 кур и 1 корову (съездили на рынок, купили животных).
$chick_num = $farm ->getAnimalCount($chicken1->getType());
for($i = $chick_num+1; $i <= $chick_num+5; $i++) {
    ${"chicken$i"} = new Chicken($i);
    $farm ->add_animal(${"chicken$i"});
}
$cow_num = $farm ->getAnimalCount($cow1->getType());
$cow_num += 1;
${"cow$cow_num"} = new Cow($cow_num);
$farm ->add_animal(${"cow$cow_num"});


// Снова вывести информацию о количестве каждого типа животных на ферме.
$text = $farm ->getInfoAnimals();
echo $text."<br>";

// Снова 7 раз (неделю) производим сбор продукции и выводим результат на экран.
for($i = 0; $i <= 6; $i++) {
    $farm ->get_all_today_products();
}
$text = $farm ->getInfoLastWeek();
echo $text."<br>";

?>
