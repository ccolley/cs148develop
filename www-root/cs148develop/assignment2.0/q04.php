<?php include 'top.php'; ?>


<?php

$columns = 5;

 $query = 'SELECT * FROM tblCourses WHERE pmkCourseId = "392"';
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 0, false, false);


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

