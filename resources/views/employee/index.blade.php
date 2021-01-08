<x-template>
    <x-table-configuration>

        <div class="text-2xl text-center p-5">
            Employee List
        </div>

        <body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">

        <!--Container-->
        <div class="container w-full mx-auto px-2">

			<!--Card-->
			 <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
				<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>
						<tr>
							<th data-priority="1">Employee name</th>
							<th data-priority="2">Employee e-mail</th>
							<th data-priority="3">Employee role</th>
						</tr>
					</thead>
					<tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a>{{$user->name}}</a>
                                </td>
                                <td>
                                    <a>{{$user->email}}</a>
                                </td>
                                <td>
                                    @if($user->role == "")
                                        <div class="text-sm text-red-300 text-center">
                                            <a href="/employee-list/edit/{{$user->id}}"><?php echo "please select a role" ?></a>
                                        </div>
                                    @else
                                        <div class="flex justify-around">
                                            <a>{{$user->role}}</a>
                                            <a href="/employee-list/edit/{{$user->id}}">change</a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
					</tbody>
				</table>
			</div>
        </div>
    </x-tabel-configuration>
</x-template>
