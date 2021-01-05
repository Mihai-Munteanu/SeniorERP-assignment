

<h1 class="text-red-500">My Page</h1>

<h3 class="text-red-500">My tasks</h3>

    @foreach($tasks as $task)
        {{$task->title}}
        </br>
        {{$task->body}}
        </br>
        {{$task->user->name}}
        </br>
    @endforeach

</br>

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="py-5">
                    <h1> Create a Task</h1>
                </div>
                <div class="">
                    <form method="POST" action="/tasks" class="">
                    @csrf
                        <div class="form-class">
                            {{-- <label for="importance_id">Choose the importance level</label>
                            <select name="importance_id" id="importance_id" class="form-control" required>
                                <option value="">Choose one</option>
                                @foreach($importances as $importance)

                                    <option value="{{$importance->id}}" {{old('importance_id')==$importance->id ? 'selected' : '' }} >{{$importance->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="pt-5"> --}}
                            <label for="title">
                                Title:
                            </label>
                            <input type="text" class="form-control" id="title" name="title"  value="{{ old('title') }}" required>
                        </div>
                        <div class="pt-2">
                            <label for="body">
                                Body:
                            </label>
                            <textarea name="body" id="body" class="form-control" rows="8" placeholder="what you would like to write" required>
                                {{old('body')}}
                            </textarea>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2" type="submit">
                                Publish
                            </button>
                        </div>
                        @if(count($errors))
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        <@endif
                    </form>
                </div>
            </div>
        </div>
    </div>

