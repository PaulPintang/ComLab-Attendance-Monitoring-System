
<div class="w-full p-6" style="height: calc(100vh - 213px">
  <div class="bg-white px-6 w-full h-full space-y-2 p-7">
    <div class="flex justify-between items-center pb-2">
            <h1 class="font-medium text-gray-700  " styke="top:40px"><span class="text-yellow-400">Student's </span> account</h1>
            <a href="#add" data-toggle="modal" class="py-1 px-3 bg-yellow-400 rounded text-white hover:bg-yellow-300 transition-all " >
                    <div class="flex items-center gap-2 text-sm py-1">
                        <div>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <span>Add account</span>
                        </div>
                    </div>
             </a>
        </div>
               <div class="overflow-y-auto example" style="height: 260px">
         <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
            <thead class="sticky top-0">
                <tr>
                    <th scope="col" class="md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Name
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Student ID
                    </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
          
                </tr>
            </thead>
            <tbody class=" divide-y divide-gray-200 overflow-auto text-gray-700">
            <?php $studaccounts = mysqli_query($db, "SELECT * FROM studaccounts ORDER BY ID DESC"); ?>
            <?php while ($row = mysqli_fetch_array($studaccounts)) { ?>
                <tr >
                    <td class="pl-6"> <small><?php echo $row['studentName']; ?></small> </td>
                     <td class="pl-6"> <small><?php echo $row['studentId']; ?></small> </td>
                     <td class="text-right px-2 md:px-2 lg:px-2 py-2 whitespace-nowrap space-x-3">
                        <a href="#edit<?php echo $row['id'];?>" data-toggle="modal">
                            <i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px"></i>
                        </a>
                        <a href="delete.php?del=<?php echo $row['id'];?>" name="del">
                            <i class="fas fa-trash text-gray-300 cursor-pointer hover:text-red-400 transition-all" style="font-size: 13px" onclick="toggleModal('view_event')"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
      </div>
      <div class="pt-1">
        <small class="text-gray-600"><span class="font-bold text-yellow-400">Total: </span><b><?php echo $total_students?></b> students</small>
      </div>
    </div>
</div>
<!-- MODAL -->
    <?php include './modal/add.php'?>
    <?php include './modal/update.php'?>