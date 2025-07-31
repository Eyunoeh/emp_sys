let today = new Date().toISOString().split('T')[0];

let date_hired = document.getElementById("date_hired");
let regularization = document.getElementById("regularization");
let endofcontract = document.getElementById("end_contract");
let birthdate = document.getElementById("birthdate");

date_hired.setAttribute("max", today);

birthdate.setAttribute("max", today);

date_hired.addEventListener("change", function () {
    regularization.setAttribute("min", date_hired.value);
    endofcontract.setAttribute("min", date_hired.value);
});
