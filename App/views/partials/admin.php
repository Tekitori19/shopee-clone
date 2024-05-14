<div class="mx-auto container bg-white dark:bg-gray-800 shadow pt-10 rounded">
    <div class="flex flex-col lg:flex-row p-8 mt-10 justify-center items-start lg:items-stretch w-full">
        <div class="w-full lg:w-1/4 xl:w-1/3 flex flex-col lg:flex-row items-start lg:items-center">
            <div class="w-full relative mb-2 lg:mb-0 lg:mr-4">
                <div class="absolute text-gray-600 dark:text-gray-400 flex items-center pl-4 h-full">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1.svg" alt="search">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1dark.svg" alt="search">
                </div>
                <form action="/dashboard/search" method="get">
                    <label for="user" class="hidden"></label>
                    <input name="user" placeholder="Search user dashboard" id="user" class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-12 text-sm border-gray-300 dark:border-gray-200 rounded border"/>
                </form>
            </div>
        </div>
    </div>
    <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
        <table class="min-w-full bg-white dark:bg-gray-800 rounded">
            <thead>
                <tr class="w-full h-16 border-gray-300 dark:border-gray-200 border-b py-8 bg-indigo-50">
                    <th role="columnheader" class="pl-8 text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Ngày mua
                    </th>
                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Sản phẩm | <span class="text-green-500">số lượng</span></th>
                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Trạng thái
                    </th>
                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Khách hàng
                    </th>
                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Số điện thoại</th>
                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">
                        Địa chỉ</th>
                    <th role="columnheader" class="text-gray-600 font-normal pr-6 text-left text-sm tracking-normal leading-4">Action
                    </th>
                </tr>
            </thead>
            <tbody role="rowgroup">
                <?= loadPartial("message") ?>
                <?php foreach ($users as $user) : ?>
                    <tr role="row" class="h-24 border-gray-300 border-t border-b hover:border-indigo-300 hover:shadow-md cursor-pointer transition duration-150 ease-in-out">
                        <a href="/dashboard/<?= $user->id ?>">
                            <td class="pl-8 pr-6 text-left whitespace-no-wrap text-sm text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                                <?= $user->order_date ?>
                            </td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                                <?= $user->name ?> | <span class="text-green-500"><?= $user->number_of_products ?></span></td>
                            <td class="pr-6">
                                <div class="w-full flex justify-start items-center h-full">
                                    <div class="bg-indigo-100 text-indigo-700 rounded-full text-sm leading-3 py-2 px-5">
                                        <?= $user->status ?>
                                    </div>
                                </div>
                            </td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                                <?= $user->fullname ?></td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                                <?= $user->phone_number ?></td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                                <?= $user->address ?></td>
                            <td class="text-sm pr-6 whitespace-no-wrap text-gray-800 dark:text-gray-100 tracking-normal leading-4">
                                <div class="flex items-center">
                                    <a href="/dashboard/edit/<?= $user->id ?>" class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray">
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit" class="max-w-none">
                                        </button>
                                    </a>
                                    <!-- <a class="mx-2 rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray"
                                        href="javascript: void(0)">
                                        <div aria-label="Settings" role="button"
                                            class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-indigo-700">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg5.svg"
                                                alt="Settings" class="max-w-none">
                                        </div>
                                    </a> -->
                                    <a href="/dashboard/<?= $user->id ?>" class="rounded border border-transparent focus:outline-none focus:border-gray-800 focus:shadow-outline-gray">
                                        <button type="submit" class="p-2 bg-gray-100 hover:bg-gray-200 rounded cursor-pointer text-red-500">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete" class="max-w-none">
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</div>