SET FOREIGN_KEY_CHECKS=0;

drop table IF EXISTS User;
drop table IF EXISTS Posts;

create table User(
UserID	INT 				NOT NULL		AUTO_INCREMENT, 
FirstName	VARCHAR(15) 		NOT NULL,
LastName	VARCHAR(25)		NOT NULL,
UserName	VARCHAR(15)		NOT NULL,
Password	VARCHAR(15)		NOT NULL,
Email		VARCHAR(40)		NOT NULL,
PRIMARY KEY 	(UserID));

create table Posts(
PostID		INT			NOT NULL		AUTO_INCREMENT,
UserID		INT			NOT NULL,
Title		VARCHAR(50)		NOT NULL,
PostText		LONGTEXT		NOT NULL,
PostDate		DATE		NOT NULL,
PRIMARY KEY	(PostID),
FOREIGN KEY	(UserID) REFERENCES	User(UserID));

insert into User (UserID,  FirstName, LastName, UserName, Password, Email) 
values 
(1, 'Pete', 'Kempthorne', 'PeteK', 's2up3m0p4sz','SupremoPete@gmail.com')
;

insert into Posts (UserID,  Title, PostText, PostDate) 
values 
(1, 'Hi', 'This is a comment.', '2015-01-15')
;

commit;

SET FOREIGN_KEY_CHECKS=1;