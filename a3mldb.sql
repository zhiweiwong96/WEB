create table login(
    username varchar(200) not null,
    password varchar(200) not null,
    primary key (username)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into login
values("admin","123456");