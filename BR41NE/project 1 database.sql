create database BR41NE_dates;
 use BR41NE_dates;
 
create table users(Id bigint unique,surname char, firstname char, username varchar(15) unique, email  varchar(100) unique, password nvarchar(2000)  );

select * from users;