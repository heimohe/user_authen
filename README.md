# user_authen
写这个是为了验证sql注入问题的

php mysql 在浏览器输入用户名，去数据库查询。查到则显示在浏览器，查不到则显示空。


sql 里面三个字段 id username password

 create table t1 (id int(3) NOT NULL AUTO_INCREMENT,username char(10) NOT NULL,password varchar(20));
 
 insert into t1 values(1,'hello','world');
