create table if not exists books (
    bookid int(11) not null auto_increment,
    authorid int(11) not null,
    title varchar(55) not null,
    ISBN varchar(25) not null,
    pub_year smallint(6) not null,
    avaiable tinyint(4) not null,
    primary key(bookid)
) engine=InnoDB default charset=utf8 auto_increment=4 ;

insert into books (bookid, authorid, title, ISBN, pub_year, avaiable) values
(1, 01, 'PHP Program', 'ISBN-1', 2021, 1),
(2, 03, 'The next day', 'ISBN-2', 2019, 0),
(3, 02, 'Alat Librain', 'ISBN-3', 2022, 1);