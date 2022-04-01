SELECT EMPLOYEES.name, MAX(SALARY.salary) as highest_paid --use the max function on the salary in salary table to get the highest amount
FROM EMPLOYEES
INNER JOIN SALARY ON SALARY.id = EMPLOYEES.id --Inner join two tables to match any data
WHERE SALARY.salary = (SELECT MAX(SALARY.salary) from SALARY) --select the highest amount from salary table and match to the employees table that has the highest amount of salary through salary_id in employees table
GROUP BY name;