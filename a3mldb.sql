create table admin(
    username varchar(200) not null,
    password varchar(200) not null,
    primary key (username)
) engine = InnoDB;

insert into admin
values("admin","123456");

create table video (
    video_id int not null auto_increment primary key,
    title varchar(100) not null,
    year int not null,
    genre varchar(100) not null,
    img_path varchar(300) not null,
    synopsis varchar(1000)
) engine = InnoDB;
