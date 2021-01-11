<div class=" container mx-auto">
   @if($task->user_id == auth()->id())
        <form action="/dashboard/{{$task->id}}" method="POST">
            @csrf
            @method('DELETE')

            <button class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
                Delete
            </button>
        </form>
    @else
            <p>No permision</p>
    @endif
</div>
