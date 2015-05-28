use val

DROP TABLE IF EXISTS options CASCADE;
CREATE TABLE options (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(64) NOT NULL DEFAULT '',
    value longtext NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY option_name (name)
);

DROP TABLE IF EXISTS register CASCADE;
CREATE TABLE register (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(64) DEFAULT '',
    nickname varchar(64) DEFAULT '',
    site_url varchar(255) DEFAULT '',
    feed_url varchar(255) DEFAULT '',
    twitter varchar(255) DEFAULT '',
    ameba varchar(255) DEFAULT '',
    facebook varchar(255) DEFAULT '',
    first_name varchar(64) DEFAULT '',
    last_name varchar(64) DEFAULT '',
    email varchar(255) DEFAULT '',
    remarks longtext DEFAULT '',
    created_by bigint(20) DEFAULT 0,
    updated_by bigint(20) DEFAULT 0,
    created_at datetime DEFAULT '0000-00-00 00:00:00',
    updated_at datetime DEFAULT '0000-00-00 00:00:00',
    deleted_at datetime,
    primary key(id)
);


DROP TABLE IF EXISTS user CASCADE;
CREATE TABLE user (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    user_id varchar(64) NOT NULL DEFAULT '',
    password varchar(64) NOT NULL DEFAULT '',
    first_name varchar(64) DEFAULT '',
    last_name varchar(64) DEFAULT '',
    email varchar(255) DEFAULT '',

    value longtext NOT NULL,

);



DROP TABLE IF EXISTS rss CASCADE;
CREATE TABLE rss (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    register_id bigint(20) unsigned NOT NULL,
    rss_url bigint(20) unsigned NOT NULL,
    rss_title
    created_by
    updated_by
    created_at
    updated_at
    deleted_at
);
