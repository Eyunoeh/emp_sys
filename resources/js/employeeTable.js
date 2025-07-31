import Employee from './employeeClass.js';
import dataTablePagination from './datatables.js';

const employee = new Employee('http://127.0.0.1:8000');
document.addEventListener('DOMContentLoaded', async function () {
    const type = window.location.pathname.split('/')[2] || 'Regular';
    const result = await employee.getEmployees(type);
    let emp_table = '';

    for (const emp of result.data) {
        emp_table += `
            <tr>
                <td class="text-gray-900 whitespace-nowrap">
                    ${emp.employment?.employeeID ?? 'N/A'}
                </td>
                <td class="text-gray-900 whitespace-nowrap">
                    ${emp.first_name} ${emp.last_name}
                </td>
                <td>${emp.department?.department_name ?? 'N/A'}</td>
                <td>${emp.employment?.dateHired ?? 'N/A'}</td>
                <td>${result.type}</td>
                <td>${emp.department?.position ?? 'N/A'}</td>
                <td>
                    <a href="/Forms/EditEmployee?employee=${emp.employment?.employeeID}" class="cursor-pointer">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </td>
            </tr>
        `;
    }
    document.getElementById('employee_table').innerHTML = emp_table;
    dataTablePagination();


});

