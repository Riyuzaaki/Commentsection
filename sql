CREATE TABLE comments(
cid int(11) not null PRIMARY KEY AUTO_INCREMENT,
uid varchar(256) not null,
    date datetime not null,
    message text not null
);