document.getElementById('gender').addEventListener('change', function (){

    let gender_inp = `
           <input type="text" onkeyup="this.value = this.value.toUpperCase()"  name="gender" id="gender" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="gender" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Gender please specify</label>
        `
    if (this.value === 'OTHERS') {
        document.getElementById('genderoption').innerHTML = gender_inp;
    }
})

document.getElementById('marital_stat').addEventListener('change',function(){
    let marital_inp = `
           <input type="text" onkeyup="this.value = this.value.toUpperCase()"  name="marital_status" id="marital_stat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="marital_status" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Marital Status please specify</label>
        `
    if ( this.value === 'OTHERS') {
        document.getElementById('maritaloption').innerHTML = marital_inp;
    }
});


document.getElementById('department').addEventListener('change', function () {
    const departmentHTML = `
        <input type="text" onkeyup="this.value = this.value.toUpperCase()" name="department_name" id="department" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="department" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Department please specify</label>
    `;

    if (this.value === 'OTHERS') {
        document.getElementById('departmentoption').innerHTML = departmentHTML;
    }
});





