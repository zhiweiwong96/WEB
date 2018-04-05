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
insert into movie
values(3,"Jumanji: Welcome to the Jungle",2017,"Action","img/jumanji.jpg","Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.");
insert into movie
values(4,"I Kill Giants",2017,"Fantasy","img/ikg.jpg","Barbara Thorson struggles through life by escaping into a fantasy life of magic and monsters.");
insert into movie
values(5,"Thor: Ragnarok",2017,"Action","img/thor.jpg","Thor is imprisoned on the planet Sakaar, and must race against time to return to Asgard and stop Ragnarök, the destruction of his world, which is at the hands of the powerful and ruthless villain Hela.");
insert into movie
values(6,"All The Money In The World",2017,"Crime","img/allthemoneyintheworld.jpg","The story of the kidnapping of 16-year-old John Paul Getty III and the desperate attempt by his devoted mother to convince his billionaire grandfather Jean Paul Getty to pay the ransom.");
insert into movie
values(7,"13 hours",2016,"History","img/13h.jpg","During an attack on a U.S. compound in Libya, a security team struggles to make sense out of the chaos.");
insert into movie
values(8,"Rogue One: A Star Wars Story",2016,"Action","img/ro.jpg","The daughter of an Imperial scientist joins the Rebel Alliance in a risky move to steal the Death Star plans.");
insert into movie
values(9,"The Witch",2015,"Horror","img/witch.jpg","A family in 1630s New England is torn apart by the forces of witchcraft, black magic and possession.");
insert into movie
values(10,"Zootopia",2016,"Animation","img/zoo.jpg","In a city of anthropomorphic animals, a rookie bunny cop and a cynical con artist fox must work together to uncover a conspiracy.");
insert into movie
values(11,"Captain America: Civil War",2016,"Action","img/ca.jpg","Political involvement in the Avengers' activities causes a rift between Captain America and Iron Man.");
insert into movie
values(12,"Hell or High Water",2016,"Crime","img/hohw.jpg","A divorced father and his ex-con older brother resort to a desperate scheme in order to save their family's ranch in West Texas.");
insert into movie
values(13,"Arrival",2016,"Drama","img/arrival.jpg","A linguist is recruited by the military to communicate with alien lifeforms after twelve mysterious spacecrafts land around the world.");
