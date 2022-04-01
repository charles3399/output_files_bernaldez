SELECT * FROM EMPLOYEES
WHERE date_hired BETWEEN '2017-01-01' AND '2018-12-31' --We'll use the range to find employees that are hired from 2017 to 2018
ORDER BY date_hired ASC; --Order by ascending in date