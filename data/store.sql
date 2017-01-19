-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 19 Janvier 2017 à 16:55
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `store`
--

-- --------------------------------------------------------

--
-- Structure de la table `Jeux`
--

CREATE TABLE `Jeux` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `summary` varchar(45) DEFAULT NULL,
  `cover_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Jeux`
--

INSERT INTO `Jeux` (`id`, `name`, `summary`, `cover_url`) VALUES
(1, 'Super Mario World', 'Super Mario World (known in Japan as Super Ma', '//images.igdb.com/igdb/image/upload/t_thumb/rbdpnsh7jkx4cvejygkc.png'),
(2, 'Super Mario Bros. 3', 'Super Mario Bros. 3 is a platform video game ', '//images.igdb.com/igdb/image/upload/t_thumb/ogguvec9vhrsml4uxqrg.png'),
(3, 'Candy Crush Soda Saga', 'Spin-off to the famous Candy Crush Saga, made', '//images.igdb.com/igdb/image/upload/t_thumb/bdacvq7evn1skjcsbozw.png'),
(4, 'Super Mario Run', 'Super Mario goes mobile!\nUnlike other games i', '//images.igdb.com/igdb/image/upload/t_thumb/xlrghajdrbhlpuyk1xgf.png'),
(5, 'Mario Kart 64', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/tnapkuvk8aup3aoamxuz.png'),
(6, 'PokÃ©mon Trading Card Game Online', 'PokÃ©mon Trading Card Game Online (also refer', '//images.igdb.com/igdb/image/upload/t_thumb/wlw3qjmd9u87he3zleh5.png'),
(7, 'Hello, Neighbour!', 'Hello Neighbor is a stealth horror game about', '//images.igdb.com/igdb/image/upload/t_thumb/tyelx5vyuefiuff0gqai.png'),
(8, 'Grand Theft Auto: Vice City', 'In the year 1986, Tommy Vercetti is heavily i', '//images.igdb.com/igdb/image/upload/t_thumb/wfeojuvgbk2kctpfdeff.png'),
(9, 'PewDiePie''s Tuber Simulator', 'Follow in the footsteps of one of the biggest', '//images.igdb.com/igdb/image/upload/t_thumb/aqsq0z9glpf5y6vzldqi.png'),
(10, 'Super Mario Bros.', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/ygfznmlzsw2yb4j88qlv.png'),
(11, 'Dead Island 2', 'Welcome to Zombie California! Slay and surviv', '//images.igdb.com/igdb/image/upload/t_thumb/lumgkti6rht3evlbu8xw.png'),
(12, 'Super Mario 64', 'Super Mario 64 is a 3D action-adventure platf', '//images.igdb.com/igdb/image/upload/t_thumb/scutr4p9gytl4txb2soy.png'),
(13, 'Asphalt 8: Airborne', 'With more than 120 million downloads, the bes', '//images.igdb.com/igdb/image/upload/t_thumb/fgd8wuhejfasibzxyhr4.png'),
(14, 'Pro Evolution Soccer 2017', 'Pro Evolution Soccer 2017 is a sports video g', '//images.igdb.com/igdb/image/upload/t_thumb/togsnlwzoipzu4b68k03.png'),
(15, 'Super Mario 3D World', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/oqqqgruohtigzopvxxbn.png'),
(16, 'Honey Select', 'Honey Select is an eroge created by the Japan', '//images.igdb.com/igdb/image/upload/t_thumb/j4w0ev381yutxuhv8akc.png'),
(17, 'Totally Accurate Battle Simulator', 'A physics based medieval battle simulator whi', '//images.igdb.com/igdb/image/upload/t_thumb/vex1s6b1qxq5bqz2puu8.png'),
(18, 'Call of Duty: Modern Warfare Remastered', 'One of the most critically-acclaimed games in', '//images.igdb.com/igdb/image/upload/t_thumb/yixntz4bbcnw8qfnea7v.png'),
(19, 'ARK: Survival Evolved', 'ARK: Survival Evolved takes on the survival g', '//images.igdb.com/igdb/image/upload/t_thumb/dmwwgrfcsgugg8fhsye9.png'),
(20, 'Basement', 'Basement is a strategy game, where you play a', '//images.igdb.com/igdb/image/upload/t_thumb/ruhw3cmmk0jkechnezw8.png'),
(21, 'Genital Jousting', 'Genital Jousting is an online and local multi', '//images.igdb.com/igdb/image/upload/t_thumb/mzq1tgabzrraghos5yt6.png'),
(22, 'Euro Truck Simulator 2', 'Euro Truck Simulator 2 is a vehicle simulatio', '//images.igdb.com/igdb/image/upload/t_thumb/gklcunivr2u4gsouchfy.png'),
(23, 'Need for Speed: Most Wanted', 'Need for Speed: Most Wanted takes on the game', '//images.igdb.com/igdb/image/upload/t_thumb/onlimcrgz1zsngrffmql.png'),
(24, 'Five Nights at Freddy''s: Sister Location', 'Welcome to Circus Baby''s Pizza World, where f', '//images.igdb.com/igdb/image/upload/t_thumb/qzs2lfqf6cg6ir0x0qi4.png'),
(25, 'Villagers', 'Villagers is a beautifully illustrated and ri', '//images.igdb.com/igdb/image/upload/t_thumb/aooqizxhppovwmuyfkql.png'),
(26, 'Plants vs Zombies: Garden Warfare 2', 'The battle for suburbia grows to crazy new he', '//images.igdb.com/igdb/image/upload/t_thumb/vk9uczy2gvbs0kh9qcee.png'),
(27, 'Pro Evolution Soccer 2016', 'Pro Evolution Soccer 2016 is a football simul', '//images.igdb.com/igdb/image/upload/t_thumb/njdljknlffn4gdmpwvrh.png'),
(28, 'The Witcher 3: Wild Hunt', 'The Witcher: Wild Hunt is a story-driven, nex', '//images.igdb.com/igdb/image/upload/t_thumb/enfj0w4cqsicczzkaas0.png'),
(29, 'Masochisia', 'A young man discovers through a series of hal', '//images.igdb.com/igdb/image/upload/t_thumb/mftzxbt2mmh1bufp3kal.png'),
(30, 'Candy Crush Saga', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/u9s7ap9gi5kestfxhxdf.png'),
(31, 'Call of Duty 4: Modern Warfare', 'Call of Duty 4: Modern Warfare differs from p', '//images.igdb.com/igdb/image/upload/t_thumb/okxplofk1uomxyrnlf2u.png'),
(32, 'Battlefield 4', 'Battlefield 4â„¢ is the genre-defining action', '//images.igdb.com/igdb/image/upload/t_thumb/g23vpma81u9fdiwftyyq.png'),
(33, 'The Last Guardian', 'In a strange and mystical  land, a young boy ', '//images.igdb.com/igdb/image/upload/t_thumb/munqfxbnf1ur93vajjtq.png'),
(34, 'Super Mario Maker', 'Super Mario Maker lets peopleâ€™s imagination', '//images.igdb.com/igdb/image/upload/t_thumb/dp2l6fpd1yfj0sxcjsi8.png'),
(35, 'A Life in Silk - The First Cumming', 'A Life in Silk is a highly-interactive visual', '//images.igdb.com/igdb/image/upload/t_thumb/oo0dqt8ollefvigrr6bj.png'),
(36, 'Mario Kart 8', 'Turn your racing experience upside down! Nint', '//images.igdb.com/igdb/image/upload/t_thumb/ivcvfoeo23xitx8xfz8m.png'),
(37, 'Only If', 'Only If is a surreal first person adventure-p', '//images.igdb.com/igdb/image/upload/t_thumb/dwlut5kq4edrbjxlmf8o.png'),
(38, 'Five Nights at Freddy''s 2', 'Welcome back to the new and improved Freddy F', '//images.igdb.com/igdb/image/upload/t_thumb/gijknwoi0dybriqaxnxi.png'),
(39, 'Intensive Exposure', 'Intensive Exposure is a fast paced game in wh', '//images.igdb.com/igdb/image/upload/t_thumb/ialyqgcgdjsgmsawu9it.png'),
(40, 'The Legend of Zelda: Ocarina of Time', 'The Legend of Zelda: Ocarina of Time reveals ', '//images.igdb.com/igdb/image/upload/t_thumb/shusfaev6gpjuskum2vp.png'),
(41, 'Dragon Ball: Xenoverse 2', 'DRAGON BALL XENOVERSE 2 builds upon the highl', '//images.igdb.com/igdb/image/upload/t_thumb/oss9bgnecqtgn2fvoae2.png'),
(42, 'The Walking Dead: The Telltale Series - A New', 'When family is all you have leftâ€¦how far wi', '//images.igdb.com/igdb/image/upload/t_thumb/cjktwgl53zzbifkcwu7n.png'),
(43, 'Earthlock: Festival of Magic', 'An original turn-based role-playing game set ', '//images.igdb.com/igdb/image/upload/t_thumb/g0whm2zpztk4g3mwpzo4.png'),
(44, 'ASTRONEER', 'Explore and exploit distant worlds in  â€“ A ', '//images.igdb.com/igdb/image/upload/t_thumb/xgguzsjsxtlaclprqytj.png'),
(45, 'Super Mario Galaxy', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/tzhmiarlwidopzrzohd5.png'),
(46, 'RIOT - Civil Unrest', 'As civil crisis deepens and inequality tears ', '//images.igdb.com/igdb/image/upload/t_thumb/cdfsdijmouaxz7jnx8bl.png'),
(47, 'Resident Evil 4 HD', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/sr0fecogohjqyqb7zjvt.png'),
(48, 'Call of Duty: Black Ops III', 'Call of Duty: Black Ops 3 deploys players int', '//images.igdb.com/igdb/image/upload/t_thumb/sllwko8hqltmmklognzp.png'),
(49, 'Super Mario Galaxy 2', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/wyk6wqgo2fjd4g6xdntx.png'),
(50, 'Oppai Slider 2', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/nkugb4uvps5dzccb1wpl.png'),
(51, 'Oppai Slider 2', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/nkugb4uvps5dzccb1wpl.png'),
(52, 'Left 4 Dead 2', 'Left 4 Dead 2 is a cooperative first-person s', '//images.igdb.com/igdb/image/upload/t_thumb/fxyjfhvtwzzof9ij8ehp.png'),
(53, 'PokÃ©mon GO', 'Travel between the real world and the virtual', '//images.igdb.com/igdb/image/upload/t_thumb/ztn8s8y6o5zslmwbc9b6.png'),
(54, 'Mount & Blade II: Bannerlord', 'Mount &amp; Blade II: Bannerlord is an upcomi', '//images.igdb.com/igdb/image/upload/t_thumb/r5busv6ylns65cfuhadd.png'),
(55, 'Tyranny', 'You are a Fatebinder, the judge and execution', '//images.igdb.com/igdb/image/upload/t_thumb/n4docywvgez39uanixnj.png'),
(56, 'Final Fantasy XV', 'Final Fantasy XV is an upcoming action role-p', '//images.igdb.com/igdb/image/upload/t_thumb/exzxitwgvhwzric1byej.png'),
(57, 'Winds of Revenge', 'Wind of Revenge is a simple game made by a te', NULL),
(58, 'Counter-Strike: Global Offensive', 'Counter-Strike: Global Offensive (CS:GO) expa', '//images.igdb.com/igdb/image/upload/t_thumb/tjavlrx5y8lkol7uql40.png'),
(59, 'Grand Theft Auto V', 'The biggest, most dynamic and most diverse op', '//images.igdb.com/igdb/image/upload/t_thumb/vdzfsbissgp55fvfxccp.png'),
(60, 'NBA 2K17', 'NBA 2K franchise continues to stake its claim', '//images.igdb.com/igdb/image/upload/t_thumb/tfebzciucanpvkzsq6ot.png'),
(61, 'Super Mario 3D Land', 'Mario is once again out to beat Bowser in Sup', '//images.igdb.com/igdb/image/upload/t_thumb/fcgiwb5fhmiyoil5xohy.png'),
(62, 'Resident Evil 7: biohazard', 'Resident Evil 7: Biohazard is an upcoming sur', '//images.igdb.com/igdb/image/upload/t_thumb/wprikj6ydxigxadbt2ld.png'),
(63, 'Uncharted 4: A Thief''s End', 'Several years after his last adventure, retir', '//images.igdb.com/igdb/image/upload/t_thumb/tocoysjnay4he4zjdlwo.png'),
(64, 'Tom Clancy''s Rainbow Six: Siege', 'Inspired by the reality of counter terrorist ', '//images.igdb.com/igdb/image/upload/t_thumb/sztcjmrrz4bu9hzthq0m.png'),
(65, 'FIFA 17', 'For the first time ever in FIFA, live your st', '//images.igdb.com/igdb/image/upload/t_thumb/cmtplicvdajycqx2vz6t.png'),
(66, 'Dead by Daylight', 'Dead by Daylight is an asymmetrical multiplay', '//images.igdb.com/igdb/image/upload/t_thumb/j4vfgb82gxzsjicvdrqx.png'),
(67, 'Gravity Rush Remastered', 'Gravity Rush is an action-adventure video gam', '//images.igdb.com/igdb/image/upload/t_thumb/mx5du2ic1safvthafuav.png'),
(68, 'Call of Duty: Modern Warfare 3', 'Call of Duty: Modern Warfare 3 is a first-per', '//images.igdb.com/igdb/image/upload/t_thumb/obimr8uf45m5cdjltket.png'),
(69, 'Youtubers Life', 'Youtubers Life is the ultimate vlogger tycoon', '//images.igdb.com/igdb/image/upload/t_thumb/aifxr1f9hl9l6eh6a7ll.png'),
(70, 'Call of Duty: Black Ops III - Awakening', 'DLC 1 Awakening for Black Ops 3 with all new ', '//images.igdb.com/igdb/image/upload/t_thumb/hezdwiux0snzgwdky4vh.png'),
(71, 'Farming Simulator 17', 'Farming Simulator 17 invites you into the cha', '//images.igdb.com/igdb/image/upload/t_thumb/pa3z9uzmi4qfhuu6huc8.png'),
(72, 'Valley', 'Explore the vast and beautiful world of Valle', '//images.igdb.com/igdb/image/upload/t_thumb/teckkuuai65o2eh6owkq.png'),
(73, 'Need for Speed: Most Wanted', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/i9nybooe1t3tve9yhyn0.png'),
(74, 'Far Cry: Primal', 'Gamers play as TAKKAR, a seasoned hunter and ', '//images.igdb.com/igdb/image/upload/t_thumb/z0gwvg9bgdi7a5xuwlqh.png'),
(75, 'The Legend of Zelda: Breath of the Wild', '"Step into a world of discovery, exploration ', '//images.igdb.com/igdb/image/upload/t_thumb/id7oqxsma8y2lcazszzk.png'),
(76, 'Grand Theft Auto IV', 'What does the American dream mean today? For ', '//images.igdb.com/igdb/image/upload/t_thumb/tvcgnhqrhts9gcqqjrgj.png'),
(77, 'Call of Duty: Infinite Warfare', 'Call of Duty: Infinite Warfare delivers three', '//images.igdb.com/igdb/image/upload/t_thumb/eal3ny34yjjyirfio9wj.png'),
(78, 'Candle', 'Candle is an adventure with challenging puzzl', '//images.igdb.com/igdb/image/upload/t_thumb/az3ynjq4ethsnubuolt2.png'),
(79, 'Shadow Tactics: Blades of the Shogun', 'Skillfully hide from and sneak past the enemi', '//images.igdb.com/igdb/image/upload/t_thumb/kgwsarnz3dkb4gwttc3u.png'),
(80, 'Space Hulk: Deathwing', 'Space Hulk: Deathwing is a First-Person Shoot', '//images.igdb.com/igdb/image/upload/t_thumb/jkxacpun6pxy4wkftye1.png'),
(81, 'Dead Rising 4', 'Itâ€™s the holiday season in Willamette, Colo', '//images.igdb.com/igdb/image/upload/t_thumb/rxykiiokoyhetfgtlwgm.png'),
(82, 'Forza Horizon 3', 'Youâ€™re in charge of the Horizon Festival. C', '//images.igdb.com/igdb/image/upload/t_thumb/olxhsw4djfakodpuedut.png'),
(83, 'Just Dance 2017', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/zcysnxvf8dmqs3idnqu9.png'),
(84, 'Mass Effect: Andromeda', 'A new adventure awaits in the Mass Effect uni', '//images.igdb.com/igdb/image/upload/t_thumb/to0fpjpsmljecmfh5udd.png'),
(85, 'Caravan', 'Many myths and legends have been woven about ', '//images.igdb.com/igdb/image/upload/t_thumb/f98wqaqj5e05b1dfxd7z.png'),
(86, 'Rise of the Tomb Raider', 'Join Lara Croft on her first great tomb raidi', '//images.igdb.com/igdb/image/upload/t_thumb/qk5tk3ny2ldnkubviav7.png'),
(87, 'Dragon Ball Z: Budokai Tenkaichi 3', NULL, '//images.igdb.com/igdb/image/upload/t_thumb/zb9e8lng5su9zpkc4ehf.png'),
(88, 'Arizona Sunshine', 'Step into the midst of a zombie apocalypse as', '//images.igdb.com/igdb/image/upload/t_thumb/tuyyrk2tlzm5qfd7irtl.png'),
(89, 'Horizon: Zero Dawn', 'Horizon Zero Dawn, an exhilarating new action', '//images.igdb.com/igdb/image/upload/t_thumb/yvgbtirrauwekgytcfmg.png'),
(90, 'Sky Break', 'Sky Break is an open-world game on a stormy a', '//images.igdb.com/igdb/image/upload/t_thumb/ebebxnv543d4y5e4wazd.png'),
(91, 'Super Smash Bros. for Wii U', 'Super Smash Bros. for Wii U is the fourth con', '//images.igdb.com/igdb/image/upload/t_thumb/hkvfafzafofri94eyxfw.png'),
(92, 'FINAL FANTASY XV - Season Pass Upgrade', 'The Season Pass allows you to download additi', '//images.igdb.com/igdb/image/upload/t_thumb/rlc4qgumkjimw09mxgdk.png'),
(93, 'Cyberpunk 2077', 'The upcoming RPG from CD Projekt RED, creator', '//images.igdb.com/igdb/image/upload/t_thumb/h9ssivehsetxeoodt6hu.png'),
(94, 'Super Mario All-Stars', 'Super Mario All-Stars was released on the SNE', '//images.igdb.com/igdb/image/upload/t_thumb/nl9vdgf0yei8xzdloza1.png'),
(95, 'Syberia 3', 'Syberia 3 takes you inside an enchanting, mys', '//images.igdb.com/igdb/image/upload/t_thumb/rcnkq8wf9jykaghykcoj.png'),
(96, 'Microsoft Spider Solitaire', 'Spider Solitaire, also known as Microsoft Spi', '//images.igdb.com/igdb/image/upload/t_thumb/zyz5rbwhlqwxhub38xlu.png'),
(97, 'Scrap Mechanic', 'Welcome to the machine-filled creative paradi', '//images.igdb.com/igdb/image/upload/t_thumb/vajbps3fphrcm7yhajmy.png'),
(98, 'Shantae: Half-Genie Hero', 'Shantae embarks on her first full HD adventur', '//images.igdb.com/igdb/image/upload/t_thumb/nl0xylkr12ta44sufduv.png'),
(99, 'Aragami', 'ARAGAMI is a third-person stealth game in whi', '//images.igdb.com/igdb/image/upload/t_thumb/q4xygfwkhoihkdkdwteq.png'),
(100, 'Layers of Fear', 'Layers of Fear is a psychedelic horror that w', '//images.igdb.com/igdb/image/upload/t_thumb/cszqaj3wjp7smxg4llpu.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Jeux`
--
ALTER TABLE `Jeux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Jeux`
--
ALTER TABLE `Jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;