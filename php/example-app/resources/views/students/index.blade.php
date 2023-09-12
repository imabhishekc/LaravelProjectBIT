<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(session('status'))
                <div class="alert" style="color:red;">
                {{session('status')}}
                </div>
                @endif
                @foreach($students as $student)
                <span>{{$student->name}}</span> from <span>{{$student->address}}</span> 
                <a href="{{route('students.delete',$student->id)}}" style="color:red; margin-left: 30px;">Delete</a>
                <a href="{{route('students.edit',$student->id)}}" style="color:green; margin-left: 60px;">Edit data</a><br>
                @endforeach

                <a href="#">Add Students</a>
            </div>
        </div>
    </div>
</x-app-layout>
