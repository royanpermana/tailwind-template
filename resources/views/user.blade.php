<x-app-layout>
    <div class="m-8">
        <div class="p-lg shadow-lg rounded-md">
            <div class="flex items-start justify-start">
                <div class="p-8">
                    <img class="h-24 w-24 rounded-md"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="p-8">
                    <div class="font-bold text-3xl pb-2">
                        Alec Thompson
                    </div>
                    <div class="font-bold text-xl text-gray-400">
                        CEO / Co-Founder
                    </div>
                </div>
            </div>
        </div>

        <div class="p-lg shadow-lg rounded-md">
            <div class="p-8">
                <div class="font-semibold text-lg pb-2">
                    Basic info
                </div>
                <div class="">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-500">First
                                Name</label>
                            <div class="mt-2">
                                <input id="first-name" name="first-name" type="text" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-500">Last
                                Name</label>
                            <div class="mt-2">
                                <input id="last-name" name="last-name" type="text" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-2 mb-4">
                        <div>
                            <label for="gender" class="block text-sm font-medium leading-6 text-gray-500">I'm</label>
                            <div class="mt-2">
                                <select id="gender" name="gender" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="" class="">Male</option>
                                    <option value="" class="">Female</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="month" class="block text-sm font-medium leading-6 text-gray-500">Birth
                                Date</label>
                            <div class="mt-2">
                                <select id="month" name="month" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option value="" class="">January</option>
                                    <option value="" class="">February</option>
                                    <option value="" class="">March</option>
                                    <option value="" class="">April</option>
                                    <option value="" class="">May</option>
                                    <option value="" class="">June</option>
                                    <option value="" class="">July</option>
                                    <option value="" class="">August</option>
                                    <option value="" class="">September</option>
                                    <option value="" class="">October</option>
                                    <option value="" class="">November</option>
                                    <option value="" class="">December</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="date" class="block text-sm font-medium leading-6 text-white">Last
                                Name</label>
                            <div class="mt-2">
                                <select id="date" name="date" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="year" class="block text-sm font-medium leading-6 text-white">Last
                                Name</label>
                            <div class="mt-2">
                                <select id="year" name="year" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
