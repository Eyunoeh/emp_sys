import Employee from "./employeeClass.js";


let employee = new Employee('http://127.0.0.1:8000')
const urlParams = new URLSearchParams(window.location.search);
const employeeID = urlParams.get('employee');
document.addEventListener('DOMContentLoaded', async function () {
    let emp_form = document.getElementById('editEmployee');
    const result = await employee.getEmployee(employeeID);
    let emp_details = result.employee[0]
    console.log(emp_details)
    emp_form.querySelector('input[name="first_name"]').value = emp_details['first_name'];
    emp_form.querySelector('input[name="last_name"]').value = emp_details['last_name'];
    emp_form.querySelector('input[name="middle_name"]').value = emp_details['middle_name'];
    emp_form.querySelector('input[name="birth_date"]').value = emp_details['birth_date'];
    emp_form.querySelector('input[name="gender"]').value = emp_details['gender'];
    emp_form.querySelector('input[name="marital_status"]').value = emp_details['marital_status'];
    emp_form.querySelector('input[name="contact_number"]').value = emp_details['contact_number'];
    emp_form.querySelector('input[name="address"]').value = emp_details['address'];
    emp_form.querySelector('select[name="employment_status"]').value = emp_details.employment['employment_status'];
    emp_form.querySelector('input[name="employeeID"]').value = emp_details.employment['employeeID'];
    emp_form.querySelector('input[name="dateHired"]').value = emp_details.employment['dateHired'];
    emp_form.querySelector('input[name="regularization"]').value = emp_details.employment['regularization'];
    emp_form.querySelector('input[name="contract_end"]').value = emp_details.employment['contract_end'];
    emp_form.querySelector('input[name="department_name"]').value = emp_details.department['department_name'];
    emp_form.querySelector('input[name="position"]').value = emp_details.department['position'];
    emp_form.querySelector('input[name="designation"]').value = emp_details.department['designation'];
    emp_form.querySelector('input[name="companyEmail"]').value = emp_details.employment['companyEmail'];
    emp_form.querySelector('input[name="alternativeEmail"]').value = emp_details.employment['alternativeEmail'];
    emp_form.querySelector('input[name="Rate"]').value = emp_details.employment['Rate'];
    emp_form.querySelector('input[name="origEmpID"]').value = employeeID;
    })

