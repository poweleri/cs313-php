DROP TABLE usr CASCADE;
DROP TABLE parking_lot CASCADE;
DROP TABLE lot_comment CASCADE;
DROP TABLE building CASCADE;
DROP TABLE parking_lot_building_join CASCADE;

CREATE TABLE public.usr (
   usr_id   SERIAL       NOT NULL
,  username VARCHAR(100) NOT NULL UNIQUE
,  password VARCHAR(100) NOT NULL
,  CONSTRAINT pk_usr PRIMARY KEY (usr_id)
);

CREATE TABLE public.parking_lot (
   parking_lot_id SERIAL       NOT NULL
,  description    TEXT
,  conditions     VARCHAR(100)
,  CONSTRAINT pk_parking_lot PRIMARY KEY (parking_lot_id)
);

CREATE TABLE public.lot_comment ( 
   lot_comment_id    SERIAL       NOT NULL
,  lot_comment_info  VARCHAR(500) 
,  rating            INT          NOT NULL
,  usr_id            INT          NOT NULL
,  parking_lot_id    INT          NOT NULL
,  CONSTRAINT pk_lot_comment PRIMARY KEY (lot_comment_id)
,  CONSTRAINT fk_lot_comment_1 FOREIGN KEY (usr_id)
      REFERENCES public.usr(usr_id)
,  CONSTRAINT fk_lot_comment_2 FOREIGN KEY (parking_lot_id)
      REFERENCES public.parking_lot(parking_lot_id)
);

CREATE TABLE public.building (
   building_id    SERIAL       NOT NULL
,  building_cd    VARCHAR(5)   NOT NULL UNIQUE
,  description    VARCHAR(500)
,  CONSTRAINT pk_building PRIMARY KEY (building_id)
);

CREATE TABLE public.parking_lot_building_join (
   parking_lot_building_join_id SERIAL NOT NULL
,  parking_lot_id               INT    NOT NULL
,  building_id                  INT    NOT NULL
,  CONSTRAINT pk_parking_lot_building_join 
      PRIMARY KEY (parking_lot_building_join_id)
,  CONSTRAINT fk_parking_lot_building_join_1 
      FOREIGN KEY (parking_lot_id) REFERENCES
      public.parking_lot(parking_lot_id)
,  CONSTRAINT fk_parking_lot_building_join_2 
      FOREIGN KEY (building_id) REFERENCES
      public.building(building_id)
);

INSERT INTO usr (username, password)
   VALUES ('test', 'password');

INSERT INTO parking_lot (description, conditions)
   VALUES ('The _ Parking Lot', 'S Parking pass');

INSERT INTO building (building_cd, description)
   VALUES ('TEST', 'The Test Building');

INSERT INTO lot_comment (lot_comment_info, rating, usr_id, parking_lot_id)
   VALUES ('This parking lot is convienient, save the giant pot hole', 4, 1, 1);

INSERT INTO parking_lot_building_join (parking_lot_id, building_id)
   VALUES (1, 1);