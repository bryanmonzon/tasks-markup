@extends('_layouts.master')

@section('body')
<h1 class="text-xl">Tasks</h1>

<div class="mt-12 border-b border-grey-lighter">
    <nav>
        <ul class="list-reset flex">
            <li class="mr-8 mb-2">
                <a href="#" class="text-green font-semibold border-b border-green pb-3">
                    All Tasks
                </a>
            </li>
            <li class="mr-8 mb-2">
                <a href="#" class="text-grey hover:text-green">
                    My Tasks
                </a>
            </li>
            <li class="mb-2">
                <a href="#" class="text-grey hover:text-green">
                    Unassigned
                </a>
            </li>
        </ul>
    </nav>
</div>

<div class="mt-16 flex justify-between">
    <div class="flex">
        <button class="border border-grey rounded text-grey-dark px-6 py-3 text-sm mr-2 hover:border-green hover:text-white hover:bg-green tracking-wide">
            Completed
        </button>
        <button class="border border-grey rounded text-grey-dark px-6 py-3 text-sm hover:border-green hover:text-white hover:bg-green tracking-wide">
            Incomplete
        </button>
    </div>
    <div>
        <button class="rounded text-white bg-green hover:bg-green-dark shadow px-6 py-3 text-sm flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="h-4 w-4 fill-current"><path d="M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z"/></svg>

            <span class="ml-2 tracking-wide">New Task</span>
        </button>
    </div>
</div>

<div class="mt-4">
    <div class="flex items-center shadow mb-12 bg-grey-lightest">
        <div class="py-6 px-8">
            <input type="checkbox">
        </div>
        <div class="flex flex-col pt-4 pb-2 w-2/3">
            <div class="text-xs text-grey uppercase tracking-tight">
                <span class="mr-1">CLL</span> <span class="text-green">Completed!</span>
            </div>
            <a href="#" class="text-lg pb-4 pr-5 font-semibold text-grey hover:text-green">Show homepage to Claudia in Basecamp, but no scope for feedback (Client agreed to this)</a>
            <div class="text-xs">
                <a href="#" class="text-grey mr-4">4 comments</a>
                <span class="text-grey mr-4">Assigned to <a href="#" class="text-green hover:underline">Weston</a></span>
                <span class="text-grey">Created by Jacquie on Fri. June 22, 2018</span>
            </div>
        </div>
        <div class="flex flex-col mx-8 w-1/6 pl-8">
            <span class="text-xs text-grey">Hours Scoped</span>
            <span class="text-2xl">8</span>
        </div>
        <div class="flex flex-col mx-8 w-1/5">
            <span class="text-xs text-grey">Due</span>
            <span class="xl:text-2xl lg:text-lg">Tue Jun 26, 2018</span>
        </div>
    </div>

    <div class="flex items-center mb-12 bg-red">
        <div class="py-6 px-8">
            <input type="checkbox">
        </div>
        <div class="flex flex-col pt-4 pb-2 w-2/3">
            <div class="text-xs text-white uppercase tracking-tight">
                <span class="mr-1">Kindness</span> <span>0%</span>
            </div>
            <a href="#" class="text-lg pb-4 pr-5 font-semibold text-white hover:text-red-lightest">Tell Anthony when the Tracking Notes are updated in Airtable (he has access to this already) and let him know to start tracking this on a weekly basis and provide monthly updates</a>
            <div class="text-xs">
                <a href="#" class="text-white mr-4">4 comments</a>
                <span class="text-white mr-4">Assigned to <a href="#" class="text-red-lightest hover:underline">Weston</a></span>
                <span class="text-white">Created by Jacquie on Fri. June 22, 2018</span>
            </div>
        </div>
        <div class="flex flex-col mx-8 w-1/6 pl-8">
            <span class="text-xs text-white">Hours Scoped</span>
            <span class="text-2xl text-white">8</span>
        </div>
        <div class="flex flex-col mx-8 w-1/5">
            <span class="text-xs text-white">Due</span>
            <span class="xl:text-2xl lg:text-lg text-white">Tue Jun 26, 2018</span>
        </div>
    </div>

    <a href="#" class="bg-grey-lightest text-sm hover:bg-grey-lighter w-full block text-grey hover:text-grey-dark text-center py-2 border border-grey-light hover:shadow-inner rounded">
        Load More
    </a>
</div>
@endsection
