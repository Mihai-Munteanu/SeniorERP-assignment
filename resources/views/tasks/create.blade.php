<x-template>
    <div class="container mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6 pt-10">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-2xl font-medium leading-6 text-gray-900">Create a task</h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="/tasks/create" method="POST">
                @csrf

                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid ">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="task" class="block text-sm font-medium text-gray-700">
                                    Task
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="task" id="task" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="please insert your task" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Description
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <textarea id="description" name="description" rows="5" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="please provide more details" required></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="allocated_to" class="block text-sm font-medium text-gray-700">
                                Allocated to
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select type="text" id="allocated_to" name="allocated_to" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" required>
                                    @foreach(auth()->user()->subordinate() as $user)
                                        <option value="{{$user->id}}">{{$user->name}} - {{$user->role}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                        <label for="due_date" class="block text-sm font-medium text-gray-700">
                                Due date
                            </label>

                            <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="date" name="due_date" id="due_date" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" required>
                            </div>
                        </div>
                        <div>
                            <label for="importance" class="block text-sm font-medium text-gray-700">
                                Importance
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select type="text" name="importance" id="importance" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" required>
                                    <option>Low</option>
                                    <option>Medium</option>
                                    <option>High</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
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
</x-template>
