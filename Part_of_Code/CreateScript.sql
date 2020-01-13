CREATE TABLE Customer (
customer_phonenumber VARCHAR(30) PRIMARY KEY,
customer_name VARCHAR(30));

CREATE TABLE ReservationMake (
reservation_id INTEGER,
customer_phonenumber VARCHAR(30),
customer_name VARCHAR(30),
number_people INTEGER,
date DATE,
time TIME,
extrainfo VARCHAR(50),
PRIMARY KEY (reservation_id),
FOREIGN KEY (customer_phonenumber) REFERENCES customer (customer_phonenumber) ON DELETE CASCADE);


CREATE TABLE TableStatus(
table_id INTEGER PRIMARY KEY,
status VARCHAR(20),
numbersitting INTEGER);


Create Table Orderr(
order_number INTEGER PRIMARY KEY,
table_id INTEGER,
FOREIGN KEY (table_id) references TableStatus(table_id) ON DELETE CASCADE);

Create Table PayBill (
bill_number INTEGER PRIMARY KEY,
order_number INTEGER,
date DATE,
time TIME,
amount REAL,
FOREIGN KEY (order_number) REFERENCES Orderr(order_number) ON DELETE CASCADE);


Create Table DishPrice (
dish_id INTEGER PRIMARY KEY,
dish_name VARCHAR(30) UNIQUE,
price REAL);

Create Table OrderItem (
item_number INTEGER,
order_number INTEGER,/**/
dish_id INTEGER,
served BOOLEAN NOT NULL, /**/
primary key (item_number,order_number),
FOREIGN KEY (dish_id) REFERENCES DishPrice (dish_id) ON DELETE CASCADE);




Create Table Manager (
manager_id INTEGER PRIMARY KEY,
name VARCHAR(30) NOT NULL,
phone_number VARCHAR(30));

CREATE TABLE Employee (
employee_id INTEGER PRIMARY KEY,
name VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
phone_number VARCHAR(30),
manager_id INTEGER,
FOREIGN KEY (manager_id) REFERENCES Manager (manager_id) ON DELETE SET NULL);

Create Table PayRoll (
payroll_id INTEGER PRIMARY KEY,
employee_id INTEGER,
salary INTEGER,
bankinfo VARCHAR(30),
FOREIGN key (employee_id) REFERENCES Employee (employee_id) ON DELETE CASCADE);



Create Table Waiter(
employee_id INTEGER,
table_id INTEGER,
PRIMARY KEY (employee_id),
FOREIGN KEY (employee_id) REFERENCES Employee (employee_id) ON DELETE CASCADE,
FOREIGN KEY (table_id) REFERENCES TableStatus (table_id) ON DELETE SET NULL);

CREATE TABLE Chief (
employee_id INTEGER PRIMARY KEY,
position VARCHAR(30),
FOREIGN KEY (employee_id) REFERENCES Employee (employee_id) ON DELETE CASCADE);

Create Table ChiefMake (
employee_id INTEGER PRIMARY KEY,
item_number INTEGER,
FOREIGN KEY (employee_id) REFERENCES employee (employee_id) ON DELETE CASCADE,
FOREIGN KEY (item_number) REFERENCES OrderItem (item_number) ON DELETE SET NULL);

Create Table HandlePayRoll (
manager_ID INTEGER,
payroll_id INTEGER,
PRIMARY KEY (manager_id, payroll_id),
FOREIGN KEY (manager_id) REFERENCES Manager (manager_id) ON DELETE CASCADE,
FOREIGN KEY (payroll_id) REFERENCES PayRoll (payroll_id) ON DELETE CASCADE);
