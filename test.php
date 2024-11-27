<?php
/* $arr = array("Row 1 Data 1	", "Row 1 Data 2");
echo json_encode($arr);
 */
$columns = array(
    array('db' => '1', 'dt' => 'id'),
    array('db' => 'name', 'dt' => 'name'),
    array('db' => 'email', 'dt' => 'email'),
);

echo json_encode($columns);
?>