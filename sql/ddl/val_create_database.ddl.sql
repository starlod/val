DROP DATABASE IF EXISTS val;
-- drop database voice_actor;
-- drop user va_user@localhost;
create database val;
drop user val_user@localhost;
grant all privileges on val.* to val_user@localhost identified by 'EbecaW1h';
