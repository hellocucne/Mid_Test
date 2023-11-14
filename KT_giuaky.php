<!-- Câu 1:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )

Câu 2:
a) True

Câu 3:
a) array()

Câu 4:
a) readfile()

Câu 5:
b) Chuyển đổi một đối tượng thành một chuỗi -->

<!-- Bài 1 -->
<?php
// Tạo hàm generate giá trị 
function generateFibonacci($n) {
    $fibonacci = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$n = 10;
$chuoiFibonacci = generateFibonacci($n);

echo "Bài 1: <br>";
echo "Dãy số Fibonacci đầu tiên có $n phần tử là: ";

for ($i = 0; $i < $n; $i++) {
    echo $chuoiFibonacci[$i];

    if ($i < $n - 1) {
        echo ', ';
    }
}
echo "<br><br>";
?>

<!-- Bài 2 -->
<?php

$students = array(
    array('id' => 1, 'name' => 'Nguyen Thi Hong Cuc', 'age' => 18, 'grade' => 8.5),
    array('id' => 2, 'name' => 'Nguyen Thi To Uyen', 'age' => 17, 'grade' => 9.0),
    array('id' => 3, 'name' => 'Nguyen Yen Linh', 'age' => 19, 'grade' => 7.8),
);

function hienThiStudents($students) {
    foreach ($students as $student) {
        echo "ID: " . $student['id'] . ", Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] . "<br>";
    }
}

function timHocSinhDiemCao($students) {
    $diemCao = 0;
    $hocSinhDiemCaoNhat = null;

    foreach ($students as $student) {
        if ($student['grade'] > $diemCao) {
            $diemCao = $student['grade'];
            $hocSinhDiemCaoNhat = $student;
        }
    }

    return $hocSinhDiemCaoNhat;
}

echo "Bài 2: <br>";
echo "Thông tin của tất cả học sinh:<br>";
hienThiStudents($students);
echo "<br>";

$hocSinhDiemCaoNhat = timHocSinhDiemCao($students);
echo "<br>Học sinh có điểm cao nhất:<br>";
echo "ID: " . $hocSinhDiemCaoNhat['id'] . ", Name: " . $hocSinhDiemCaoNhat['name'] . ", Age: " . $hocSinhDiemCaoNhat['age'] . ", Grade: " . $hocSinhDiemCaoNhat['grade'];

?>
