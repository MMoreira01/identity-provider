<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black">
                <div class="p-6 text-black-900 dark:text-black-100">
                    {{ __('My Courses:') }}
                </div>
            </div>

            <!-- Courses Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                <!-- Course 1 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black relative">
                    <div
                        class="p-2 absolute top-0 left-0 bg-yellow-500 text-white text-xs font-semibold rounded-tr-md rounded-bl-md">
                        1º year
                    </div>
                    <img src="https://www.nuformat.com/wp-content/uploads/2020/06/adobestock_342188628-scaled.jpeg"
                        alt="Course Image" class="w-full h-40 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Digital Identity Management</h3>
                        <div class="flex justify-between items-center mb-2">
                            <div class="text-sm text-gray-600">Status: 50%</div>
                            <div class="flex-grow h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-green-500" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black relative">
                    <div
                        class="p-2 absolute top-0 left-0 bg-yellow-500 text-white text-xs font-semibold rounded-tr-md rounded-bl-md">
                        1º year
                    </div>
                    <img src="https://www.nuformat.com/wp-content/uploads/2020/06/adobestock_342188628-scaled.jpeg"
                        alt="Course Image" class="w-full h-40 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Data Analysis and CyberIntelligence</h3>
                        <div class="flex justify-between items-center mb-2">
                            <div class="text-sm text-gray-600">Status: 75%</div>
                            <div class="flex-grow h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-green-500" style="width: 75%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-black relative">
                    <div
                        class="p-2 absolute top-0 left-0 bg-yellow-500 text-white text-xs font-semibold rounded-tr-md rounded-bl-md">
                        1º year
                    </div>
                    <img src="https://www.nuformat.com/wp-content/uploads/2020/06/adobestock_342188628-scaled.jpeg"
                        alt="Course Image" class="w-full h-40 object-cover object-center">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Social Engineering</h3>
                        <div class="flex justify-between items-center mb-2">
                            <div class="text-sm text-gray-600">Status: 65%</div>
                            <div class="flex-grow h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-green-500" style="width: 65%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
