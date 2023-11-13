<?php

class Subjects {
    public $subjects_array = [
        'Конструювання програмного забезпечення',
        'Комп’ютерні мережі',
        'Дискретна математика',
        'Фізика',
        'Фізкультура',
        'Історія'
    ];

    public $students = 'Іванов, Петров, Сидоров';

    public function show() {
        echo "<hr>";
        foreach ($this->subjects_array as $subject) {
            echo $subject . "<br>";
        }
        echo "<hr>";
    }

    // public function displayArray($array) {
    //      echo "<hr>";
    //     foreach ($array as $array1) {
    //         foreach ($array1 as $subject){
    //             echo $subject . "<br>";
    //         }
    //     }
    //     echo "<hr>";
    // }

    public function displayArray($array) {
        echo "<hr>";
        if (is_array($array)) {
            foreach ($array as $item) {
                if (is_array($item)) {
                    foreach ($item as $subject) {
                        echo $subject . "<br>";
                    }
                } else {
                    echo $item . "<br>";
                }
            }
        } else {
            echo $array . "<br>";
        }
        echo "<hr>";
    }

    public function changeArray($searchValue, $replaceValue) {
        $key = array_search($searchValue, $this->subjects_array);

        if ($key !== false) {
            $this->subjects_array[$key] = $replaceValue;
        }
    }

    public function changeArray2($searchValue, $replaceValue, $occurrence) {
        $count = 0;

        foreach ($this->subjects_array as &$subject) {
            if ($subject == $searchValue) {
                $count++;
                if ($count == $occurrence) {
                    $subject = $replaceValue;
                }
            }
        }
    }

    public function expansion() {
        foreach ($this->subjects_array as &$subject) {
            $subject .= ' (' . rand(1, 5) . ' годин на тиждень)';
        }
    }

    public function getSubarrays() {
        return array_chunk($this->subjects_array, 3);
    }
}

?>
