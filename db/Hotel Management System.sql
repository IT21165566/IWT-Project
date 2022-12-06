create table User_Account
(
User_ID varchar(10) not null,
User_name varchar(50) not null,
User_password varchar(10) not null,

constraint User_Account_pk primary key (User_ID),
);

create table Hotel
(
Hotel_ID varchar(10) not null,
Hotel_name varchar(100) not null,
Hotel_address varchar(100) not null,
Hotel_email varchar(50) not null check (Hotel_email like '%_@_%._%'),
User_ID varchar(10) not null,
constraint Hotel_pk primary key (Hotel_ID),
constraint Hotel_fk foreign key(User_ID) references User_Account(User_ID),
);

create table Hotel_Contact
(
Hotel_ID varchar(10) not null,
Hotel_contactNo varchar(10) not null,
constraint Hotel_Contact_pk primary key (Hotel_ID,Hotel_contactNo),
constraint Hotel_Contact_fk foreign key(Hotel_ID) references Hotel(Hotel_ID)
);

create table Booking
(
Booking_ID varchar(10) not null,
Booking_description varchar(50) not null,
Booking_Date varchar(10) not null,

constraint Booking_pk primary key (Booking_ID),

);


create table Wedding_hall
(
WHall_ID varchar(10) not null,
WHall_name varchar(50) not null,
WHall_capacity varchar(20) not null,
WHall_MaxPrice varchar(20) not null,
WHall_MinPrice varchar(20) not null,
Hotel_ID varchar(10) not null,

constraint Wedding_hall_pk primary key(WHall_ID),
constraint Wedding_hall_fk foreign key(Hotel_ID) references Hotel(Hotel_ID)
);


create table Whall_Booking
(
WHall_ID varchar(10) not null,
Booking_ID varchar(10) not null,

constraint Whall_Booking_pk primary key(WHall_ID,Booking_ID),
constraint Whall_Booking_fk1 foreign key(WHall_ID) references Wedding_hall(WHall_ID),
constraint Whall_Booking_fk3 foreign key(Booking_ID) references Booking(Booking_ID)
);

create table Customer
(

Customer_ID varchar(10) not null,
C_first_name varchar(50) not null,
C_Last_name varchar(50) not null,
Customer_email varchar(50) not null check (Customer_email like'%_@_%._%'),
Customer_gender varchar(9),
Customer_Address varchar(100) not null,
Customer_DOB  varchar(20) not null,
User_ID varchar(10) not null,

Constraint Customer_pk primary key(Customer_ID),
Constraint Customer_fk foreign key(User_ID) references User_Account(User_ID)

);

create table Customer_ContactNo
(
Customer_ID varchar(10) not null,
Customer_contactNo varchar(100) not null,

Constraint Customer_Contact_pk primary key(Customer_ID,Customer_contactNo),
Constraint Customer_ContactNo_fk foreign key(Customer_ID) references Customer(Customer_ID)
);

create table Payment
(
Payment_ID varchar(10) not null,
Payment_method varchar(50) not null,
Payment_date varchar (10) not null,
Payment_receiptNo varchar(50) not null,
Payment_amount varchar(50) not null,
constraint Payment_pk primary key (Payment_ID)
);


create table Reservation
(
Reservation_ID varchar(10) not null,
Reservation_type varchar(50) not null,
Reservation_date varchar(10) not null,
WHall_ID varchar(10) not null,

constraint Reservationt_pk primary key (Reservation_ID),
Constraint Reservation_fk foreign key(WHall_ID) references Wedding_hall(WHall_ID)
);

create table Reservation_Payment
(
Reservation_ID varchar(10) not null,
Customer_ID varchar(10) not null,
Payment_ID varchar(10) not null,

Constraint Customer_ContactNo_pk primary key(Reservation_ID,Customer_ID,Payment_ID),
Constraint Reservation_Payment_fk1 foreign key(Reservation_ID) references Reservation(Reservation_ID),
Constraint Reservation_Payment_fk2 foreign key(Customer_ID) references Customer(Customer_ID),
Constraint Reservation_Payment_fk3 foreign key(Payment_ID) references Payment(Payment_ID)
);

create table Advertiser
(
Ad_ID varchar(10) not null,
Ad_name varchar(50) not null,
Ad_email varchar(50) not null check (Ad_email like '%_@_%._%'),
Ad_contactNo varchar(100) not null,
constraint Avertiser_pk primary key (Ad_ID),
);

create table Advertisment
(
adv_ID varchar(10) not null,
adv_startingDate varchar(50) not null,
adv_endingingDate varchar(50) not null,
adv_status varchar(100) not null,
Payment_ID varchar(10) not null,
Ad_ID varchar(10) not null,
constraint Advertisment_pk primary key (adv_ID),
constraint Advertisment_fk1 foreign key(Payment_ID) references Payment(Payment_ID),
constraint Advertisment_fk2 foreign key(Ad_ID) references Advertiser(Ad_ID)
);


create table Employee
(
E_ID varchar(10) not null,
E_First_name varchar(20) not null,
E_Last_name varchar(20) not null,
E_role varchar(50) not null,
E_email varchar(50) not null check (E_email like'%_@_%._%'),
E_address varchar(100) not null,
E_DOB varchar(20) not null,
User_ID varchar(10) not null,

constraint Employee_pk primary key (E_Id),
constraint Employee_fk foreign key(User_ID) references User_Account(User_ID)
);

create table Employee_contactNo
(
E_ID varchar(10) not null,
E_contact_No varchar(100) not null,

constraint Employee_ContactNo_pk primary key (E_ID,E_Contact_No),
constraint Employee_ContactNo_fk foreign key(E_ID) references Employee(E_ID)
);

/*Insert in Data to the User_Account table*/

insert into User_Account values('U001','Kasun','K123456');
insert into User_Account values('U002','Dinuka','Di123456');
insert into User_Account values('U003','Migara',',M123456');
insert into User_Account values('U004','Dileepa','Dil123456');
insert into User_Account values('U005','Nimesh','N123456');


insert into User_Account values('U006','shangrila12','K123456');
insert into User_Account values('U007','avenra12','Di123456');
insert into User_Account values('U008','senuri12',',M123456');
insert into User_Account values('U009','kingsburi12','Dil123456');
insert into User_Account values('U010','hilton12','N123456');


insert into User_Account values('U011','saman12','S123456');
insert into User_Account values('U012','sonali12','So123456');
insert into User_Account values('U013','aravindha12','A123456');


/*Insert in Data to the hotel table*/

Insert into Hotel values('H001','Shangrila','Colombo','shngri@gmail.com','U006');
Insert into Hotel values('H002','Avenra','Nigombo','aven@gmail.com','U007');
Insert into Hotel values('H003','Senuri','Gampha','senu@gmail.com','U008');
Insert into Hotel values('H004','Kingsburry','Colombo','kingsb@gmail.com','U009');
Insert into Hotel values('H005','Hilton','Colombo','hilto@gmail.com','U010');


/*Insert in Data to the hotel_Contact table*/

Insert into Hotel_Contact values('H001','0772183689');
Insert into Hotel_Contact values('H002','0732144368');
Insert into Hotel_Contact values('H001','0778183610');
Insert into Hotel_Contact values('H004','0743394689');
Insert into Hotel_Contact values('H005','0723555551');


Insert into Hotel_Contact values('H005','0717574888');
Insert into Hotel_Contact values('H003','0703854664');
Insert into Hotel_Contact values('H005','0768655364');
Insert into Hotel_Contact values('H002','0779544553');
Insert into Hotel_Contact values('H002','0773532558');


/*Insert in Data to the Booking table*/

insert into Booking values('B001','Online Booking','25/04/2022');
insert into Booking values('B002','Call Booking','26/04/2022');
insert into Booking values('B003','Online Booking','27/04/2022');
insert into Booking values('B004','Call Booking','28/04/2022');
insert into Booking values('B005','Call Booking','29/04/2022');

insert into Booking values('B006','Online Booking','30/04/2022');
insert into Booking values('B007','Call Booking','01/05/2022');
insert into Booking values('B008','Online Booking','02/05/2022');
insert into Booking values('B009','Call Booking','03/05/2022');
insert into Booking values('B010','Online Booking','04/05/2022');


/*Insert in Data to the Wedding_hall table*/

insert into Wedding_hall values('WH001','dulex lake','500','1500','3000','H001'); 
insert into Wedding_hall values('WH002','dulex oven','400','1500','3000','H001');
insert into Wedding_hall values('WH003','primer ocen','600','1500','3000','H001');
insert into Wedding_hall values('WH004','bayfont','300','1500','3990','H002');
insert into Wedding_hall values('WH005','upper','500','1500','3990','H002');

insert into Wedding_hall values('WH006','upstair','250','1000','2500','H003');
insert into Wedding_hall values('WH007','downstair','250','1000','2500','H003');
insert into Wedding_hall values('WH008','the balmoral','300','2500','5500','H004');
insert into Wedding_hall values('WH009','ballroom','200','3000','5500','H005');
insert into Wedding_hall values('WH010','union ballroom','100','3000','5500','H005');


/*Insert in Data to the Whall_booking table*/

insert into Whall_Booking values('WH001','B001');
insert into Whall_Booking values('WH002','B002');
insert into Whall_Booking values('WH003','B003');
insert into Whall_Booking values('WH002','B004');
insert into Whall_Booking values('WH005','B005');

insert into Whall_Booking values('WH006','B006');
insert into Whall_Booking values('WH005','B007');
insert into Whall_Booking values('WH008','B008');
insert into Whall_Booking values('WH009','B009');
insert into Whall_Booking values('WH004','B010');


/*Insert in Data to the customer table*/

insert into Customer values('C001','Kasun','Peris','kasun12@gmail.com','Male','Gampaha','18-08-1995','U001');
insert into Customer values('C002','Dinuka','Gamage','dinuka12@gmail.com','Male','Nugegoda','01-04-1994','U002');
insert into Customer values('C003','Migara','Perera','migara12@gmail.com','Male','Anuradapura','15-02-1992','U003');
insert into Customer values('C004','Dileepa','Fernando','dileepa12@gmail.com','Male','Mathara','22-07-1995','U004');
insert into Customer values('C005','Nimesh','vithana','nimesh12@gmail.com','Male','Colombo','14-03-1996','U005');


/*Insert in Data to the Customer_ContactNo table*/

insert into Customer_ContactNo values('C001','0714589632');
insert into Customer_ContactNo values('C002','0775589632');
insert into Customer_ContactNo values('C003','0704689632');
insert into Customer_ContactNo values('C004','0789589632');
insert into Customer_ContactNo values('C005','0754569632');

insert into Customer_ContactNo values('C003','0774583152');
insert into Customer_ContactNo values('C002','0714563232');


/*Insert in Data to the Payment table*/

insert into Payment values('P001','Visa Card','25/04/2022','RN01','150000');
insert into Payment values('P002','Visa Card','27/04/2022','RN02','180000');
insert into Payment values('P003','Visa Card','28/04/2022','RN03','150000');
insert into Payment values('P004','Visa Card','29/04/2022','RN04','190000');
insert into Payment values('P005','Visa Card','30/04/2022','RN05','160000');

insert into Payment values('P006','Visa Card','10/05/2022','RN06','130000');
insert into Payment values('P007','Visa Card','11/05/2022','RN07','190000');
insert into Payment values('P008','Visa Card','12/05/2022','RN08','140000');
insert into Payment values('P009','Visa Card','13/05/2022','RN09','120000');
insert into Payment values('P010','Visa Card','22/05/2022','RN10','170000');


/*Insert in Data to the Reservation table*/

insert into Reservation values('R001','Online booking','25/04/2022','WH001');
insert into Reservation values('R002','Call booking','27/04/2022','WH002');
insert into Reservation values('R003','Call booking','28/04/2022','WH003');
insert into Reservation values('R004','Online booking','29/04/2022','WH004');
insert into Reservation values('R005','Call booking','30/04/2022','WH005');

insert into Reservation values('R006','Online booking','10/05/2022','WH006');
insert into Reservation values('R007','Call booking','11/05/2022','WH007');
insert into Reservation values('R008','Online booking','12/05/2022','WH008');
insert into Reservation values('R009','Call booking','13/05/2022','WH009');
insert into Reservation values('R010','Online booking','22/04/2022','WH010');


/*Insert in Data to the Reservation_payment table*/

insert into Reservation_Payment values('R001','C001','P001');
insert into Reservation_Payment values('R002','C002','P002');
insert into Reservation_Payment values('R003','C003','P003');
insert into Reservation_Payment values('R004','C004','P004');
insert into Reservation_Payment values('R005','C005','P005');


/*Insert in Data to the Advertiser table*/

insert into Advertiser values('A001','Chandani Bandara Saloon','chandani@gmail.com','0715236984');
insert into Advertiser values('A002','Binex Photography Saloon','binex@gmail.com','0713874598');
insert into Advertiser values('A003','Ramani Fernando','ramani@gmail.com','0717253985');
insert into Advertiser values('A004','Danushka Photography','danushka@gmail.com','0753641875');
insert into Advertiser values('A005','Azura Photography','azura@gmail.com','0778740325');


/*Insert in Data to the Advertiment table*/

insert into Advertisment values('AD001','24-04-2022','24-06-2022','Displaying','P006','A001');
insert into Advertisment values('AD002','20-04-2022','20-06-2022','Pending','P007','A002');
insert into Advertisment values('AD003','24-04-2021','24-06-2021','Terminated','P008','A003');
insert into Advertisment values('AD004','26-04-2022','26-06-2022','Displaying','P009','A004');
insert into Advertisment values('AD005','28-04-2022','28-06-2022','Displaying','P010','A005');


/*Insert in Data to the Employee table*/

insert into Employee values('E001','Saman','Kumara','Administrator','samankumara@gmail.com','colombo','25/06/1995','U011');
insert into Employee values('E002','Sonali','Ekanayake','Moderator','sonaliekanayake@gmail.com','gampaha','24/06/1996','U012');
insert into Employee values('E003','Aravindha','Disanayake','Financial Manager','aravindhadisanayake@gmail.com','10/11/1999','colombo','U013');


/*Insert in Data to the Employee_Contact table*/


insert into Employee_contactNo values('E001','0771233455');
insert into Employee_contactNo values('E002','0765667474');
insert into Employee_contactNo values('E003','0713445656');



select * 
from Booking;
