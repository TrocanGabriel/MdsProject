-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Iun 2017 la 13:17
-- Versiune server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `blog_members`
--

CREATE TABLE IF NOT EXISTS `blog_members` (
  `memberID` int(11) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'gabriel', '$2y$10$e9OJd4FioSKsEAbyLpOCFe4GntYxb/ae2toBXSHQNb7axJVBSkpxu', 'gabriel@demo.ro');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postID` int(11) unsigned NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `postCategory` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`, `postCategory`) VALUES
(1, 'Wonder Woman 2017', '<table style="height: 279px;" width="584">\r\n<tbody>\r\n<tr>\r\n<td><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNDFmZjgyMTEtYTk5MC00NmY0LWJhZjktOWY2MzI5YjkzODNlXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="Wonder Woman" width="150" height="221" /></td>\r\n<td><em><strong>Wonder Woman</strong></em> is a 2017 American <a title="Superhero film" href="https://en.wikipedia.org/wiki/Superhero_film">superhero film</a> based on the <a title="DC Comics" href="https://en.wikipedia.org/wiki/DC_Comics">DC Comics</a> character <a title="Wonder Woman" href="https://en.wikipedia.org/wiki/Wonder_Woman">of the same name</a>, distributed by <a title="Warner Bros." href="https://en.wikipedia.org/wiki/Warner_Bros.">Warner Bros. Pictures</a>. It is the fourth installment in the <a title="DC Extended Universe" href="https://en.wikipedia.org/wiki/DC_Extended_Universe">DC Extended Universe</a>. The film is directed by <a title="Patty Jenkins" href="https://en.wikipedia.org/wiki/Patty_Jenkins">Patty Jenkins</a>, with a screenplay by <a title="Allan Heinberg" href="https://en.wikipedia.org/wiki/Allan_Heinberg">Allan Heinberg</a> and a story by Heinberg, <a title="Zack Snyder" href="https://en.wikipedia.org/wiki/Zack_Snyder">Zack Snyder</a>, and <a title="Jason Fuchs" href="https://en.wikipedia.org/wiki/Jason_Fuchs">Jason Fuchs</a>. <a title="Gal Gadot" href="https://en.wikipedia.org/wiki/Gal_Gadot">Gal Gadot</a> stars as the titular character with <a title="Chris Pine" href="https://en.wikipedia.org/wiki/Chris_Pine">Chris Pine</a>, <a title="Robin Wright" href="https://en.wikipedia.org/wiki/Robin_Wright">Robin Wright</a>, <a title="Danny Huston" href="https://en.wikipedia.org/wiki/Danny_Huston">Danny Huston</a>, <a title="David Thewlis" href="https://en.wikipedia.org/wiki/David_Thewlis">David Thewlis</a>, <a title="Connie Nielsen" href="https://en.wikipedia.org/wiki/Connie_Nielsen">Connie Nielsen</a>, and <a title="Elena Anaya" href="https://en.wikipedia.org/wiki/Elena_Anaya">Elena Anaya</a> in supporting roles.</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', '<p><iframe src="https://www.youtube.com/embed/1Q8fG0TtVAY" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>\r\n<p>&nbsp;</p>\r\n<p><em><strong>Wonder Woman</strong></em> is a 2017 American <a title="Superhero film" href="https://en.wikipedia.org/wiki/Superhero_film">superhero film</a> based on the <a title="DC Comics" href="https://en.wikipedia.org/wiki/DC_Comics">DC Comics</a> character <a title="Wonder Woman" href="https://en.wikipedia.org/wiki/Wonder_Woman">of the same name</a>, distributed by <a title="Warner Bros." href="https://en.wikipedia.org/wiki/Warner_Bros.">Warner Bros. Pictures</a>. It is the fourth installment in the <a title="DC Extended Universe" href="https://en.wikipedia.org/wiki/DC_Extended_Universe">DC Extended Universe</a>. The film is directed by <a title="Patty Jenkins" href="https://en.wikipedia.org/wiki/Patty_Jenkins">Patty Jenkins</a>, with a screenplay by <a title="Allan Heinberg" href="https://en.wikipedia.org/wiki/Allan_Heinberg">Allan Heinberg</a> and a story by Heinberg, <a title="Zack Snyder" href="https://en.wikipedia.org/wiki/Zack_Snyder">Zack Snyder</a>, and <a title="Jason Fuchs" href="https://en.wikipedia.org/wiki/Jason_Fuchs">Jason Fuchs</a>. <a title="Gal Gadot" href="https://en.wikipedia.org/wiki/Gal_Gadot">Gal Gadot</a> stars as the titular character with <a title="Chris Pine" href="https://en.wikipedia.org/wiki/Chris_Pine">Chris Pine</a>, <a title="Robin Wright" href="https://en.wikipedia.org/wiki/Robin_Wright">Robin Wright</a>, <a title="Danny Huston" href="https://en.wikipedia.org/wiki/Danny_Huston">Danny Huston</a>, <a title="David Thewlis" href="https://en.wikipedia.org/wiki/David_Thewlis">David Thewlis</a>, <a title="Connie Nielsen" href="https://en.wikipedia.org/wiki/Connie_Nielsen">Connie Nielsen</a>, and <a title="Elena Anaya" href="https://en.wikipedia.org/wiki/Elena_Anaya">Elena Anaya</a> in supporting roles.</p>\r\n<p><em>Wonder Woman</em> is the first <a title="Live action" href="https://en.wikipedia.org/wiki/Live_action">live action</a> theatrical film starring the character, following her first live-action theatrical appearance in 2016''s <em><a title="Batman v Superman: Dawn of Justice" href="https://en.wikipedia.org/wiki/Batman_v_Superman:_Dawn_of_Justice">Batman v Superman: Dawn of Justice</a></em>. In the film, after American pilot <a title="Steve Trevor" href="https://en.wikipedia.org/wiki/Steve_Trevor">Steve Trevor</a> crashes offshore of the island of <a title="Themyscira (DC Comics)" href="https://en.wikipedia.org/wiki/Themyscira_%28DC_Comics%29">Themyscira</a> and tells <a title="Diana Prince" href="https://en.wikipedia.org/wiki/Diana_Prince">Diana Prince</a> about <a title="World War I" href="https://en.wikipedia.org/wiki/World_War_I">World War I</a>, Diana leaves her home to try to stop the war.</p>\r\n<p>Development for the film began in 1996, with Jenkins signing on to direct in 2015. Principal photography began on November 21, 2015, with filming taking place in the United Kingdom, France, and Italy before wrapping up on May 19, 2016. Additional filming took place in November 2016.</p>\r\n<p><em>Wonder Woman</em> premiered in Shanghai on May 15, 2017, and was released in the United States on June 2, 2017, in 2D, 3D, and <a title="IMAX" href="https://en.wikipedia.org/wiki/IMAX">IMAX</a> 3D. It received positive reviews from critics, with many praising Gadot and Pine''s performances and has grossed $240 million worldwide.</p>', '2017-06-06 23:10:58', 'action'),
(2, 'A Cure For Wellness', '<p><em><strong>&nbsp;</strong></em></p>\r\n<table style="height: 23px;" width="478">\r\n<tbody>\r\n<tr>\r\n<td><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTg5Njg1MzIwNl5BMl5BanBnXkFtZTgwNDU1NjczMDI@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="A cure for wellness" width="150" height="221" /></td>\r\n<td><em><strong>A Cure for Wellness is a 2016 American-German <a title="Psychological horror" href="https://en.wikipedia.org/wiki/Psychological_horror">psychological horror</a> <a title="Thriller film" href="https://en.wikipedia.org/wiki/Thriller_film">thriller</a> film directed by <a title="Gore Verbinski" href="https://en.wikipedia.org/wiki/Gore_Verbinski">Gore Verbinski</a> and written by <a title="Justin Haythe" href="https://en.wikipedia.org/wiki/Justin_Haythe">Justin Haythe</a>. The film stars <a title="Dane DeHaan" href="https://en.wikipedia.org/wiki/Dane_DeHaan">Dane DeHaan</a>, <a title="Jason Isaacs" href="https://en.wikipedia.org/wiki/Jason_Isaacs">Jason Isaacs</a> and <a title="Mia Goth" href="https://en.wikipedia.org/wiki/Mia_Goth">Mia Goth</a>, and follows a young American executive who is sent to a mysterious rehabilitation center in the <a title="Swiss Alps" href="https://en.wikipedia.org/wiki/Swiss_Alps">Swiss Alps</a>. The film was released on February 17, 2017, by <a title="20th Century Fox" href="https://en.wikipedia.org/wiki/20th_Century_Fox">20th Century Fox</a>. The film received mixed reviews and was a <a title="Box office bomb" href="https://en.wikipedia.org/wiki/Box_office_bomb">box office bomb</a>, grossing $26 million against its $40 million production budget.</strong></em></td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p><iframe src="https://www.youtube.com/embed/JF1rLFCdewU" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>\r\n<p>&nbsp;</p>\r\n<p>At a large financial services firm in New York City, a man named Morris is working late when he suffers a fatal heart attack. Lockhart, an ambitious young executive, takes his place and is sent by the company board members to retrieve the company''s CEO, Roland Pembroke, from an idyllic, but mysterious, "wellness center" at a remote location in the <a title="Swiss Alps" href="https://en.wikipedia.org/wiki/Swiss_Alps">Swiss Alps</a>. This retrieval is prompted by a troubling letter from a seemingly much changed Pembroke, whom they need to sign off on an imminent company merger. There is also an ongoing investigation into criminal business deals, which several partners hope to pin on Pembroke upon his return. Arriving at the spa, Lockhart is met with some resistance by the staff, particularly Dr. Heinreich Volmer, in his attempts to speak with Pembroke. He eventually succeeds in getting through to him, but not before a car crash forces him to recover at the center with a broken leg.</p>\r\n<p>In his time at the spa, Lockhart meets a mysterious young girl named Hannah, who, like Volmer, drinks a strange fluid kept in a cobalt bottle.</p>\r\n<p>A patient named Victoria Watkins, as well as residents of the nearby town, tell Lockhart the story of the spa that was built on the ruins of a castle, once owned by a baron 200 years ago. The baron desired an heir of pure blood and married his sister. When the baron learned she was infertile he began performing hellish experiments on the peasants in order to find a way to cure his wife''s infertility. He succeeded, but after finding the bodies of his victims, the peasants rose up and burned the castle down. The baron''s pregnant sister was captured by the peasants. The baby was then cut from her womb before she was burned. Although they tossed the baby into the local aquifer, it somehow survived.</p>\r\n<p>Lockhart investigates his suspicions and discovers the transfusion wing of the spa is a front for macabre medical experiments. Eels, whose lives can be vastly extended by the properties in the aquifer''s water that is toxic to humans, are used. The doctor filters the eels through the bodies of patients at the retreat, to produce the "cure", which Volmer, Hannah and others are ingesting. Lockhart is captured by Volmer, who is actually the centuries-old baron, surviving off the cure, and Lockhart is subjected to nightmarish treatments that warp his mind like Pembroke, but Hannah sees that he''s been changed, and gives him back the ballerina his mother gave him, which breaks him out of his delerium.</p>\r\n<p>Lockhart begins writing a letter to his employer saying that he intends to remain at the spa, but has a moment of clarity and realizes that his leg was never actually broken. He rips off the cast and goes in search of Hannah.</p>\r\n<p>Around this time, Hannah has her first menstrual cycle and Volmer celebrates with an elaborate ball. He leads Hannah to a secret room, built in the ruins of the castle, and prepares to rape her. Lockhart confronts Volmer and realizes that Hannah is Volmer''s daughter, that was thrown in the well, who is aging very slowly from the cure. During the ensuing fight, Volmer''s face is revealed to be a mask that hides hideous burns. Lockhart sets Volmer and the castle on fire, but is overpowered. Hannah saves him by killing Volmer, driving the edge of a shovel into his head. He then falls into a pool of the spa water, and is eaten by the eels.</p>\r\n<p>Lockhart and Hannah escape from the spa on a bicycle as fire engulfs the structure. On the road, Lockhart crashes into a car carrying his employers, who have arrived from New York to retrieve him and Pembroke. Lockhart is ordered into the car by the employers, who hope he will return to New York with them. Suspecting they plan to pin all corporate wrongdoings on him, he instead chooses to ride away with Hannah, on a bike, whilst grinning insanely.</p>', '2017-06-06 23:14:13', 'fantasy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_members`
--
ALTER TABLE `blog_members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_members`
--
ALTER TABLE `blog_members`
  MODIFY `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
