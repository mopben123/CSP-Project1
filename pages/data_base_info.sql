CREATE TABLE login {
    TeamUsername VARCHAR2 NOT NULL PRIMARY KEY,
    TeamPassword VARCHAR2 NOT NULL UNIQUE
};

INSERT INTO login (TeamUsername, TeamPassword)
VALUES ('Ben', 'BenPass123');

INSERT INTO login (TeamUsername, TeamPassword)
VALUES ('Venk', 'VenkPwd567');

INSERT INTO login (TeamUsername, TeamPassword)
VALUES ('Raghu', 'Raghu2022');

INSERT INTO login (TeamUsername, TeamPassword)
VALUES ('Taj', 'TajUser789');

INSERT INTO login (TeamUsername, TeamPassword)
VALUES ('Ak', 'AkPass321');

INSERT INTO login (TeamUsername, TeamPassword)
VALUES ('Phoenix', 'PhxPwd456');

