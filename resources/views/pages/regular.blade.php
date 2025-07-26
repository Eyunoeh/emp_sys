@extends('dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Regular Employees</h1>

    <table class="min-w-full bg-white border">
        <thead>
        <tr>
            <th class="py-2 px-4 border">ID</th>
            <th class="py-2 px-4 border">Name</th>
            <th class="py-2 px-4 border">Position</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="py-2 px-4 border">1</td>
            <td class="py-2 px-4 border">John Doe</td>
            <td class="py-2 px-4 border">Engineer</td>
        </tr>
        <tr>
            <td class="py-2 px-4 border">2</td>
            <td class="py-2 px-4 border">Jane Smith</td>
            <td class="py-2 px-4 border">Accountant</td>
        </tr>
        </tbody>
    </table>
@endsection
