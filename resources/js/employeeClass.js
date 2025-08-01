export default class Employee {
    constructor(baseurl) {
        this.baseurl = baseurl;
    }

    async getEmployees(type) {
        try {
            const response = await fetch(`${this.baseurl}/api/employees/${type}`, {
                method: 'GET'
            });

            if (!response.ok) {
                throw new Error(`HTTP status error: ${response.status}`);
            }

            return await response.json();

        } catch (e) {
            console.error('Fetch error:', e);
            throw e;
        }
    }
}


