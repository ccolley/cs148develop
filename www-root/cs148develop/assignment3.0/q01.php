<?php include 'top.php'; 


$columns = 1;


 $query = 'SELECT DISTINCT fldCourseName FROM tblCourses, tblEnrolls WHERE fldGrade = 100 AND tblCourses.pmkCourseID = tblEnrolls.fnkCourseID order by fldCourseName';

    $info2 = $thisDatabaseReader->select($query, "", 1, 2, 0, 0, false, false);


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
    print '</aside>';

print '</article>';
include "footer.php";
?>

