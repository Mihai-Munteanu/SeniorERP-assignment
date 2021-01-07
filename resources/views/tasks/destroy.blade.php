<div class=" container mx-auto flex justify-end">
    <form action="/dashboard/{{$task->id}}" method="POST">
        @csrf
        @method('DELETE')

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2" type="submit">
            Delete
        </button>
    </form>
</div>
