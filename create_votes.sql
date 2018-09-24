CREATE TABLE votes (
attend int  references attend(aid),
member int references member(id),
PRIMARY KEY (attend,member)
);