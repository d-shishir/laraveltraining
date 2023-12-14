<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Book Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1 class="text-4xl">Create New Borrow</h1>

    <div class="mt-10">
        <form class="max-w-sm mx-auto" action="{{ route('backend.borrow.store') }}" method="post">
            @csrf
            <div class="mb-5">
                <label for="studentId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student
                    Id</label>
                <input type="number" id="studentId"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="studentId" required>
            </div>
            <div class="mb-5">
                <label for="bookId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book Id
                    Count</label>
                <input type="number" id="bookId" name="bookId"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div class="mb-5">
                <label for="takenDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Taken
                    Date</label>
                <input type="date" id="takenDate" name="takenDate"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div class="mb-5">
                <label for="broughtDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brought
                    Date
                    Id</label>
                <input type="date" id="broughtDate" name="broughtDate"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            {{-- <div class="mb-5">
                <label for="typeId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type
                    Id</label>
                <input type="number" id="typeId" name="typeId"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div> --}}

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                Book</button>
        </form>
    </div>

</body>

</html>
