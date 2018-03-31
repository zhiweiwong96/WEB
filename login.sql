CREATE TABLE login (
  username varchar(60) NOT NULL,
  password varchar(60) NOT NULL,
);

ALTER TABLE login 
ADD PRIMARY KEY (username);

INSERT INTO login 
VALUES("admin","123456");