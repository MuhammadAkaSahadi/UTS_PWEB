@extends('admin.layouts.app')


@section('title', 'Contact')

@section('content')
@include('admin.layouts.navbar')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Contact List</h1>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border-b border-gray-300 text-left">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left">Occupation</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $people = [
                        ['name' => 'John Doe', 'occupation' => 'Student'],
                        ['name' => 'Jane Smith', 'occupation' => 'Employee'],
                        ['name' => 'Alan Brown', 'occupation' => 'Professor']
                    ];
                @endphp

                @foreach($people as $person)
                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                        <td class="py-2 px-4">{{ $person['name'] }}</td>
                        <td class="py-2 px-4">{{ $person['occupation'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection