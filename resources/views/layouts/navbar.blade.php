<div class="px-3 py-2 flex space-x-4">
    <a href="/dashboard" class="{{ Request::path() == 'dashboard' ? 'bg-gray-900 text-white' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
    <a href="/tasks_created_by_me" class="{{ Request::path() == 'tasks_created_by_me' ? 'bg-gray-900 text-white' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tasks created by me</a>
    <a href="/tasks/create" class="{{ Request::path() == 'tasks/create' ? 'bg-gray-900 text-white' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Create task</a>
    <a href="/employees" class="{{ Request::path() == 'employees' ? 'bg-gray-900 text-white' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Employees</a>
</div>
