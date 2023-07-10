<?php

$q =  'SELECT job_id, COUNT(*) FROM employees GROUP BY job_id';

$q  =  'SELECT department_id, AVG(salary) FROM employees GROUP BY department_id';

$q = 'SELECT job_id FROM employees WHERE commission_pct IS NOT Null';

$q = 'SELECT YEAR(birth_date)';

$q = "SELECT first_name FROM employees WHERE first_name = 'Lex'";

?>
