CREATE DATABASE bike_race;
USE bike_race;

CREATE TABLE user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),
    user_photo varchar(2080),
    remember_token varchar(255),
    created_at datetime,
    updated_at datetime
);