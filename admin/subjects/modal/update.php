<style>
    .show {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;

  
}

 .example::-webkit-scrollbar {
    display: none;
    }
    /* Hide scrollbar for IE, Edge and Firefox */
    .example {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
    }
</style>
<?php $subEdit = mysqli_query($db, "SELECT * FROM subjects"); ?>
<?php while ($row = mysqli_fetch_array($subEdit)) { ?>
    <div id="edit<?php echo $row['id'] ?>" class="show fade">
        <div style="max-width: 400px" class="flex px-4 mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                    <div class="bg-white p-5 mx-3 md:my-5 lg:my-5" style="max-width: 500px">
                        <div class="flex justify-between items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl">Edit account</h1>
                            <div class="flex items-center gap-5">
                                <i class="fas fa-close text-gray-300 cursor-pointer" data-dismiss="modal"></i>
                            </div>
                        </div>
                        <div class="overflow-y-auto example">
                        <form action="./controller.php?action=update" method="post" class="space-y-4 text-xs md:text-base lg:text-base" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="space-y-2">
                                <p class="text-sm">Name <span class="text-red-500">*</span></p>
                                <input type="text" value="<?php echo $row['subject']?>" autocomplete="off" name="studentName" class="text-sm bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                           
                            <!-- <div class="space-y-2">
                                <p class="text-sm">Student ID <span class="text-red-500">*</span></p>
                                <input type="text"  value="<?php echo $row['studentId']?>" autocomplete="off" name="studentId" class="text-sm bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div> -->
                           

                            <!-- <div>
                                <p class="text-sm pb-1">Courses<span class="text-red-500">*</span></p>
                                <input type="checkbox" name="vehicle1" value="">
                                <label class="text-xs text-gray-600">Bachelor of Science in Information System</label><br>
                                <input type="checkbox" name="vehicle2" value="" >
                                <label class="text-xs text-gray-600"> Bachelor of Science in Information Technology</label><br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label class="text-xs text-gray-600"> Bachelor of Science in IT-Animation</label> <br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600"> Bachelor of Science in Computer Engineering</label><br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600"> Bachelor of Science in Electronics Comm. Engineering</label><br>
                            </div> -->

                            <!-- <div class="flex ">
                                <div>
                                    <p class="text-sm">Year and Block<span class="text-red-500">*</span></p>
                                    <input type="checkbox" name="" value="">
                                    <label class="text-xs text-gray-600">1st Year</label><br>
                                    <input type="checkbox" name="" value="" >
                                    <label class="text-xs text-gray-600"> 2nd Year</label><br>
                                    <input type="checkbox" name="" value="">
                                    <label class="text-xs text-gray-600"> 3rd Year</label> <br>
                                    <input type="checkbox" name="" value="">
                                    <label  class="text-xs text-gray-600"> 4th Year</label><br>
                                </div>
                                <div class="pt-5">
                                    <input type="checkbox" name="" value="">
                                    <label class="text-xs text-gray-600">A</label><br>
                                    <input type="checkbox" name="" value="" >
                                    <label class="text-xs text-gray-600">B</label><br>
                                    <input type="checkbox" name="" value="">
                                    <label class="text-xs text-gray-600">C</label> <br>
                                    <input type="checkbox" name="" value="">
                                    <label  class="text-xs text-gray-600">D</label><br>
                                </div>
                            </div> -->
<!--                             
                            <div>
                                <div class="flex items-center gap-3">
                                     <p class="text-sm">1st Year<span class="text-red-500">*</span></p> 
                                     <div class="bg-yellow-300 w-8 h-2"></div>
                                </div>
                                <p class="text-xs text-gray-700">Subjects</p>
                                <input type="checkbox" name="vehicle3" value="">
                                <label class="text-xs text-gray-600">Data Structure and Algorithm</label> <br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600">Programming 1</label><br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600"> WEb development</label><br>

                            </div>

                            <div>
                                <div class="flex items-center gap-3">
                                     <p class="text-sm">2nd Year<span class="text-red-500">*</span></p> 
                                     <div class="bg-green-300 w-8 h-2"></div>
                                </div>
                                <p class="text-xs text-gray-700">Subjects</p>
                                <input type="checkbox" name="vehicle3" value="">
                                <label class="text-xs text-gray-600">Data Structure and Algorithm</label> <br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600">Programming 1</label><br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600"> WEb development</label><br>
                                
                            </div>

                            <div>
                               <div class="flex items-center gap-3">
                                     <p class="text-sm">3rd Year<span class="text-red-500">*</span></p> 
                                     <div class="bg-red-300 w-8 h-2"></div>
                                </div>
                                <p class="text-xs text-gray-700">Subjects</p>
                                <input type="checkbox" name="vehicle3" value="">
                                <label class="text-xs text-gray-600">Data Structure and Algorithm</label> <br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600">Programming 1</label><br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600"> WEb development</label><br>
                            </div>

                            <div>
                               <div class="flex items-center gap-3">
                                     <p class="text-sm">4th Year<span class="text-red-500">*</span></p> 
                                     <div class="bg-purple-300 w-8 h-2"></div>
                                </div>
                                <p class="text-xs text-gray-700">Subjects</p>
                                <input type="checkbox" name="vehicle3" value="">
                                <label class="text-xs text-gray-600">Data Structure and Algorithm</label> <br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600">Programming 1</label><br>
                                <input type="checkbox" name="vehicle3" value="">
                                <label  class="text-xs text-gray-600"> WEb development</label><br>
                            </div> -->
                           
                            <!-- <div>
                                <small class="text-gray-500">Note: Please make sure you input a correct professor's details. Thank you!</small>
                            </div> -->
                            <div class="flex justify-center">
                                <div style="font-size: 14px" class="pt-6">
                                    <button type="button" data-dismiss="modal" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                     <a href="">
                                            Cancel
                                    </a>
                                    </button>
                                    <button class="relative px-6 bg-green-500 hover:bg-green-400 py-2 text-white rounded ml-3" name="update" type="submit">
                                      <span class="button-text">Update</span>
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
 <?php } ?>
