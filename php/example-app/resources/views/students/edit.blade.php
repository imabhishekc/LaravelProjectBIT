<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('student.index')}}">Student info</a>
        <form action="{{route('students.edit')}}" method="post">
            {{@csrf_field()}}
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="address" placeholder="Enter your address">
            <input type="text" name="phone" placeholder="Enter your phone">
            <button type="submit">Submit</button>
        </form>
            </div>
        </div>
    </div>
</x-app-layout>
