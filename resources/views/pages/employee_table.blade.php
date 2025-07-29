@extends('dashboard')

@section('content')



    <table id="pagination-table">
        <thead>
        <tr>
            <th>
                <span class="flex items-center">
                    Name
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Department
                </span>
            </th>
            <th data-type="date" data-format="Month YYYY">
                <span class="flex items-center">
                    Date Hired
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Employee Type
                </span>
            </th>
            <th>
                <span class="flex items-center">
                    Position
                </span>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $emp)

            <tr>
                <td class=" text-gray-900 whitespace-nowrap ">
                    {{ $emp->first_name }} {{ $emp->last_name }}
                </td>
                <td>{{ $emp->department->department_name ?? 'N/A' }}</td>
                <td>{{ $emp->employment->dateHired ?? 'N/A' }}</td>
                <td>{{ $type }}</td>
                <td>{{ $emp->department->position ?? 'N/A' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>





@endsection
