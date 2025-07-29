@auth
    <!doctype html>
<html data-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 ">
        <ul class="space-y-2 font-medium">


            <div onclick="dropdown('emp_submenu')" id="emp_tab" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-slate-200 hover:text-slate-700">
                <i class="fa-solid fa-user"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 font-bold">Employee </span>
                </div>
                <i class="fa-solid fa-chevron-down"></i>
            </div>

            <div class="text-left text-sm mt-2 w-4/5 max-h-96 opacity-100  mx-auto max-h-0 opacity-0 transition-all duration-300 ease-out overflow-hidden" id="emp_submenu">
                <h1 onclick="window.location.href='/Employee/Regular'" id="" class=" cursor-pointer p-2 hover:bg-slate-200 hover:text-slate-700 rounded-md mt-1">
                    Regulars
                </h1>
                <h1 onclick="window.location.href='/Employee/Probationary'" id=""
                    class=" cursor-pointer p-2 hover:bg-slate-200 hover:text-slate-700 rounded-md mt-1">
                    Probationary
                </h1>
                <h1 onclick="window.location.href='/Employee/Parttime'" id="" class=" w-full cursor-pointer p-2 hover:bg-slate-200 hover:text-slate-700 rounded-md mt-1">
                    Part time
                </h1>

                <h1 onclick="window.location.href='/Employee/Resigned'" id="" class=" cursor-pointer p-2 hover:bg-slate-200 hover:text-slate-700 rounded-md mt-1">
                    Resigned
                </h1>
            </div>

            <li>
                <a href="/EmployeeID" class=" flex items-center p-2 text-gray-900 rounded-lg ">
                    <i class="fa-solid fa-chess-rook"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Employee  ID</span>
                </a>
            </li>
            <li>


            <li>
                <a href="/Users" class=" flex items-center p-2 text-gray-900 rounded-lg ">
                    <i class="fa-solid fa-user"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">User</span>
                </a>
            </li>

            <li>
                <a href="/Forms/AddEmployee" class=" flex items-center p-2 text-gray-900 rounded-lg ">
                    <i class="fa-solid fa-user-plus"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Add Employee</span>
                </a>
            </li>
            <li>
                <a href="/logout" class="hover:bg-error flex items-center p-2 text-gray-900 rounded-lg ">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg ">
        @yield('content')
    </div>
</div>
<div id="notifBox" class="text-white" onclick="//resetAlertBox(this.id)">

</div>

@vite('resources/js/datatables.js')









</body>
</html>

@else


    <script>window.location = "/";</script>
@endauth
