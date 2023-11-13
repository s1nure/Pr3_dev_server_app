<?php

include 'subjects.php';

$subjectsObj = new Subjects();

$subjectsObj->show();

$subjectsObj->changeArray('Фізкультура', 'Історія');
$subjectsObj->show();

$uniqueSubjects = array_unique($subjectsObj->subjects_array);
$subjectsObj->displayArray($uniqueSubjects);

$subjectsObj->changeArray2('Історія', 'Фізкультура', 2);
$subjectsObj->show();

asort($subjectsObj->subjects_array);
$subjectsObj->show();

$subjectsObj->expansion();
$subjectsObj->show();

$subarrays = $subjectsObj->getSubarrays();
$subjectsObj->displayArray($subarrays);

$subjectsObj->displayArray(explode(', ', $subjectsObj->students));

$studentsArray = explode(', ', $subjectsObj->students);
$subjectsObj->students = implode(', ', $studentsArray);
$subjectsObj->displayArray([$subjectsObj->students]);

?>
