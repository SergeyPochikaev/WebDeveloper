-- create
CREATE TABLE EMPLOYEE (
  empId INT PRIMARY KEY,
  birth_date DATE NOT NULL,
  first_name TEXT NOT NULL,
  last_name TEXT NOT NULL,
  gender TEXT NOT NULL,
  age INT NOT NULL,
  address TEXT NOT NULL
);
CREATE TABLE DEPT_EMP (
  -- empId INTEGER PRIMARY KEY,
  deptId INT KEY,
  from_date DATE NOT NULL,
  to_date DATE NOT NULL,
  dept TEXT NOT NULL
);

-- insert
INSERT INTO EMPLOYEE VALUES (0001, NOW(), 'Сергей      ', 'Почикаев', 'M',41,'Красноярск');
INSERT INTO EMPLOYEE VALUES (0002, NOW(), 'Анна        ', 'Савлепова', 'F',38,'Красноярск');
INSERT INTO EMPLOYEE VALUES (0003, NOW(), 'Денис       ', 'Горелов  ', 'M',42,'Красноярск');
INSERT INTO DEPT_EMP VALUES (2, NOW(), NOW(), 'Sales');
INSERT INTO DEPT_EMP VALUES (1, NOW(), NOW(), 'unemployed');
INSERT INTO DEPT_EMP VALUES (3, NOW(), NOW(), 'lawyer');
-- fetch 
SELECT * FROM EMPLOYEE as emp
left OUTER JOIN DEPT_EMP as dep on emp.empId = dep.deptId;
