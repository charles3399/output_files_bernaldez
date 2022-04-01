let mainData = document.querySelector('#fetch-data')

const generateData = (data) => {
    data.employees.forEach((employee) => {
      const newElement = document.createElement('div');
      const employeeDetail = `
      <div style="border: 2px solid #000;padding:15px; border-radius: 10px; text-align:left;">
        <label style="display:block;">ID</label>
        <input type="text" value="${employee.id}" style="padding:5px; border-radius:5px;" disabled>
        <label style="display:block;">First Name</label>
        <input type="text" value="${employee.firstName}" style="padding:5px; border-radius:5px;" disabled>
        <label style="display:block;">Last Name</label>
        <input type="text" value="${employee.lastName}" style="padding:5px; border-radius:5px;" disabled>
        <label style="display:block;">Birthday</label>
        <input type="text" value="${employee.birthday}" style="padding:5px; border-radius:5px;" disabled>
        <label style="display:block;">Gender</label>
        <input type="text" value="${employee.gender.male ? `Male` : `Female`}" style="padding:5px; border-radius:5px;" disabled>
        <label style="display:block;">Known Language</label>
        <input type="text" value="${employee.knownLanguage}" style="padding:5px; border-radius:5px;" disabled>
      </div>
      `;
      newElement.innerHTML = employeeDetail;
      mainData.appendChild(newElement);
    });
  };


fetch("./sample.json")
.then(response => response.json())
.then(data => generateData(data))