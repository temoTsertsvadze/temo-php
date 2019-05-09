CREATE DATABASE mydata

CREATE table menu (
    id int(6) auto_increment primary key,
    title varchar(50),
    meta_k varchar(200),
    meta_d varchar(200),
    text text

);

CREATE table users (
    id int(6) auto_increment primary key,
    Name varchar(30),
    LastName varchar(200),
    age int(2),
    BirthDay date,
    reg_date date,
    password varchar(50),
    gender varchar(20)
);

CREATE table data (
    id int(6) auto_increment primary key,
    title varchar(50),
    Date date,
    Type varchar(30),
    Photo varchar(50),
    Text text,
    Author varchar(200),
    meta_k varchar(200),
    meta_d varchar(200)
);


insert into menu (title, meta_k, meta_d, text)
values ('temo', 'kkk', 'dd', 'teqsti1');

insert into menu (title, meta_k, meta_d, text)
values ('tamta', 'jjj', 'lo', 'teqsti2');

insert into menu (title, meta_k, meta_d, text)
values ('natia', 'hhh', 'wl', 'teqsti3');


insert into users (Name, LastName, age, BirthDay, reg_date, password, gender)
values ('temo', 'tsertsvadze', '21', '1997-07-17', '2019-2-12', 'paroli1', 'male');

insert into users (Name, LastName, age, BirthDay, reg_date, password, gender)
values ('tamta', 'kereselidze', '21', '1997-11-06', '2019-2-12', 'paroli2', 'female');

insert into users (Name, LastName, age, BirthDay, reg_date, password, gender)
values ('natia', 'gviniashvili', '21', '1997-12-21', '2019-2-12', 'paroli3', 'female');


insert into data (title, Date, Type, Photo, Text, Author, meta_k, meta_d)
values ('satauri', '2019-2-12', 'teqsti', 'photo', 'adssdadsa', 'temo', 'kk1', 'dd');

insert into data (title, Date, Type, Photo, Text, Author, meta_k, meta_d)
values ('sxvasatauri', '2019-2-8', 'tipi', 'photo', 'adssdadsa', 'temo', 'kk2', 'dd');

insert into data (title, Date, Type, Photo, Text, Author, meta_k, meta_d)
values ('bolosatauri', '2019-2-7', 'informacia', 'photo', 'adssdadsa', 'temo', 'kk3', 'dd');

