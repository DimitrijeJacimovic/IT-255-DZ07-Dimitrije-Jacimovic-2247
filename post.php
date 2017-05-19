<?php
if (isset($_POST['a']) && isset($_POST['b'])) {
    header('Content-Type: application/json');
    $a = $_POST['a'];
    $b = $_POST['b'];
    $array = array(
        'povrsina' => ($a*$b),
    );
    echo json_encode($array);
}
?>