<form method="GET" action="/listings/search" class="space-y-2 flex w-1/4">
    <label for="category" class="block text-sm font-medium text-gray-700 ">Chọn danh mục:</label>
    <select name="category" id="category" class="mt-1 mr-1 block w-full pl-3 pr-10 py-1 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
        <option value="0">Tất cả</option>
        <option value="1">Đồ điện tử</option>
        <option value="2">Thời trang</option>
        <option value="3">Gia dụng</option>
    </select>
    <button type="submit" class="mt-2 inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Lọc</button>
</form>
