CREATE TABLE public.users
(
    nombre character(20) COLLATE pg_catalog,
    apellido character(20) COLLATE pg_catalog,
    pswrd character(20) COLLATE pg_catalog,
    puntos integer,
    usuario character(20) COLLATE pg_catalog,
    tipo character(1) COLLATE pg_catalog,
    PRIMARY KEY (usuario)
)

CREATE TABLE teams
(
    nombre character varying(50) COLLATE pg_catalog,
    grupo character(1) COLLATE pg_catalog,
    bandera bytea,
    PRIMARY KEY (nombre),
	CHECK (grupo = 'A'::bpchar OR grupo = 'B'::bpchar OR grupo = 'C'::bpchar OR grupo = 'D'::bpchar OR grupo = 'E'::bpchar OR grupo = 'F'::bpchar OR grupo = 'G'::bpchar OR grupo = 'H'::bpchar)
)

CREATE TABLE equipos(
	Nombre char(20),
	Bandera bytea,
	Grupo char(1),
	Puntos integer,
	Golesc integer,
	Golesf integer,
	Primary Key (Nombre)
	
)