SELECT EMPLOYEES.name, DEPARTMENTS.department, EMPLOYEES.date_hired FROM EMPLOYEES
INNER JOIN DEPARTMENTS ON DEPARTMENTS.id = EMPLOYEES.department_id --inner join departments so we can identify the department value
WHERE DEPARTMENTS.department = 'IT' AND EMPLOYEES.date_hired >= '2018-01-01';

--get all employees where the department is IT and the date hired is 2018 onwards