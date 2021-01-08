<x-template>

    <h1 class="text-2xl text-center p-5">Please choose a Role</h1>

    <form method="POST" action="/employee-list/edit/{{$user->id}}" class="">
        @csrf
        @method('PATCH')

        <div class="container mx-auto">
            <table class="table-auto border border-gray-300 rounded-lg w-full">
                <thead class="text-center bg-gray-200 text-xl">
                    <tr>
                    <th>Employee name</th>
                    <th>Employee e-mail</th>
                    <th>Employee role</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>
                            <a>{{$user->name}}</a>
                        </td>
                        <td>
                            <a>{{$user->email}}</a>
                        </td>
                        <td class="">
                            @if($user->role == "")
                                <label class="text-sm text-blue-300">
                                    please select a role
                                </label>
                                <div class="">
                                    <select name="role" id="role" class="form-select ">
                                        <option>Junior</option>
                                        <option>Senior</option>
                                        <option>Manager</option>
                                    </select>
                                </div>
                            @else
                                <select name="role" id="role" class="form-select" value="{{$user->role}}">
                                    <option>Junior</option>
                                    <option>Senior</option>
                                    <option>Manager</option>
                                </select>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
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


