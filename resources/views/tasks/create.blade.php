<x-template>
    <div class="container mx-auto">
        <div class="text-2xl text-center p-5">Create a Task</div>

        <div class="">
            <form method="POST" action="/create-a-task" class="">
            @csrf
                <div class="">
                    <label for="title">
                        Title:
                    </label>
                    <input type="text" class="form-control w-full border border-gray-300 rounded-lg" id="title" name="title"  value="{{ old('title')}}" required>
                </div>
                <div class="pt-2">
                    <label for="body">
                        Body:
                    </label>
                    <textarea name="body" id="body" class="w-full border border-gray-300 rounded-lg" placeholder="please provide more details" rows="8" required>{{old('body')}}</textarea>
                </div>
                <div class="pt-2">
                    <label for="allocated_to">
                        Allocated to:
                    </label>
                    <div class="text-red-300 text-sm">
                        @if(auth()->user()->role == "")
                        * you will be able to create and alocate tasks after you have a role
                        @else
                    </div>
                    <select type="text" class="form-control w-full border border-gray-300 rounded-lg" id="allocated_to" name="allocated_to">
                            @foreach(auth()->user()->subordinate() as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                    </select>
                        @endif
                </div>
                <div class="pt-2">
                    <label for="due_date">
                        Due date:
                    </label>
                    <input type="unsignedBigInteger" class="form-control w-full border border-gray-300 rounded-lg" id="due_date" name="due_date" placeholder="dd.mm.yyyy" value="{{ old('due_date') }}" required>
                </div>
                <div class="pt-2">
                    <label for="importance">
                        Importance:
                    </label>
                    <select type="text" class="form-control w-full border border-gray-300 rounded-lg" id="importance" name="importance"  value="{{ old('importance') }}" required>
                        <option>Low</option>
                        <option>Medium</option>
                        <option>High</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2" type="submit">
                        Publish
                    </button>
                </div>

                @if(count($errors))
                    <ul class="text-sm text-red-500">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </div>


    <p class="text-sm">
        *The role can be chosen by accessing the Employee list
    </p>

</x-template>
