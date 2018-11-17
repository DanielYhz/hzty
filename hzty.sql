create database hzty;

create table categories
(
  cat_id    int auto_increment
    primary key,
  cat_title varchar(255) not null
);

create table products
(
  product_id            int(3) auto_increment
    primary key,
  product_category_id   int          null,
  product_area          varchar(255) null,
  product_post_author   varchar(255) null,
  product_date          date         null,
  product_image         text         null,
  product_description   text         null,
  product_tags          varchar(255) null,
  product_comment_count int(3)       null,
  product_status        varchar(255) null
);

create table users_272
(
  user_id    int auto_increment
    primary key,
  user_name  varchar(255) null,
  e_mail     varchar(255) null,
  created_at date         null
);




INSERT INTO hzty.categories (cat_id, cat_title) VALUES (1, 'Single House 4 Bedroom');
INSERT INTO hzty.categories (cat_id, cat_title) VALUES (3, 'Apartment');
INSERT INTO hzty.categories (cat_id, cat_title) VALUES (5, 'Condo');
INSERT INTO hzty.categories (cat_id, cat_title) VALUES (25, 'Single House 3 BedRooms');
INSERT INTO hzty.products (product_id, product_category_id, product_area, product_post_author, product_date, product_image, product_description, product_tags, product_comment_count, product_status) VALUES (2, 5, 'San Jose', 'Kaze', '2018-11-13', 'aerial.jpg', 'What an amazing day!', 'Condo', 1, '                                    ');
INSERT INTO hzty.products (product_id, product_category_id, product_area, product_post_author, product_date, product_image, product_description, product_tags, product_comment_count, product_status) VALUES (18, 222, 'LA', 'Geez', '2018-11-15', 'ancient.jpg', 'This is from 1115', 'house', 4, 'Sold');
INSERT INTO hzty.products (product_id, product_category_id, product_area, product_post_author, product_date, product_image, product_description, product_tags, product_comment_count, product_status) VALUES (21, 267, 'Redwood City', 'Daniel', '2018-11-15', 'blossom.jpg', 'Come on !', 'Apartment', 4, 'Coming');
INSERT INTO hzty.products (product_id, product_category_id, product_area, product_post_author, product_date, product_image, product_description, product_tags, product_comment_count, product_status) VALUES (33, 12, 'Fremont', 'Kazeee', '2018-11-15', '', '                        I am going to move to the next one.     This is cool.                 ', 'New', 4, 'Newly sold ');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (1, 'William Yolo', 'wy218032@gmail.com', '2018-11-15');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (2, 'Me Vaw', 'mevaw369@gmail.com', '2018-11-14');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (3, 'Xiao Gao', 'xiaomaogy88@gmail.com', '2018-11-13');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (4, 'Ya Wen', 'wyawen520@gmail.com', '2018-11-08');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (5, 'Max Millow', 'mymax2012@gmail.com', '2018-11-09');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (6, 'Penny Peng', 'pennypeng@berkeley.edu', '2018-11-03');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (7, 'Renee Rachel', 'renee7547@gmail.com', '2018-11-04');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (8, 'Yudi Sun', 'yuding.sun@gmail.com', '2018-11-19');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (9, 'Charles Gao', 'cqgao@ucdavis.edu', '2018-11-16');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (10, 'Jacky Sam', 'jackyjqw@gmail.com', '2018-11-10');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (11, 'Summer Zhang', 'summer.zhang@gmail.com', '2018-11-01');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (12, 'Yango Sun', 'ysun@usc.edu', '2018-11-17');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (13, 'Bo Yang', 'byang@gmail.com', '2018-11-03');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (14, 'Kaze Dan', '971289018@qq.com', '2018-11-10');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (15, 'Xing Clark', 'clarkxinxin@gmail.com', '2018-11-20');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (16, 'Mi Lily', 'zlili@gmail.com', '2018-11-25');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (17, 'Quinn Lay', 'qlay@gmail.com', '2018-11-02');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (18, 'Frank Tian', 'frank790628@gmail.com', '2018-11-13');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (19, 'Rachel Helen', 'rachelHelen@gmail.com', '2018-11-21');
INSERT INTO hzty.users_272 (user_id, user_name, e_mail, created_at) VALUES (20, 'Olivia Hank', 'oliviaHank@hotmail.com', '2018-11-14');
