<x-template>
    <x-table-configuration>

        <div class="text-2xl text-center p-5">
            My tasks
        </div>

        <body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">

        <!--Container-->
        <div class="container w-full mx-auto px-2">

			<!--Card-->
			 <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
				<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>
						<tr>
							<th data-priority="1">Title</th>
							<th data-priority="2">Task description</th>
							<th data-priority="3">Author</th>
							<th data-priority="4">Due_date</th>
							<th data-priority="5">Importance</th>
							<th data-priority="6">Delete</th>
						</tr>
					</thead>
					<tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>
                                    <a>{{$task->title}}</a>
                                </td>
                                <td>
                                    <a>{{$task->body}}</a>
                                </td>
                                <td>
                                    <a>{{$task->user->name}}</a>
                                </td>
                                <td>
                                    <a>{{$task->due_date->format('Y-m-d')}}</a>
                                </td>
                                <td>
                                    <a>{{$task->importance}}</a>
                                </td>
                                <td>
                                    @include('tasks.destroy')
                                </td>
                            </tr>
                        @endforeach
					</tbody>
				</table>
			</div>
        </div>
    </x-tabel-configuration>
</x-template>
