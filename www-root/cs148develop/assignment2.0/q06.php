<?php include 'top.php'; ?>




<?php

$columns = 1;

 $query = 'SELECT fldCourseName FROM tblCourses WHERE fldDepartment != "CS" AND fldCourseName LIKE "data %" OR fldCourseName LIKE "% data" ';
    $info2 = $thisDatabaseReader->testQuery($query, "", 1, 3, 6, 0, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 1, 3, 6, 0, false, false);


    $highlight = 0; // used to highlight alternate rows
    print "<table>";
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';


print '</article>';
include "footer.php";
?>

