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
    <div class="flex flex-col w-screen h-screen overflow-auto text-gray-700 ">
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



        <dh-component id="taskform" class="hidden">

<div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 " id="modal">
    <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
        <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
            <div class="w-full flex justify-start text-gray-600 mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                    <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                </svg>
            </div>
            <form action="<?php echo URLROOT; ?>tasks/addtask" method="post">
                <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Enter Task Info :</h1>
                <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Task Name : </label>
                <input id="" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Task Description : </label>
                <input id="" name="desc" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                <input id="" value="<?php echo $_GET['userid']; ?>" name="userid" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border hidden" placeholder="" />
                <input id="" value="<?php echo $_GET['proid']; ?>" name="proid" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border hidden" placeholder="" />

                <label for="expiry" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">DeadLine : </label>
                <div class="relative mb-5 mt-2">
                    <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="4" y="5" width="16" height="16" rx="2" />
                            <line x1="16" y1="3" x2="16" y2="7" />
                            <line x1="8" y1="3" x2="8" y2="7" />
                            <line x1="4" y1="11" x2="20" y2="11" />
                            <rect x="8" y="15" width="2" height="2" />
                        </svg>
                    </div>
                    <input id="" name="deadline" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="date" />
                </div>
                <div class="flex items-center justify-start w-full">
                    <input name="add" value="Submit" type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">
                </div>
            </form>
            <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600 " id="close" aria-label="close modal" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>
        </div>
    </div>
</div>
</dh-component>
        <div class="bg-blue w-full h-screen font-sans">


            <div class="flex px-4 pb-8 " id="tododiv">
                <div class="rounded bg-grey-light items-center  flex-no-shrink w-64 p-2 mr-3">
                    <div class="flex justify-between py-1">
                        <h1 class="text-sm">To Do</h1>
                    </div>
                
                   
                
                <button id="addtask" class="flex items-center h-10 px-4 ml-10 text-sm text-black bg-indigo-700 rounded-full focus:outline-none focus:ring">Add Task</button>
            </div>
            <div class="rounded bg-grey-light flex-no-shrink w-64 p-2 mr-3" id="doingdiv">
                    <div class="flex justify-between py-1">
                        <h1 class="text-sm">Doing</h1>
                    </div>
                    
            </div>
            <div class="rounded bg-grey-light flex-no-shrink w-64 p-2 mr-3" id="donediv">
                    <div class="flex justify-between py-1">
                        <h1 class="text-sm">Done</h1>
                        
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
<script>
let tododiv = document.getElementById('tododiv');
let doingdiv = document.getElementById('doingdiv');
let donediv = document.getElementById('donediv');
let taskform = document.getElementById('taskform');
let addtask = document.getElementById('addtask');
let close = document.getElementById('close');

addtask.addEventListener('click' , e=>{
    taskform.classList.remove('hidden');
})
close.addEventListener("click" ,e=>{
    taskform.classList.add('hidden');
})
</script>             