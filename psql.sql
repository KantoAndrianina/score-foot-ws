CREATE DATABASE score_foot;
\c score_foot kanto;

CREATE TABLE equipes (
    EQUIPE_ID varchar(20) not null primary key,
    EQUIPE_NOM VARCHAR(25)
);

CREATE SEQUENCE SEQ_EQUIPE
    INCREMENT BY 1
    MINVALUE 1
    START WITH 1;

insert into EQUIPE values 
('EQUIPE'|| nextval('SEQ_EQUIPE'),'Man Utd'),
('EQUIPE'|| nextval('SEQ_EQUIPE'),'Man City'),
('EQUIPE'|| nextval('SEQ_EQUIPE'),'Real Madrid')
;
INSERT INTO equipe (EQUIPE_ID, EQUIPE_NOM) VALUES
('EQUIPE1', 'Man Utd'),
('EQUIPE2', 'Man City'),
('EQUIPE3', 'Real Madrid');
