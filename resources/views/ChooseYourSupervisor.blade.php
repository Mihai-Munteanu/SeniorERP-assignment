<x-template>

<h1 class="text-2xl text-center p-5">Please choose a Supervisor</h1>

    <div class="container mx-auto">
        @foreach($supervisions as $supervision)
            <div class="border border-gray-300 rounded-lg px-4 py-2 mb-2 flex items-center justify-between ">
                <div class="border border-gray-300 rounded-lg px-8 py-6 mb-8">
                    Name:
                    {{$supervision->name}}
                </div>
                <div class="border border-gray-300 rounded-lg px-8 py-6 mb-8">
                    <label class="block">
                        <span class="">Select</span>
                        <select class="form-select block w-full mt-1">
                            @foreach($supervisions as $supervision)
                                <option>{{$supervision->name}}</option>
                            @endforeach
                        </select>
                    </label>

                </div>
            </div>
        @endforeach
    </div>

</x-template>
