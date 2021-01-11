<x-template>
    <div class="container mx-auto">
        <div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <h1 class="text-2xl text-center p-5">Please choose a Role</h1>
                    <form method="POST" action="/employee/{{$user->id}}/edit" class="mt-8 space-y-6">
                        @csrf
                        @method('PATCH')

                        <div>
                            <label for="name" class="text-sm font-medium text-gray-700">
                                Name: {{$user->name}}
                            </label>
                        </div>
                        <div>
                            <label for="email" class="text-sm font-medium text-gray-700">
                                E-mail: {{$user->email}}
                            </label>
                        </div>
                        <div>
                            <label for="" class="text-sm font-medium text-gray-700">
                                Current role: {{$user->role}}
                            </label>
                        </div>
                        <div>
                            <label for="role" class="text-sm font-medium text-gray-700">
                                Change the role:

                                <select name="role" id="role" class="form-select" value="{{$user->role}}">
                                    <option>Junior</option>
                                    <option>Senior</option>
                                    <option>Manager</option>
                                </select>
                            </label>
                        </div>

                        <div class="container mx-auto flex justify-end">
                            <div class="inline-flex justify-center mr-5 py-2 px-4 mt-5 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <a href="/employees">
                                    Cancel
                                </a>
                            </div>
                            <button class="inline-flex justify-center py-2 px-6 mt-5 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="submit">
                                Save
                            </button>

                            @if(count($errors))
                                <ul class="text-sm text-red-500">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-template>


