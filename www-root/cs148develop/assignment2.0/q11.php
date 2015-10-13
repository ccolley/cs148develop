<?php include 'top.php'; ?>



<p>This is a test</p>

<?php

$columns = 2;

 $query = 'SELECT fnkCourseId, COUNT(*) AS fldSelection FROM tblSections WHERE fldSection >= "50"';
    $info2 = $thisDatabaseReader->testQuery($query, "", 1, 0, 2, 1, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 1, 0, 2, 1, false, false);


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

