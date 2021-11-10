<?php

    include("profprocess.php");

?>

     <?php while ($row = mysqli_fetch_array($getStudents)) { ?> 
            <p>Total Students: <span class="bg-green-400 text-white"><span> 	<?php echo $row['totalStud'];?>	   </span> Students</span></p>
            <p>Total Present: <span class="bg-yellow-400 text-white"><span><?php echo $num_rows?></span> Students</span></p>
            <p>Total Absent: <span class="bg-red-400 text-white"><span><?php echo $row['totalStud']-$num_rows;?></span> Students</span></p>
     <?php } ?>