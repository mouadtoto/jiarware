<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Component Start -->
    <div class="flex flex-col w-screen h-screen overflow-auto text-gray-700 bg-gradient-to-tr from-rose-600  to-pink-200">
        <div class="flex  items-center flex-shrink-0 w-full h-16 px-10 bg-gray-800">
            <svg class="w-8 h-8 text-indigo-600 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
            <input class="flex items-center h-10 px-4 ml-10 text-sm bg-gray-200 rounded-full focus:outline-none focus:ring" type="search" placeholder="Search for anything…">
            <div class="ml-10">
                <a class="mx-2 text-sm font-semibold text-indigo-700" href="#">Projects</a>
            </div>
        </div>
        <div class="px-10 mt-6">
            <h1 class="text-2xl font-bold">Project Board</h1>
        </div>







        <div class="bg-blue w-full h-screen font-sans">


            <div class="flex px-4 pb-8 items-start overflow-x-scroll">
                <div class="rounded bg-grey-light items-center  flex-no-shrink w-64 p-2 mr-3">
                    <div class="flex justify-between py-1">
                        <h1 class="text-sm">To Do</h1>
                    </div>

                   
                <input type="text" class="flex items-center h-10 px-4 ml-10 text-sm bg-gray-200 rounded-full focus:outline-none focus:ring">
                <button class="">Add Task</button>
                </div>
                <div class="rounded bg-grey-light flex-no-shrink w-64 p-2 mr-3">
                    <div class="flex justify-between py-1">
                        <h1 class="text-sm">Doing</h1>
                        
                    </div>
                    
                </div>
                <div class="rounded bg-grey-light flex-no-shrink w-64 p-2 mr-3">
                    <div class="flex justify-between py-1">
                        <h1 class="text-sm">Done</h1>
                        
                    </div>
                  
                </div>
            </div>
        </div>




    </div>




</body>

</html>




<!-- 

<div class="flex flex-col pb-2 overflow-auto">
                    <div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
                        <button class="absolute top-0 right-0 flex items-center justify-center hidden w-5 h-5 mt-3 mr-2 text-gray-500 rounded hover:bg-gray-200 hover:text-gray-700 group-hover:flex">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </button>
                        <span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full"></span>
                        <h4 class="mt-3 text-sm font-medium"></h4>
                        <div class="flex items-center w-full mt-3 text-xs font-medium text-gray-400">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-1 leading-none">Dec 12</span>
                            </div>
                        </div>
                    </div>   
            </div>
             -->