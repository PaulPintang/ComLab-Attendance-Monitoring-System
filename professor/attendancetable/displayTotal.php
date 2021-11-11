<?php

    include("profprocess.php");

?>

     <?php while ($row = mysqli_fetch_array($getStudents)) { ?> 
            <p>Total Students: <span class="px-4 py-1 text-sm rounded bg-blue-400 text-white"><span> 	<?php echo $row['totalStud'];?>	   </span> Students</span></p>
            <p>Total Present: <span class="px-4 py-1 text-sm bg-blue-500 rounded text-white"><span><?php echo $num_rows?></span> 
            <?php 
                if($num_rows == 0){
                    echo '';
                }else{
                    echo 'Students';
                }
            ?>
            </span></p>
            <p>Total Absent: <span class="px-4 py-1 text-sm text-white bg-blue-600 rounded"><span><?php echo $row['totalStud']-$num_rows;?></span> 
            <?php 
                if($num_rows === 0){
                    echo '';
                }else{
                    echo 'Students';
                }
            ?>
            </span></p>
     <?php } ?>