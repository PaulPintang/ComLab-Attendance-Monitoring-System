
<?php
ini_set('display_errors',"1");
    include("profprocess.php");

?>

	 <table class="min-w-full divide-y divide-gray-200" id="myTable">
	   <thead class="bg-gray-50">
	     <tr>

	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Rank Time
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Name
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Time In
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         Student ID
	       </th>
	       <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
	         PC no.
	       </th>
	     </tr>
	   </thead>

	   <tbody class="bg-white divide-y divide-gray-200" id="myTable">
	     <tr>
	       <?php while ($row = mysqli_fetch_array($studPresent)) { ?>
	         <td class="px-6 py-4 whitespace-nowrap">
	           <div class="text-sm font-medium text-gray-900">
	             <?php echo $row['id']; ?>
	           </div>

	         </td>
	         <td class="px-6 py-4 whitespace-nowrap">
	           <div class="text-sm text-gray-900"><?php echo $row['studentName']; ?></div>
	        
	         </td>
	         <td class="px-6 py-4 whitespace-nowrap">
	           <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
	             <?php echo $row['timeIn']; ?>
	           </span>
	         </td>
	         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	           <?php echo $row['studentId']; ?>
	         </td>
	         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	           <?php echo $row['pcNum'] ?>
	         </td>
	     </tr>
	   <?php } ?>

	   </tbody>
	 </table>