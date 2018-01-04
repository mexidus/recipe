<?php

//Fetch all rows
final public function fetchCourseInfo() {
    global $db, $tpl;

    $query = $db->prepare('SELECT Course_Name, Course_Desc FROM course');
    $query->execute();

    $result = $query->fetchall();
        $id = 1;
        foreach($result as $row) {
                $tpl->define('Course: course_name-' . $id, $row['Course_Name']);
                $tpl->define('Course: course_desc-' . $id, $row['Course_Desc']);
                $id++;
                }


?>