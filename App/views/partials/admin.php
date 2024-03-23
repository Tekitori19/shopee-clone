<div class="mx-auto container bg-white dark:bg-gray-800 shadow pt-14 rounded">
        <div class="flex flex-col lg:flex-row p-8 justify-between items-start lg:items-stretch w-full">
            <div class="w-full lg:w-1/4 xl:w-1/3 flex flex-col lg:flex-row items-start lg:items-center">
                <div class="w-full relative mb-2 lg:mb-0 lg:mr-4">
                    <div class="absolute text-gray-600 dark:text-gray-400 flex items-center pl-4 h-full">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1.svg"
                            alt="search">
                        <img class="dark:block hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1dark.svg"
                            alt="search">
                    </div>
                    <label for="search" class="hidden"></label>
                    <input placeholder="Search" id="search"
                        class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-12 text-sm border-gray-300 dark:border-gray-200 rounded border"
                        placeholder="Search" />
                </div>
            </div>
            <!-- <div class="w-full lg:w-3/4 xl:w-2/3 flex flex-col lg:flex-row items-start lg:items-center space-between justify-between"> -->
                <!-- <div class="relative w-full lg:w-1/4 my-2 lg:my-0 lg:mx-2 xl:mx-4 z-0">
                    <div class="absolute z-0 inset-0 m-auto mr-2 xl:mr-4 z-0 w-5 h-5">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg2.svg"
                            alt="arrow down">
                    </div>
                    <select aria-label="Selected tab"
                        class="relative cursor-pointer focus:outline-none focus:border-gray-800 focus:shadow-outline-gray text-sm form-select block w-full py-2 px-2 xl:px-3 border border-gray-300 dark:border-gray-200 rounded text-gray-600 dark:text-gray-400 appearance-none bg-transparent">
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                        <option selected="" class="text-sm text-gray-600 dark:text-gray-400">Representatives</option>
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                    </select>
                </div>
                <div class="relative w-full lg:w-1/4 my-2 lg:my-0 lg:mx-2 xl:mx-4 z-0">
                    <div class="z-0 absolute inset-0 m-auto mr-2 xl:mr-4 z-0 w-5 h-5">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg2.svg"
                            alt="arrow down">
                    </div>
                    <select aria-label="Selected tab"
                        class="relative cursor-pointer focus:outline-none focus:border-gray-800 focus:shadow-outline-gray text-sm form-select block w-full py-2 px-2 xl:px-3 border border-gray-300 dark:border-gray-200 rounded text-gray-600 dark:text-gray-400 appearance-none bg-transparent">
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                        <option selected="" class="text-sm text-gray-600 dark:text-gray-400">Status Reports</option>
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                        <option class="text-sm text-gray-600 dark:text-gray-400">Inactive</option>
                    </select>
                </div> -->
                <!-- <div
                    class="relative w-full lg:w-1/4 my-2 lg:my-0 cursor-pointer lg:mx-2 xl:mx-4 z-0 border focus:border-gray-800 border-gray-300 dark:border-gray-200 rounded p-2">
                    <button role="button" aria-label="open calendar" id="calendaropen"
                        class="z-0 w-10 px-2 absolute inset-0 m-auto z-0 border-l mr-0 flex items-center text-indigo-700 focus:outline-none focus:ring-2 focus:ring-gray-800 ">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg3.svg"
                            alt="calendar">
                        <input placeholder="date" type="date" class="absolute right-0 z-0 opacity-0 cursor-pointer"
                            id="datepicker" />
                    </button>
                    <p class="text-sm text-gray-600 dark:text-gray-400 datepicker">Schedule Dates</p>
                </div> -->
                <a
                    class="focus:shadow-outline-gray border block text-center border-transparent w-auto lg:w-1/4 my-2 lg:my-0 lg:ml-2 xl:ml-4 bg-indigo-700 transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:shadow-outline-gray duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-6 py-2 text-sm"
                     href="/dashboard/products">Quản lý sản phẩm</a>
                

            <!-- </div> -->
        </div>
        <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
            <table class="min-w-full bg-white dark:bg-gray-800 rounded">
                <thead>
                    <tr class="w-full h-16 border-gray-300 dark:border-gray-200 border-b py-8 bg-indigo-50">
                        <th role="columnheader"
                            class="pl-8 text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Ngày mua
                        </th>
                        <th role="columnheader"
                            class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Sản phẩm | số lượng</th>
                        <th role="columnheader"
                            class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Trạng thái
                        </th>
                        <th role="columnheader"
                            class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Khách hàng
                        </th>
                        <th role="columnheader"
                            class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Số điện thoại</th>
                        <th role="columnheader"
                            class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">
                            Địa chỉ</th>
                        <th role="columnheader"
                            class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Action
                        </th>
                    </tr>
                </thead>
                <tbody role="rowgroup">
                    <?php foreach ($users as $user): ?>
                    <tr role="row"
                        class="h-24 border-gray-300 border-t border-b hover:border-indigo-300 hover:shadow-md cursor-pointer transition duration-150 ease-in-out">
                        <td 
                            class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <?= $user->order_date?>
                            </td>
                        <td
                            class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <?= $user->name?> | <?= $user->number_of_products?></td>
                        <td class="pr-6">
                            <div class="w-full flex justify-start items-center h-full">
                                <div class="bg-indigo-100 text-indigo-700 rounded-full text-sm leading-3 py-2 px-5">New
                                </div>
                            </div>
                        </td>
                        <td
                            class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <?= $user->fullname?></td>
                        <td
                            class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <?= $user->phone_number?></td>
                        <td
                            class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <?= $user->address?></td>
                        <td
                            class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                            <div class="flex items-center">
                                <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                    href="javascript: void(0)">
                                    <div aria-label="Edit row" role="button"
                                        class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg"
                                            alt="Edit" class="max-w-none">
                                    </div>
                                </a>
                                <a class="mx-2 rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                    href="javascript: void(0)">
                                    <div aria-label="Settings" role="button"
                                        class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg5.svg"
                                            alt="Settings" class="max-w-none">
                                    </div>
                                </a>
                                <a class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                    href="javascript: void(0)">
                                    <div aria-label="Delete" role="button"
                                        class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-red-500">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg"
                                            alt="Delete" class="max-w-none">
                                    </div>
                                </a>
                            </div>
                        </td>

                        
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

    </div>