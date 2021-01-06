<x-template>

<h1 class="text-2xl text-center">Please choose the roles</h1>

  <div class="container mx-auto">

        @foreach($supervisions as $supervision)
            <div class="border border-gray-300 rounded-lg px-8 py-6 mb-8 flex items-center justify-between ">
                <div class="border border-gray-300 rounded-lg px-8 py-6 mb-8">
                    Name:
                    {{$supervision->name}}
                </div>
                <div class="border border-gray-300 rounded-lg px-8 py-6 mb-8">
                    <p class="text-red-500"> dropdown list pentru roluri;</p>
                </div>
            </div>
        @endforeach
  </div>

</x-template>
