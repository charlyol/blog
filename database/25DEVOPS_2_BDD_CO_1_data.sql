-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

INSERT INTO `authors` (`id`, `name`, `first_name`, `pseudo`) VALUES
(-1,	'Un',	'Know',	'unknown'),
(1,	'Charly',	NULL,	'Regnilo'),
(3,	'Valentine',	'Masse',	'Val'),
(4,	'Corentin',	'houssen',	'Gotaga'),
(5,	'Lucas',	'Hauchard',	'Squeezie'),
(6,	'Smithson',	'Johnny',	'CoolKidJohnny'),
(7,	'Johnsonson',	'Emilia',	'AwesomeEmilia'),
(8,	'Williamson',	'Mickey',	'SmartMickey'),
(9,	'Joneson',	'Sophie',	'SophieBookworm'),
(10,	'Browner',	'Ethan',	'EthanSportsFan'),
(11,	'Millerberg',	'Oliviana',	'ArtLoverOliviana'),
(12,	'Davisberg',	'Danielle',	'DanielleScienceWhiz'),
(13,	'Garcias',	'Emmaline',	'MusicLoverEmmaline'),
(14,	'Rodriguezberg',	'Willamina',	'TechieWillamina'),
(15,	'Martinezson',	'Avalina',	'AvaMathGenius'),
(16,	'Doe',	'John',	'john_doe'),
(17,	'Smith',	'Alice',	'alice_smith'),
(18,	'Johnson',	'Bob',	'bob_johnson'),
(19,	'Miller',	'Eva',	'eva_miller'),
(20,	'Brown',	'Michael',	'michael_brown'),
(21,	'Davis',	'Emily',	'emily_davis'),
(22,	'Garcia',	'Daniel',	'daniel_garcia'),
(23,	'Wilson',	'Olivia',	'olivia_wilson'),
(24,	'Taylor',	'Matthew',	'matthew_taylor'),
(25,	'Martinez',	'Sophia',	'sophia_martinez');

INSERT INTO `Categories` (`id`, `name`) VALUES
(1,	'loisirs'),
(4,	'fiction'),
(5,	'Science'),
(6,	'Technologie'),
(7,	'Actualités'),
(8,	'Santé'),
(9,	'Éducation'),
(10,	'Mode'),
(11,	'Cuisine'),
(12,	'Voyages'),
(13,	'Sport'),
(14,	'Art');

INSERT INTO `Comments` (`id`, `body`, `publication_date`, `Post_id`, `author_id`) VALUES
(1,	'Bravo ',	'2024-01-23',	1,	1),
(3,	'null ou pas ',	'2024-01-23',	2,	-1),
(7,	'Excellent article!',	'2024-01-25',	1,	21),
(8,	'Merci pour cet article informatif.',	'2024-01-26',	2,	3),
(9,	'Très intéressant.',	'2024-01-27',	3,	4);

INSERT INTO `Posts` (`id`, `title`, `body`, `date1`, `date0`, `classification`, `author_id`) VALUES
(1,	'Sport',	' \"Courir vite, sauter haut.\"',	'2024-01-23',	'2024-02-23',	3,	1),
(2,	'Biathlon',	' \"Courir vite, sauter haut aussi\"',	'2024-01-24',	'2024-02-24',	NULL,	-1),
(3,	'lire des livres cool',	'super livre cool bien ou pas ?',	'2024-01-23',	'2024-02-23',	5,	3),
(4,	'Ajouter un article',	' \"i hope so its good.\"',	'2024-01-22',	'2024-02-22',	5,	-1),
(5,	'Ajouter un article',	' \"i hope so its good.\"',	'2024-01-22',	'2024-02-22',	5,	-1),
(6,	'Ajouter un article',	' \"i hope so its good.\"',	'2024-01-22',	'2024-02-22',	5,	-1),
(7,	'Ajouter un articleN°2',	' \"i hope so its good.ghgfhd\"',	'2024-01-22',	'2024-02-22',	5,	-1),
(72,	'Les avancées récentes en physique ',	'Des découvertes récentes dans le domaine de la physique quantique ouvrent de nouvelles perspectives passionnantes.',	'2024-01-24',	'2024-01-23',	1,	1),
(73,	'Les nouvelles tendances  à surveiller',	'Un aperçu des technologies émergentes qui façonneront notre avenir.',	'2024-01-25',	'2024-01-24',	2,	21),
(74,	'Les événements mondiaux qui année',	'Un récapitulatif des événements majeurs qui ont eu un impact mondial au cours de l\'année passée.',	'2024-01-26',	'2024-01-25',	3,	3),
(75,	'Conseils  une  saine et équilibrée',	'Des conseils pratiques pour maintenir une vie saine, de l\'alimentation à l\'exercice physique.',	'2024-01-27',	'2024-01-26',	4,	4),
(76,	'Nouvelles approches éducatives ',	'Découvrez des méthodes éducatives innovantes qui changent la façon dont nous apprenons et enseignons.',	'2024-01-28',	'2024-01-27',	5,	5),
(77,	'La mode éthique : un   dans l\'industrie',	'Comment la mode éthique émerge comme une alternative durable dans une industrie souvent critiquée pour son impact environnemental.',	'2024-01-29',	'2024-01-28',	3,	6),
(78,	'Voyage  autour du monde',	'Explorez des recettes authentiques et des saveurs exotiques provenant des quatre coins du monde.',	'2024-01-30',	'2024-01-29',	4,	7),
(79,	'Destinations de  méconnues à découvrir',	'Découvrez des destinations de voyage moins fréquentées offrant des expériences uniques.',	'2024-01-31',	'2024-01-30',	5,	8);

INSERT INTO `Post_Categories` (`Post_id`, `Categories_id`) VALUES
(1,	1),
(2,	1),
(3,	4),
(4,	1),
(5,	5),
(6,	6),
(7,	1),
(7,	8);

-- 2024-01-24 10:38:15
