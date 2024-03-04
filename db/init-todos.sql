CREATE TABLE IF NOT EXISTS todos (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    done BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO todos (title, done) VALUES ('Todo 1', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 2', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 3', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 4', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 5', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 6', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 7', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 8', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 9', FALSE);
INSERT INTO todos (title, done) VALUES ('Todo 10', FALSE);
