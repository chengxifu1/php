<?php

echo "aaaaaaaaa";

create table if not exists hw_admin(
	id int unsigned not null auto_increment primary key comment '自增id',
	admin_name varchar(20) not null comment '用户名',
	admin_realname varchar(20) comment '真实姓名',
	admin_pass varchar(100) not null comment 'MD5()加密之后的密码',
	admin_sex tinyint(6) default 0 comment '性别，1为男，0为女',
	user_email varchar(50) not null comment 'Email地址',
	admin_tel varchar(15) comment '电话',
	admin_addtime varchar(30) not null comment '添加时间',
	admin_photo varchar(255) not null default 'nbb.jpg' comment '头像',
 admin_state Tinyint(6) not null default 1 comment '管理权限0为超管,1为普管
)ENGINE=MyISAM DEFAULT CHARSET=UTF8;


create table if not exists hw_user(
	id int unsigned not null auto_increment primary key comment '自增id',
	user_name varchar(20) not null comment '用户名',
	user_realname varchar(20) comment '真实姓名',
	user_pass varchar(100) not null comment 'MD5()加密之后的密码',
	user_question varchar(100) not null comment '密保问题',
	user_answer varchar(100) not null comment '密保答案',
	user_sex tinyint(6) default 0 comment '性别，1为男，0为女',
	user_email varchar(50) not null comment 'Email地址',
	user_intergral int default 0 comment '用户积分',
	user_tel varchar(15) comment '电话',
	user_addtime varchar(30) not null comment '注册时间',
	user_photo varchar(255) not null default 'nbb.jpg' comment '头像'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8;