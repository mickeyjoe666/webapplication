CREATE TABLE attend (
aid serial,
election int references election(id),
candidate int references candidates(cid),
PRIMARY KEY (aid)
);