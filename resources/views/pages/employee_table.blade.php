@extends('dashboard')

@section('content')



    <table id="pagination-table">
        <thead>
        <tr>
            <th>
                <span class="flex items-center">
                    ID
                </span>
            </th>
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
            <th>
                <span class="flex items-center">
                    Action
                </span>
            </th>
        </tr>
        </thead>
        <tbody id="employee_table">
      {{--  @foreach($employees as $emp)

            <tr>
                <td class=" text-gray-900 whitespace-nowrap ">
                    {{ $emp->employment->employeeID ?? 'N/A'}}
                </td>
                <td class=" text-gray-900 whitespace-nowrap ">
                    {{ $emp->first_name }} {{ $emp->last_name }}
                </td>

                <td>{{ $emp->department->department_name ?? 'N/A' }}</td>
                <td>{{ $emp->employment->dateHired ?? 'N/A' }}</td>
                <td>{{ $type }}</td>
                <td>{{ $emp->department->position ?? 'N/A' }}</td>
                <td><a href="/Forms/EditEmployee?employee={{$emp->employment->employeeID}}" class="cursor-pointer"><i class="fa-solid fa-arrow-right"></i></a></td>
            </tr>
        @endforeach--}}
        </tbody>
    </table>



@vite('resources/js/employeeTable.js')

@endsection
