DROP DATABASE IF EXISTS val;
create database val;
drop user val_user@localhost;
grant all privileges on val.* to val_user@localhost identified by 'EbecaW1h';
