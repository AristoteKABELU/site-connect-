CREATE DATABASE IF NOT EXISTS db_myNetwork;

USE db_myNetwork;

CREATE TABLE IF NOT EXISTS `t_users`(
    `id` SMALLINT primary key auto_increment,
    `name` VARCHAR(30),
    `second_name` VARCHAR(30),
    `first_name` VARCHAR(30),
    `birthday` DATE
);