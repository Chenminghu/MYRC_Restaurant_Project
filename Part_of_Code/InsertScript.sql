INSERT INTO Customer VALUES (778987009,'Joe' );
INSERT INTO Customer VALUES (778484893,'Vicky Donald' );
INSERT INTO Customer VALUES (78787906,'Rachel Green');
INSERT INTO Customer VALUES (778376899,'Lawrence');
INSERT INTO Customer VALUES (778697486,'Bob');
INSERT INTO Customer VALUES (778746257,'Lily Web');

INSERT INTO ReservationMake VALUES (1, 778746257,'Lily Web', 4, '2019-06-14', '18:00', 'I want to sit close by the window');
INSERT INTO ReservationMake VALUES (2, 778697486,'Bob', 6, '2019-06-11', '08:00', 'birthday');
INSERT INTO ReservationMake VALUES (3, 778376899,'Lawrence', 11, '2019-06-13', '17:00', NULL);
INSERT INTO ReservationMake VALUES (4, 78787906,'Rachel Green',1, '2019-06-14', '11:00', NULL);
INSERT INTO ReservationMake VALUES (5, 778484893,'Vicky Donald', 6, '2019-06-17', '15:00', NULL);
INSERT INTO ReservationMake VALUES (6, 778987009,'Joe', 5, '2019-06-18', '13:00', 'I need a baby sit');

INSERT INTO TableStatus VALUES (1, 'OCCUPIED',  2);
INSERT INTO TableStatus VALUES (2, 'OCCUPIED',  6);
INSERT INTO TableStatus VALUES (3, 'OCCUPIED', 10);
INSERT INTO TableStatus VALUES (4, 'OCCUPIED',  7);
INSERT INTO TableStatus VALUES (5, 'VACANT',  4);
INSERT INTO TableStatus VALUES (6, 'RESERVED',  26);

INSERT INTO DishPrice VALUES (1, 'Caesar Salad', 10);
INSERT INTO DishPrice VALUES (2, 'Fish & Chips', 12.50);
INSERT INTO DishPrice VALUES (3, 'Hamburger', 5);
INSERT INTO DishPrice VALUES (4, '12 oz NewYork Steak', 22.75);
INSERT INTO DishPrice VALUES (5, 'Soft Drink', 1.75);
INSERT INTO DishPrice VALUES (6, 'Pineapple Fried Rice', 9.50);

INSERT INTO Manager VALUES (1, 'Lenoard', 778837324);
INSERT INTO Manager VALUES (2, 'Jenny Homen', 778837424);
INSERT INTO Manager VALUES (3, 'Olops Luis', 778886354);
INSERT INTO Manager VALUES (4, 'Kir Man', 778836379);
INSERT INTO Manager VALUES (5, 'Le Oh', 778895314);

INSERT INTO Employee VALUES (1, 'James', '1111 W 11TH AVE', 250697486, 1);
INSERT INTO Employee VALUES (2, 'Peter', '1111 W 12TH AVE', 250697486, 1);
INSERT INTO Employee VALUES (3, 'Luis', '1111 W 13TH AVE', 250797486, 4);
INSERT INTO Employee VALUES (4, 'Jim', '1111 W 11TH AVE', 250397786, 3);
INSERT INTO Employee VALUES (5, 'Halpert', '1111 W 14TH AVE', 25077436, 2);
INSERT INTO Employee VALUES (6, 'Johnny', '1111 W 15TH AVE', 250665486,2);
INSERT INTO Employee VALUES (7, 'Mary', '1111 E 13TH AVE', 250697866,5);
INSERT INTO Employee VALUES (8, 'Emily', '1111 W 21TH AVE', 250697066,5);

INSERT INTO PayRoll VALUES (1, 1,20000, 6756789876546727);
INSERT INTO PayRoll VALUES (2, 2,20000, 7654567898765678);
INSERT INTO PayRoll VALUES (3, 3,21000,7656243546374837);
INSERT INTO PayRoll VALUES (4, 4,3000, 3736354736272837);
INSERT INTO PayRoll VALUES (5, 5, 24000, 6765453625374654);

INSERT INTO Waiter VALUES (1,NULL);
INSERT INTO Waiter VALUES (2,NULL);
INSERT INTO Waiter VALUES (3,NULL);
INSERT INTO Waiter VALUES (4,NULL);
INSERT INTO Waiter VALUES (5,NULL);



INSERT INTO Chief VALUES (6, 'Head Chief');
INSERT INTO Chief VALUES (7, 'Line Chief');
INSERT INTO Chief VALUES (8, 'Apprentice Chief');

INSERT INTO ChiefMake VALUES (6, NULL);
INSERT INTO ChiefMake VALUES (7, NULL);
INSERT INTO ChiefMake VALUES (8, NULL);


INSERT INTO HandlePayRoll VALUES (1, 1);
INSERT INTO HandlePayRoll VALUES (4, 2);
INSERT INTO HandlePayRoll VALUES (2, 3);
INSERT INTO HandlePayRoll VALUES (3, 4);
INSERT INTO HandlePayRoll VALUES (5, 5);
