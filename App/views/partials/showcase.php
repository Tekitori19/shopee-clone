<div class="relative bg-gray-100">
    <div class="relative ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:grid lg:grid-cols-2 lg:px-8">
            <div class="mx-auto max-w-2xl py-24 lg:max-w-none lg:py-64">
                <div class="lg:pr-16">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl xl:text-6xl">Tập trung vào những điều quan trọng</h1>
                    <p class="mt-4 text-xl text-gray-600">Tất cả biểu đồ, công cụ chọn ngày và thông báo trên thế giới cũng không thể sánh bằng cảm giác đánh dấu hoàn thành công việc trên một tờ giấy.</p>
                    <div class="mt-6">
                        <a href="#store" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 font-medium text-white hover:bg-indigo-700">Hiệu suất cửa hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative h-48 w-full sm:h-64 lg:absolute lg:right-0 lg:top-0 lg:h-full lg:w-1/2 overflow-hidden bg-gray-200">
    <img src="https://intphcm.com/data/upload/banner-thoi-trang4.jpg" 
         alt="" class="carousel-item absolute inset-0 w-full h-full object-contain transition-opacity duration-500 ease-in-out opacity-100">
    <img src="https://down-vn.img.susercontent.com/file/419ca799ae9d07a208d9dd4c754a8d60" 
         alt="" class="carousel-item absolute inset-0 w-full h-full object-contain transition-opacity duration-500 ease-in-out opacity-0">
    <img src="https://cdn11.dienmaycholon.vn/filewebdmclnew/public//userupload/images/Bi-kip-mua-do-gia-dung-thoi-IT-3.JPG" 
         alt="" class="carousel-item absolute inset-0 w-full h-full object-contain transition-opacity duration-500 ease-in-out opacity-0">
    </div>
    <script>
        const carouselItems = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        const showNextImage = () => { 

        carouselItems[currentIndex].classList.add('opacity-0');
        carouselItems[currentIndex].classList.remove('opacity-100');

        currentIndex = (currentIndex + 1) % carouselItems.length;

        carouselItems[currentIndex].classList.remove('opacity-0');
        carouselItems[currentIndex].classList.add('opacity-100');
    };

    setInterval(showNextImage, 3000);
    </script>

</div>
    <!--<div class="lg:max-w-[1440px] md:max-w-[744px] max-w-[375px] w-full py-10 lg:px-10 md:px-6 px-4 bg-gray-100 mx-auto">
    <div class="flex lg:flex-row md:flex-row flex-col justify-center gap-x-7 gap-y-7">
     <div class="py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">News</p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/luke2222.png" alt="luke">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Luke Sipes
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            18 September 2023, Tueday
                        </p>
                    </div>
                </div>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">
                    Entertainment
                </p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/shane33333.png" alt="shane">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Shane Hickle
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            28 August 2022, Wednesday
                        </p>
                    </div>
                </div>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group lg:block md:hidden block hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">Sports</p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ank33333.png" alt="antonio">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Antonio Ebert
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            16 July 2022, Monday
                        </p>
                    </div>
                </div>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="flex lg:flex-row md:flex-row flex-col justify-center gap-x-7 mt-7 gap-y-7">
        <div class="py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">Fashion</p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/kath87.png" alt="Kathleen">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Kathleen Kuphals
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            2 October 2021, Saturday
                        </p>
                    </div>
                </div>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">
                    Bussiness
                </p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/neti9090.png" alt="Nettie">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Nettie Kihn
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            14 January 2022, Friday
                        </p>
                    </div>
                </div>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group lg:block md:hidden block hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">News</p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/miss7654.png" alt="miss">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Miss Marcia McGlynn
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            31 November 2022, Thursday
                        </p>
                    </div>
                </div>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center gap-x-7 mt-7">
        <div class="lg:hidden md:block hidden py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">Fashion</p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/kath87.png" alt="Kathleen">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Kathleen Kuphals
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            2 October 2021, Saturday
                        </p>
                    </div>
                </div>
                <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="lg:hidden md:block hidden py-5 px-4 max-w-[356px] w-full bg-gray-50 rounded hover:bg-indigo-50 hover:rounded group hover:cursor-pointer">
            <div class="flex gap-x-3 mb-4">
                <svg class="text-[#4B5563] group-hover:text-indigo-700" width="12" height="12" viewBox="0 0 12 12" fill="Currentcolor" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6.00098" cy="6" r="6" fill="Currentcolor"></circle>
                </svg>
                <p class="text-xs font-medium leading-3 text-gray-600">
                    Bussiness
                </p>
            </div>
            <p class="text-base font-semibold leading-none text-gray-800 mb-3">
                Fun Fact
            </p>
            <p class="text-sm leading-tight text-gray-600">
                What’s inside a Kit Kat? Broken Kit Kats that are damaged during
                production—they get ground up and go between the wafers inside,
                along with cocoa and sugar. That’s a way to not let anything go to
                waste!
            </p>
            <hr class="my-5 border-gray-300">
            <div class="flex justify-between gap-x-4">
                <div class="flex gap-x-4">
                    <img class="object-contain" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/neti9090.png" alt="Nettie">
                    <div>
                        <p class="text-base font-medium leading-none text-gray-800 mb-2">
                            Nettie Kihn
                        </p>
                        <p class="text-xs leading-3 text-gray-600">
                            14 January 2022, Friday
                        </p>
                    </div>
                </div> -->
                <div class="max-w-7xl mx-auto py-8 px-6">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Mua hàng trên Shop Bee</h2>
    <p class="text-center text-gray-600 mb-6">
      Trải nghiệm mua sắm hoàn hảo với đa dạng sản phẩm từ đồ điện tử, gia dụng đến thời trang. 
      Chúng tôi mang đến dịch vụ chất lượng và giao hàng nhanh chóng.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 h-[450px]">
      <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
        </svg>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Tiếp cận hàng triệu khách hàng</h3>
          <p class="text-gray-600">
            Kinh doanh đồ điện tử, gia dụng, và quần áo với khả năng tiếp cận khách hàng toàn quốc nhờ nền tảng của chúng tôi.
          </p>
        </div>
        <img class="object-contain" src="https://thanhlapcongtyonline.com/hoanghung/31/images/cach-xay-dung-hinh-anh-cong-ty-thu-hut-khach-hang-tiem-nang-02.jpg" alt="luke">
        <a href="#" class="text-blue-500 text-sm mt-4 hover:underline">Xem thêm</a>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Dịch vụ giao hàng nhanh chóng</h3>
          <p class="text-gray-600">
            Hỗ trợ hoàn thiện đơn hàng với dịch vụ giao hàng uy tín và chăm sóc khách hàng chuyên nghiệp,vừa lòng khách hàng.
          </p>
        </div>
        <img class="object-contain" src="https://phuongnamvina.com/img_data/images/ban-hang-online-nen-chon-nha-van-chuyen-nao-la-tot-nhat.jpg" alt="luke">
        <a href="#" class="text-blue-500 text-sm mt-4 hover:underline">Xem thêm</a>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
        </svg>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Xây dựng thương hiệu mạnh</h3>
          <p class="text-gray-600">
            Giúp doanh nghiệp tạo dựng thương hiệu nổi bật trong lĩnh vực điện tử, gia dụng và thời trang.
          </p>
        </div>
        <img class="object-contain" src="https://omicall.com/wp-content/uploads/xay-dung-va-phat-trien-thuong-hieu-1.jpg" alt="luke">
        <a href="#" class="text-blue-500 text-sm mt-4 hover:underline">Xem thêm</a>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between">
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
        </svg>
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Hỗ trợ nhà bán hàng</h3>
          <p class="text-gray-600">
            Đội ngũ hỗ trợ tận tình giúp bạn quản lý tài khoản bán hàng và tối ưu doanh thu trên nền tảng. Đặc biệt tận tình chăm sóc giúp đỡ
          </p>
        </div>
        <img class="object-contain" src="https://png.pngtree.com/png-clipart/20230303/original/pngtree-customer-support-and-service-concept-png-image_8970771.png" alt="luke">
        <a href="#" class="text-blue-500 text-sm mt-4 hover:underline">Xem thêm</a>
      </div>
    </div>
  </div>
                <!-- <div>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 5.75C3.90326 5.75 3.33097 5.98705 2.90901 6.40901C2.48705 6.83097 2.25 7.40326 2.25 8C2.25 8.59674 2.48705 9.16903 2.90901 9.59099C3.33097 10.0129 3.90326 10.25 4.5 10.25H6.27062C6.68484 10.25 7.02062 10.5858 7.02062 11C7.02062 11.4142 6.68484 11.75 6.27062 11.75H4.5C3.50544 11.75 2.55161 11.3549 1.84835 10.6517C1.14509 9.94839 0.75 8.99456 0.75 8C0.75 7.00544 1.14509 6.05161 1.84835 5.34835C2.55161 4.64509 3.50544 4.25 4.5 4.25H6.23156C6.64578 4.25 6.98156 4.58579 6.98156 5C6.98156 5.41421 6.64578 5.75 6.23156 5.75H4.5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01855 5C9.01855 4.58579 9.35434 4.25 9.76855 4.25H11.5001C12.4947 4.25 13.4485 4.64509 14.1518 5.34835C14.855 6.05161 15.2501 7.00544 15.2501 8C15.2501 8.99456 14.855 9.94839 14.1518 10.6517C13.4485 11.3549 12.4947 11.75 11.5001 11.75H9.72949C9.31528 11.75 8.97949 11.4142 8.97949 11C8.97949 10.5858 9.31528 10.25 9.72949 10.25H11.5001C12.0969 10.25 12.6692 10.0129 13.0911 9.59099C13.5131 9.16903 13.7501 8.59674 13.7501 8C13.7501 7.40326 13.5131 6.83097 13.0911 6.40901C12.6692 5.98705 12.0969 5.75 11.5001 5.75H9.76855C9.35434 5.75 9.01855 5.41421 9.01855 5Z" fill="#4B5563"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5332 8C4.5332 7.58579 4.86899 7.25 5.2832 7.25H10.7788C11.193 7.25 11.5288 7.58579 11.5288 8C11.5288 8.41421 11.193 8.75 10.7788 8.75H5.2832C4.86899 8.75 4.5332 8.41421 4.5332 8Z" fill="#4B5563"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div> -->
