<div id="popup" class="py-24 w-full flex justify-center">
            <div class="mx-auto container">
                <div class="flex items-center justify-center h-full w-full">
                    <div class="bg-white dark:bg-gray-800  rounded-md shadow  overflow-y-auto sm:h-auto w-10/12 md:w-8/12 lg:w-1/2 2xl:w-2/5">
                        <div class="bg-gray-100 dark:bg-gray-100 border-indigo-200 border rounded-tl-md rounded-tr-md px-4 md:px-8 md:py-4 py-7 flex items-center justify-between">
                            <p class="text-base font-semibold">Đăng bán sản phẩm mới</p>
                            <!-- <button role="button" aria-label="close label" onclick="popuphandler(false)" class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 focus:outline-none">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/add_user-svg1.svg" alt="icon"/>
                               
                            </button> -->
                        </div>
                        <div class="px-4 md:px-10 pt-6 md:pt-12 md:pb-4 pb-7">
                            <div class="flex items-center justify-center">
                                <img src="" id="myimage" class="hidden h-40 w-40 p-0 mb-10 rounded-md object-cover">
                                <div tabindex="0" aria-label="img" role="img" class="focus:outline-none w-40 h-40 p-16 bg-gray-100 mb-10 rounded-md flex items-center justify-center">
                                    <!-- img load here -->
                                    <img
                                     src="https://tuk-cdn.s3.amazonaws.com/can-uploader/add_user-svg2.svg" 
                                     alt="icon"/>
                                </div>
                            </div>
                            <form class="mt-11" method="post" action="/listings">
                                <div class="flex items-center justify-center">
                                    <div class="flex items-center justify-start w-full border border-dashed border-indigo-700 rounded-lg p-3">
                                        <div class="cursor-pointer text-indigo-700 dark:text-indigo-600">
                                            <img class="cursor-default" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left_aligned_file_upload-svg3.svg" alt="icon">
                                           <!-- <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left_aligned_file_upload-svg3dark.svg" alt="icon"> -->
                                           
                                        </div>
                                        <p class="cursor-default text-base font-normal tracking-normal text-gray-800 dark:text-gray-100 text-left ml-4">
                                            Đăng ảnh sản phẩm tại 
                                            <label for="fileUp" tabindex="0" class="focus:outline-none cursor-pointer text-base font-normal tracking-normal text-indigo-700 dark:text-indigo-600 text-center"> đây </label>
                                            <input type="file" name="picture" id="picture" onchange="onFileSelected(event)" name="fileUpload" id="fileUp" />
                                        </p>
                                    </div>
                                </div>

                                <?=loadPartial('errors', ['errors' => $errors])?>
                                <div class="flex items-center pt-10 space-x-9">
                                    <input placeholder="Tên sản phẩm" name="name" value="<?=$listing['name']?? ''?>" class="dark:text-white focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white dark:bg-gray-900  border rounded border-gray-200 dark:border-gray-700 " />
                                    <input placeholder="Giá" name="price" type="number" value="<?=$listing['price']?? ''?>" min="1" step=".01" class="dark:text-white focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white dark:bg-gray-900  border rounded border-gray-200 dark:border-gray-700 " />
                                </div>
                                <div class="flex items-center space-x-9 mt-8">
                                    <input placeholder="Trạng thái: Có hàng" disabled class="placeholder:text-green-500 focus:ring-2 focus:ring-gray-400 w-1/2 focus:outline-none placeholder-gray-500 py-3 px-3 text-sm leading-none text-gray-800 bg-white dark:bg-gray-900  border rounded border-gray-200 dark:border-gray-700 ">
                                    <div tabindex="0" class="focus:outline-none focus:ring-2 focus:ring-gray-400 w-1/2 bg-white dark:bg-gray-900  border rounded border-gray-200 dark:border-gray-700  py-2.5 px-3">
                                        <select aria-label="select an option" name="category_id" class="text-sm text-gray-500 dark:bg-gray-900 w-full focus:outline-none">
                                            <option disabled selected value="">Danh mục</option>
                                            <option value="1">Đồ điện tử</option>
                                            <option value="2">Thời trang</option>
                                            <option value="3">Gia dụng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <textarea placeholder="Mô tả sản phẩm" name="description" class="dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-gray-900 py-3 pl-3 overflow-y-auto h-24 border placeholder-gray-500 rounded border-gray-200 dark:border-gray-700  w-full resize-none focus:outline-none"><?=$listing['description'] ?? ''?></textarea>
                                </div>
                                <div class="flex items-center justify-between mt-9">
                                    <a href="/"  class="focus:ring-2 focus:ring-offset-2 focus:bg-gray-600 focus:ring-gray-600 focus:outline-none px-6 py-3 bg-gray-600 hover:bg-gray-500 shadow rounded text-sm text-white">Hủy</a>
                                    <button aria-label="add user" type="submit" role="button" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 focus:outline-none px-6 py-3 bg-indigo-700 hover:bg-opacity-80 shadow rounded text-sm text-white">Thêm sản phẩm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function onFileSelected(event) {
                let divImg = document.querySelector('[aria-label="img"]')
                divImg.classList.add("hidden")

                console.log(divImg);
                let selectedFile = event.target.files[0];
                let reader = new FileReader();

                let imgtag = document.getElementById("myimage");
                imgtag.classList.remove("hidden")
                imgtag.title = selectedFile.name;

                reader.onload = function(event) {
                    imgtag.src = event.target.result;
                };

                reader.readAsDataURL(selectedFile);
            }
        </script>