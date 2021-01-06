<x-template>

    <div class="text-2xl text-center p-5">
        My tasks
    </div>


    @foreach($tasks as $task)
        <div class=" p-2">
            <div class="border border-gray-300 rounded-lg flex items-center justify-between ">
            Title:
            {{$task->title}}
            </div>
            <div class="border border-gray-300 rounded-lg flex items-center justify-between ">
            Description:
            {{$task->body}}
            </div>
            <div class="border border-gray-300 rounded-lg flex items-center justify-between ">
            Author:
            {{$task->user->name}}
                </div>
        </div>
    @endforeach

</x-template>
