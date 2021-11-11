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
</style>
    <div id="inputCode" class="show fade">
        <div class="flex px-4 mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                    <div class="bg-white p-5 mx-3 md:my-5 lg:my-5 h-auto flex items-center justify-center" style="width: 600px; height: 300px">
                        <div>
                        <div class="flex flex-col justify-center items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl text-center">INPUT YOUR SECURITY CODE!</h1>
                            <small class="warn block text-red-400">Opps!! all inputs are required!!</small>
                        </div>
                        <div class="overflow-y-auto example">
                        <form action="./controller.php?action=add" method="post" class="space-y-4 text-xs md:text-base lg:text-base" enctype="multipart/form-data">
                            <div class="space-y-2 w-80 mx-auto">
                                <input type="text" value="" autocomplete="off" name="passcode" class="code transition-colors text-center text-sm bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-4 px-2 text-gray-500 w-full">
                            </div>
                         
                            <div class="flex justify-center">
                                <div style="font-size: 14px" class="pt-6">
                                    <button type="button" data-dismiss="modal" class="px-6 py-2 bg-gray-100 hover:bg-gray-200 rounded text-gray-500 transition-all">
                                        <a href="">
                                                Return
                                        </a>
                                    </button>
                                    <button class=" transition-all relative px-6 bg-purple-700 hover:bg-purple-500 py-2 text-white rounded ml-3" name="startclass" type="submit">
                                             <span class="button-text">Submit</span>
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
</div>
