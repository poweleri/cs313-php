CREATE TABLE actor (
   actor_id    SERIAL        PRIMARY KEY
,  fname       VARCHAR(50)   NOT NULL
,  lname       VARCHAR(50)   NOT NULL
,  mname       VARCHAR(50)
);

CREATE TABLE genre (
   genre_id
);

CREATE TABLE movie (
   movie_id     SERIAL        PRIMARY KEY
,  title        VARCHAR(100)  NOT NULL
,  year         SMALLINT
,  genre_id     INT           NOT NULL
);

CREATE TABLE actor_movie_join (
   actor_movie_join_id  SERIAL   PRIMARY KEY
,  actor_id             INT      NOT NULL
,  movie_id             INT      NOT NULL
,  CONSTRAINT fk_actor_movie_join_1 FOREIGN KEY (actor_id)
      REFERENCES actor(actor_id)
,  CONSTRAINT fk_actor_movie_join_2 FOREIGN KEY (movie_id)
      REFERENCES movie(movie_id)
);