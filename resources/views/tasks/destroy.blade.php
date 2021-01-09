<div class=" container mx-auto">
   @if($task->user_id == auth()->id())
        <form action="/dashboard/{{$task->id}}" method="POST">
            @csrf
            @method('DELETE')

            <button class="" type="submit">
                <a class="hover:underline">Delete</a>
            </button>
        </form>
    @else
        <p>No permision</p>
    @endif
</div>
