<x-template>

    <h1 class="text-2xl text-center p-5">Please choose a Role</h1>

    <form method="POST" action="/choose-the-roles/{{$user->id}}" class="">
        @csrf
        @method('PATCH')

        <div class="container mx-auto">
            @foreach($users as $user)
                <div class="border border-gray-300 rounded-lg px-4 py-2 mb-2 flex items-center justify-between ">
                    <div class="border border-gray-300 rounded-lg px-8 py-6 mb-8">
                        <label for="name" name="name" id="name" class="block">
                            Name:
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        </label>
                    </div>
                    <div class="border border-gray-300 rounded-lg px-8 py-6 mb-8">
                            Select
                        <select name="role" id="role" class="form-select block w-full mt-1">
                            <option>Junior</option>
                            <option>Senior</option>
                            <option>Manager</option>
                        </select>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container mx-auto flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2" type="submit">
                Submit
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
</x-template>


