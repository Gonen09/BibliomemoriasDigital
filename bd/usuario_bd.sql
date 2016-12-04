CREATE USER 'memorias'@'localhost';
SET password for 'memorias'@'localhost' = password('biblio');

GRANT SELECT ON memoteca.administradores to 'memorias'@'localhost';
