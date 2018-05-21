-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2018 at 09:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashvigil`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_badge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_badge`) VALUES
(1, 'ASC President', 'primary'),
(2, 'ASC Vice President', 'warning'),
(3, 'Executive Committee', 'info'),
(4, 'Academics', 'danger'),
(5, 'Housing', 'secondary'),
(6, 'Student Affairs', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_group`) VALUES
(1, '2018'),
(2, '2019'),
(3, '2020'),
(4, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `comm_id` int(11) NOT NULL,
  `comm_name` varchar(255) NOT NULL,
  `comm_headName` varchar(255) NOT NULL,
  `comm_desc` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`comm_id`, `comm_name`, `comm_headName`, `comm_desc`) VALUES
(1, 'ASC President', 'Edwin Adatsi', '\"Be nothing, lest it be lasting\" this has been the grounding principle of the current ASC president, Edwin Adatsi. Edwin is a junior who is currently studying Computer Engineering in Ashesi University. Edwin believes every act should be motivated by the greater good of a lasting and impactful effect. From his time in first year, Edwin served as the Communication Head of Pencils of Promise Club which has the sole objective of improving access to education all over the world. Through several projects and engagement, the students of Berekuso and Adaklu-Sofa have felt the impact of the club\'s objective. He currently heads the club with a fellow student. With a developing knack for public speaking, Edwin and six other students represented Ashesi in the 64th edition of the Harvard National Model United Nations where he represented Uruguay\'s interests. Edwin enjoys playing basketball and cooking. In his role as the new ASC president, his teams\' primary objective is to create an entirely independent and collaborative student body, with a vibrant campus outlook. An outlook which should be nothing but lasting.'),
(2, 'ASC Vice President', 'Benjamin Annan', 'Benjamin Annan, a Mechanical Engineering major of the Ashesi class of 2019 is best described as a politician at heart and an engineer in mind. Since enrolling in Ashesi in the Fall of 2015, he has previously served as the Fund manager of the Ashesi Student Scholarship Fund (ASSF). He currently holds the position of Programs Manager of Kingdom Christian Fellowship (KCF), and doubles as a Career Peer Advisor with the Career Center. As Vice-President of the Ashesi Student Council his primary aim is to build a firm fundamental structure with professionalism to the Student Council. He aspires to become a politician in a few years. He believes Engineers make the best leaders and the best of every profession and pledges to do whatever he can to contribute his quota because Ashesi is one of God\'s great gifts to Africa.'),
(3, 'Academic Committee', 'Kwasi Korboeo', 'Kwasi Korboe is a junior studying Business Administration. Since the tender age of ten, he has loved taking part in various experiences and engaging with people. As a result, he lives by the mantra, \"Life is an Experience\". He has engaged in many projects since entering Ashesi and hopes to take part in more in the future. He led a team of students to attend the Harvard National Model United Nations 2017 and has worked at two reputable petroleum companies. He is currently a Career Peer Advisor educating students on how to develop their careers, and he works with different social enterprises such as 19 Ambassador Integrity Campaign to give back to his society.\r\n\r\nHaving served on the Academic Committee in his first year, Kwasi hopes to make the committee more engaging to the students in the next year. By organizing interactive educational events, involving students in solving student problems and campaigning for decreased academic misconduct, Kwasi aims at making the Academic Committee an influential and important aspect of student life on campus.'),
(4, 'Finance Committee', 'Joseph-Peter Yoofi Brown-Pobee', 'Yoofi Brown-Pobee\'19 is the Finance Committee Chairperson of the Student Council and a Management Information Systems major. An alumnus of Tema International School, he immediately got into student government in his first year, joining the Sports and Finance Committees. He also joined the Ashesi D: Lab where he coordinated a cross university Design Project between Ashesi University and Brown University. He engaged in a similar project in 2017 this time with Dartmouth University and is currently a Design Lab Management Intern in charge of coordinating Hackathons that produce high impact solutions. He loves professional wrestling particularly WWE, is a Chelsea fan and thinks Breaking Bad and Prison Break are the best series ever made. He knows nothing about basketball (still thinks Kobe is 25 years). He loves banter and making jokes and really cherishes his friends and classmates. One thing he guarantees with this ASC is efficiency and diligence. You won\'t forget team.'),
(5, 'Outreach Committee', 'Kofi Anamoa Mensah', 'Kofi Anamoa is a junior studying Electrical / Electronic Engineering. He enjoys teaching and helping others in whatever capacity he can. Serving on previous Outreach Committees since his freshman year, Kofi has developed a desire to foster a community that is socially and environmentally conscious. Kofi is a member of Tech Era, an organization that seeks to equip underprivileged Junior High School students with the necessary computing skills needed in this fast-growing technological era. There, he serves in the capacity of the Tech Module lead and manages student volunteer tutors, develop and manage the curriculum for teaching and learning in the most practical way possible. As the Outreach Committee Chairperson, Kofi looks forward to creating a conducive space where community engagement groups have the resources necessary to operate, as well as radiate the giving back spirit of the community.'),
(6, 'Sports Committee', 'Kennedy Minta', 'Kennedy expresses deep concerns to improve sports in Ashesi, and offer major attention towards the less patronized sports. He is an individual grounded on the principles of commitment and leadership. He was on the previous Sports Committee, and in the upcoming year hopes to further the remarkable work done by the outgoing team. Kennedy is currently the deputy captain for Kasanoma FC, an Ashesi Premier League club. Prior to Ashesi, he participated in the Danish Soccer Tournament, Dana Cup. He has fun when playing sports, and would encourage you to join his fun by showing up for all sports related activities on and off campus. Kennedy is an easily approachable individual and will welcome your ideas on how sports can be enhanced at Ashesi.'),
(7, 'Entertainment Committee', 'Odette Ofosu-Siaw', '\"When the music changes, so does the dance...\" as such, it is time for entertainment to be turned up a notch. Odette Ofosu-Siaw is currently a sophomore majoring in Business Administration and the ASC Entertainment Committee Chairperson. She finds delight in creating experiences by traveling the world, learning new things and meeting new people. She has previously served as an active member of the entertainment committee since her freshman year. In her tenure of office, she aspires to make the Ashesi community vibrant for students, staff, and faculty, to not only promote inclusion in Ashesi but have fun while doing so. For what shall it profit a man, to gain a 4.0 GPA with no college experience'),
(8, 'Off-Campus Committee', 'Elorm Dela-Brown', 'Elorm is a junior, a Business Administration major and an avid sportsman. He\'s enthusiastic about welfare and being a part of fun occasions. There\'s always one thing he\'s kept close to heart and it\'s that \"life is but one\". Life is way too short, but God didn\'t only give us 24 hours, He gave us time and he intends to use that meaningfully and its full capacity. As Off-Campus chairperson, he intends to explore the different fun opportunities that can engage as many students as possible regardless of your year group, nationality or residence. Stress is eminent here at Ashesi and fun can be the same too. I can\'t do this without the cooperation of the student body, so I hope to see you all around. Remember, like me, never wake up without hope and sleep with disappointment. Just live, laugh and learn!'),
(9, 'Public Relations', 'Wayne Gakuo', 'Wayne Gakuo is a social and outgoing student who hails from Mombasa, Kenya. His love for social media came when he just finished high school. As a tech-enthusiast and always thirsty for knowledge, he was constantly using online media to satisfy his curiosity; knowing what is trending and newly-introduced technological gadgets. Having been financially-sponsored in high school, and now in Ashesi University under the MasterCard Foundation Scholarship, Wayne loves community outreach programs since he feels he has an obligation to mentor the young ones from disadvantaged backgrounds. \"Financial constraints should not bar people from gaining access to education\", he says. \"There is unlimited and untapped potential that rests with these future leaders.\" Wayne has been in the previous Public Relations Committee where he spearheaded the Ashesi Students Council\'s social media team that saw 128% increase in the number of followers both on Instagram and Facebook. \"I look forward to using my committee as a platform where students get to learn and sharpen their skills in photography, writing, cinematography and graphic designing\", he adds. \"With this, the produced content will be used to showcase the lives of Ashesi students and magnify the image of the ASC.\"'),
(10, 'General Secretary', 'Zoe Delasi Tagboto', 'Zoe Delasi Tagboto is a member of the Class of 2020 majoring in Computer Science. She is passionate about being an active member of student government. Since freshman year, she has been actively involved in extracurricular activities having the chance to interact with and learn about the various concerns of the student body. She was elected by her peers as the Academic Representative for the class of 2020 and is a Career Peer Advisor which gave her the drive to use the skills she developed to create change in Ashesi. As the ASC general secretary, she hopes to use her leadership and communication skills to improve student wellbeing and provide support to the other executive members as they carry out their duties. Her willingness to volunteer and work with different student groups, while maintaining a consistently high GPA attest to her strong organizational and time management skills and her ability to prioritize. She believes that this role would give her the ability to serve and protect the students by ensuring the members of the committee meet their deadlines and live out their promises.'),
(11, 'Welfare Committee', 'Isatou Jallow', 'Isatou is a MasterCard scholar, from the Gambia, studying Business Administration at Ashesi. She has diverse list of hobbies, from reading magazines, hanging out with kids, travelling, watching movies, public speaking, taking selfies, and always looking for new ways of innovation. She has been involved in a wide range of activities in Ashesi, from being a tutor for pre-calculus and foundation for design and entrepreneurship, to actively planning and engaging in school events such as orientations, club fairs, graduations, and elections. Also, she is a senior leader at Future of Africa (FOA), an NGO that advocates for the rights and dignity of street children in Accra through street outreaches that includes mentorship and other weekly programs. She has also had the privilege of serving on various boards in the Ashesi student council. Most of all, she takes pride in been part of the first student parliament in the school\'s history. She looks forward to serving Ashesi once again, as the Welfare Chairperson. In the end, she strongly believe the lives we touch, the destinies we redefine and the impacts we make will be what matters the most.'),
(12, 'Off-Campus Committee', 'Elorm Dela-Brown', 'Elorm is a junior, a Business Administration major and an avid sportsman. He is enthusiastic about welfare and being a part of fun occasions.  There is always one thing he is kept close to heart and it\'s that \"life is but one\". Life is way too short, but God didn\'t only give us 24 hours, He gave us time and he intends to use that meaningfully and its full capacity.  As Off-Campus chairperson, he intends to explore the different fun opportunities that can engage as many students as possible regardless of your year group, nationality or residence. Stress is eminent here at Ashesi and fun can be the same too. I cannot do this without the cooperation of the student body, so I hope to see you all around. Remember, like me, never wake up without hope and sleep with disappointment. Just live, laugh and learn!'),
(18, 'Ad-Hoc Committee', 'Kwabena Mensah', 'He is a good guy');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` varchar(6) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `commt_id` int(11) NOT NULL,
  `feedback_text` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `email_address`, `commt_id`, `feedback_text`) VALUES
('fb125', 'hamza.kamara@aucampus.onmicrosoft.com', 3, 'Keep Up The good work'),
('fb133', 'oliver.mensah@ashesi.edu.gh', 2, 'I REALLY WANT TO KNOW WHY THEY DO ME SO'),
('fb251', 'oliver.mensah@ashesi.edu.gh', 1, 'I WANT TO KNOW WHY THEY ARE DOING THAT EH'),
('fb283', 'oliver.mensah@ashesi.edu.gh', 2, 'another one for the mandem'),
('fb352', 'niiquartey@ymail.com', 2, 'should send'),
('fb377', 'nii.quartey@ashesi.edu.gh', 1, 'Keep Up the Good Work'),
('fb433', 'oliver.mensah@ashesi.edu.gh', 2, 'I want to know more from the acs vice president'),
('fb677', 'oliver.mensah@ashesi.edu.gh', 1, 'I think you guys should really work hard at making students feel your presence. I mean  be more proactive. You committee is too dull.'),
('fb804', 'oliver.mensah@ashesi.edu.gh', 3, 'they are good'),
('fb953', 'oliver.mensah@ashesi.edu.gh', 2, 'i am okay');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `forum_topic` text NOT NULL,
  `forum_cat` int(11) NOT NULL,
  `forum_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `user_id`, `forum_topic`, `forum_cat`, `forum_text`) VALUES
(1, 18, 'Wellness', 6, 'What is the ASC doing about the health of students on campus?'),
(2, 17, 'Life', 5, 'Life on campus is quite boring. What is the ASC doing to make the campus fun aside kool-aid events?'),
(32, 23, 'Where can i get housing on campus?', 5, 'I am concerned about staying here for the next semester'),
(34, 23, 'Final year courses', 4, 'I am a junior moving to my final year. Can the ASC suggest to the school administration and registrar to reduce the course load in the final semester?'),
(49, 17, 'On-Campus Housing', 5, 'Why dont i have a room on campus?'),
(50, 28, 'Exam Period', 4, 'What is being done by the academic committee to extend the exam period at the end of the semester?'),
(52, 29, 'Why is the ASC Vice President not so vibrant?', 2, 'The ASC Vice President seems to be out fo touch with the Ashesi community. I think he has to be more vibrant.');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `note_title` text NOT NULL,
  `note_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`note_id`, `note_title`, `note_text`) VALUES
(1, 'I have to add a new poll', 'A new poll about inclusion'),
(7, 'Check Polls', 'Check firebase JSON poll results for duplicates. SurveyJS services should extend to retrieving accurate results'),
(8, 'Newsletter', 'Send out News letter regarding housing'),
(9, 'Add a new poll', 'Go to surveyJS site to add poll');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `post_by` int(11) NOT NULL,
  `post_text` text NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `forum_id`, `post_by`, `post_text`, `post_date`) VALUES
(2, 22, 23, 'this is for forum 22. I am very concerned about housing in Ashesi.', '2018-04-23'),
(3, 34, 23, 'student affairs are very important in this age', '2018-04-24'),
(4, 34, 23, 'i also think we should put the students at the centre of development', '2018-04-23'),
(5, 36, 23, 'esi be shark o', '2018-04-22'),
(6, 47, 17, 'i have a few questions here', '2018-04-24'),
(7, 47, 17, 'and another one', '2018-04-24'),
(8, 47, 17, 'and a last one', '2018-04-24'),
(9, 47, 17, 'lasttt', '2018-04-24'),
(10, 48, 27, 'I am concerned about how you got here', '2018-04-24'),
(11, 48, 17, 'add a post', '2018-04-24'),
(12, 49, 17, 'I still vex', '2018-04-25'),
(13, 50, 28, 'Any thoughts Ashesi community?', '2018-04-26'),
(14, 51, 29, 'Dont you think we should hear more from hime?', '2018-04-26'),
(15, 52, 29, 'What are your thoughts on this guys?', '2018-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `year_group` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `username`, `year_group`, `email`, `password`) VALUES
(4, 'Naa Oyoe', 'Quartey', 'naaoyoe.quartey', 4, 'naa.oyoe@ashesi.edu.gh', '$2y$10$nEGAtT1CqrqW/rTB.qaA1.JAKIkf53dlqYpLZ8A1bGegbdzDV4jIO'),
(8, 'barbara', 'boateng', 'barbara.boateng', 3, 'niiquartey@ymail.com', '$2y$10$nvmTQarJ49gZPNkiGLADT.uDlciieqqg/0MuEZjZL3GMU4pXcF2OS'),
(17, 'oliver', 'mensah', 'oliver.mensah', 3, 'oliver.mensah@ashesi.edu.gh', '$2y$10$WBvLOZSnWVWOukSnHJBdouYQ5KUELlIh9kstwFjMOYOEjn/f1uw0u'),
(18, 'benedict', 'quartey', 'benedict.quartey', 1, 'benedict.quartey@ashesi.edu.gh', '$2y$10$SU9V9GUoojbVOqF5hTGV9.WJIldTCZgMhpbO4YbVoYmCqt7qczG9C'),
(19, 'jennifer', 'horthman', 'jennifer.horthman', 3, 'jennifer.horthman@ashesi.edu.gh', '$2y$10$FRz0nd2EPwhhQAxSLoQWE.LFc9y0SKviYz2uF.IaKJdqiAUbEPNqa'),
(20, 'admin', 'admin', 'admin', 1, 'admin@ascvigil.com', '$2y$10$ErvBI73K3noIWqHd39iyKezHJTNkbXOsY6gDOaFjAagvAfCFBZj2m'),
(22, 'gilbert', 'tackie', 'gilbert.tackie', 1, 'gilbert.tackie@ashesi.edu.gh', '$2y$10$9dFguhzPegvB8WrR1yktle7y3PWvi0RETKvO./2Po4iMGTHAhs5lS'),
(23, 'Boma', 'Eli', 'boma.eli', 1, 'boma.eli@ashesi.edu.gh', '$2y$10$ywcrnt3ZgwjlVBgb02ZSd.fANE3/Q19wvAMHwvUni/YWYkINy2JcW'),
(25, 'Adwoa', 'Armah', 'adwoa.armah', 1, 'adwoa.armah@ashesi.edu.gh', '$2y$10$/3SWlhcuzWEHsgjHF9Qi5ulJrguFi.F/NfiwrrciYBFPJDOul.Mqm'),
(27, 'kingsley', 'yankson', 'kingsley.yankson', 1, 'kingsley.amoaning@aucampus.onmicrosoft.com', '$2y$10$YPgN681X3v7wkPsmC1nFqeyIs0ukVl1E43/UdGA6cVlng/CE.nBH6'),
(28, 'Hamza', 'Kamara', 'hamza.kamara', 1, 'hamza.kamara@aucampus.onmicrosoft.com', '$2y$10$46mh4loax3o5.IgxUr36qO2MJbRmTYCiiPYQ3Pa1fTWVWv7714.PW'),
(29, 'Nii', 'Quartey', 'nii.quartey', 1, 'nii.quartey@ashesi.edu.gh', '$2y$10$pJGPnzPA/xVnxi.BQVEEP.2HNDD2cW/YPN/cuDRMYExmmzZG5Xcty');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `sub_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`sub_id`, `user_id`, `user_email`) VALUES
(12, 17, 'jennifer.horthman@ashesi.edu.gh'),
(13, 29, 'nii.quartey@ashesi.edu.gh');

-- --------------------------------------------------------

--
-- Table structure for table `usercomment`
--

CREATE TABLE `usercomment` (
  `comment_id` int(11) NOT NULL,
  `comment_signature` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment_datetime` date NOT NULL,
  `comments` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercomment`
--

INSERT INTO `usercomment` (`comment_id`, `comment_signature`, `username`, `comment_datetime`, `comments`, `status`) VALUES
(11, 'edwinbenj17', 'Anon', '2018-03-01', 'I do not like the way i was treated by some ASC representatives when i came as freshman. I am hoping this will change so i am rooting for you', 'true'),
(13, 'edwinbenj17', 'Nii.Quartey', '2018-03-05', 'I am a freshman. Your line up looks quite intereting', 'true'),
(14, 'caroldav17', 'Anon', '2018-03-05', 'I hope the aspirant, stays true to his promises and carries out the said activities. Currently, life on campus is not the best and as such i believe his promises are in order.', 'true'),
(16, 'caroldav17', 'Nii.Quartey', '2018-03-05', 'carol & sasu all the way', 'true'),
(19, 'elvisyas17', 'barbara.boateng', '2018-03-12', 'I am content', 'true'),
(20, 'elvisyas17', 'Anon', '2018-03-12', 'I do not like this. nothing substantial here', 'false'),
(26, 'caroldav17', 'oliver.mensah', '2018-04-24', 'Love carol and sasu wow', 'true'),
(28, 'edwinbenj17', 'jennifer.horthman', '2018-04-10', 'I support this movement #BHIM', 'true'),
(29, 'edwinbenj17', 'barbara.boateng', '2018-04-10', 'they are quite good', 'true'),
(30, 'edwinbenj17', 'Anon', '2018-04-10', 'fuck off', 'false'),
(31, 'caroldav17', 'Anon', '2018-04-12', 'i dont like this', 'false'),
(33, 'elvisyas17', 'oliver.mensah', '2018-04-17', 'Elivs, step up your game', 'true'),
(34, 'edwinbenj17', 'boma.eli', '2018-04-23', 'Great job so far!', 'true'),
(37, 'elvisyas17', 'boma.eli', '2018-04-24', 'hello, im here again. what do you have to offer', 'true'),
(38, 'elvisyas17', 'boma.eli', '2018-04-24', 'me again', 'true'),
(39, 'elvisyas17', 'boma.eli', '2018-04-24', 'okay me again, for the last', 'true'),
(40, 'edwinbenj17', 'oliver.mensah', '2018-04-24', 'fuck off x222222', 'false'),
(47, 'caroldav17', 'oliver.mensah', '2018-04-24', 'fuck off x10000000', 'false'),
(48, 'caroldav17', 'oliver.mensah', '2018-04-24', 'fuck off x1111111', 'false'),
(49, 'caroldav17', 'oliver.mensah', '2018-04-24', 'fuck off x12222222', 'false'),
(50, 'caroldav17', 'oliver.mensah', '2018-04-24', 'fuck off x1333333', 'false'),
(51, 'edwinbenj17', 'oliver.mensah', '2018-04-24', 'fuck off edwin', 'false'),
(52, 'edwinbenj17', 'oliver.mensah', '2018-04-24', 'fuck off benjamin', 'false'),
(53, 'edwinbenj17', 'barbara.boateng', '2018-04-24', 'fuck off x15', 'false'),
(54, 'edwinbenj17', 'hamza.kamara', '2018-04-26', 'Good work', 'false'),
(55, 'edwinbenj17', 'nii.quartey', '2018-04-27', 'How many pledges have you fulfilled so far edwin?', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `usercomment`
--
ALTER TABLE `usercomment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usercomment`
--
ALTER TABLE `usercomment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
