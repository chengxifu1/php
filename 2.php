<?php

echo "aaaaaaaaa";

create table if not exists hw_admin(
	id int unsigned not null auto_increment primary key comment '����id',
	admin_name varchar(20) not null comment '�û���',
	admin_realname varchar(20) comment '��ʵ����',
	admin_pass varchar(100) not null comment 'MD5()����֮�������',
	admin_sex tinyint(6) default 0 comment '�Ա�1Ϊ�У�0ΪŮ',
	user_email varchar(50) not null comment 'Email��ַ',
	admin_tel varchar(15) comment '�绰',
	admin_addtime varchar(30) not null comment '���ʱ��',
	admin_photo varchar(255) not null default 'nbb.jpg' comment 'ͷ��',
 admin_state Tinyint(6) not null default 1 comment '����Ȩ��0Ϊ����,1Ϊ�չ�
)ENGINE=MyISAM DEFAULT CHARSET=UTF8;


create table if not exists hw_user(
	id int unsigned not null auto_increment primary key comment '����id',
	user_name varchar(20) not null comment '�û���',
	user_realname varchar(20) comment '��ʵ����',
	user_pass varchar(100) not null comment 'MD5()����֮�������',
	user_question varchar(100) not null comment '�ܱ�����',
	user_answer varchar(100) not null comment '�ܱ���',
	user_sex tinyint(6) default 0 comment '�Ա�1Ϊ�У�0ΪŮ',
	user_email varchar(50) not null comment 'Email��ַ',
	user_intergral int default 0 comment '�û�����',
	user_tel varchar(15) comment '�绰',
	user_addtime varchar(30) not null comment 'ע��ʱ��',
	user_photo varchar(255) not null default 'nbb.jpg' comment 'ͷ��'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8;