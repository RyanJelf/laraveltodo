<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex-auto text-2xl ml-4 mb-4 ">
                    <div class="flex-auto text-2xl mb-4">Tasks List</div>

                    <div class="flex-auto text-2xl text-green-400 ">
                        <a href="/task">Add new Task</a>
                    </div>
                    
                </div>
                <table class="w-full text-md rounded mb-4">
                    <thead>
                    <tr class="border-b">
                        <th class="text-center p-3 px-5">Task</th>
                        <th class="text-center p-3 px-5">Actions</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->tasks as $task)
                        <tr class="text-center p-3 px-5">
                            <td>
                                {{$task->description}}
                            </td>
                            <td >
                                
                                <a href="/task/{{$task->id}}" name="edit" >Edit</a>
                                <form action="/task/{{$task->id}}">
                                    <button type="submit" name="delete" formmethod="POST">Delete</button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    </x-app-layout>