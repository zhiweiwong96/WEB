create database a3mldb;
use a3mldb;

create table admin(
    username varchar(200) not null,
    password varchar(200) not null,
    primary key (username)
) engine = InnoDB;

insert into admin
values("admin","123456");

create table movie (
    video_id int not null auto_increment primary key,
    title varchar(100) not null,
    year int not null,
    genre varchar(100) not null,
    image varchar(100) not null,
    synopsis varchar(1000) not null
) engine = InnoDB;

insert into movie
values(1,"You Were Never Really Here",2017,"Thriller","img/You_Were_Never_Really_Here.jpg","A traumatized veteran, unafraid of violence, tracks down missing girls for a living. When a job spins out of control, Joe's nightmares overtake him as a conspiracy is uncovered leading to what may be his death trip or his awakening.");
insert into movie
values(2,"Your Name",2016,"Fantasy","img/Your_name.jpg","Two strangers find themselves linked in a bizarre way. When a connection forms, will distance be the only thing to keep them apart?");
