-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 04:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Username`, `Password`) VALUES
('admin', 'YWRtaW4=');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Fb_Link` varchar(500) NOT NULL,
  `Tw_Link` varchar(500) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `type`, `Title`, `Link`, `Description`, `Image`, `Date`, `Fb_Link`, `Tw_Link`, `Visibility`) VALUES
(53, 'conference', '12thInternational Conference on Distributed Computing and Internet Technology (ICDCIT 2016)', 'http://www.google.com', 'The 12th International Conference on Distributed Computing and Internet Technology (ICDCIT-2016) will take place in Bhubaneswar during 15th – 18th January 2016. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.\r\nThe 12th International Conference on Distributed Computing and Internet Technology (ICDCIT-2016) will take place in Bhubaneswar during 15th – 18th January 2016. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.\r\nThe 12th International Conference on Distributed Computing and Internet Technology (ICDCIT-2016) will take place in Bhubaneswar during 15th – 18th January 2016. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.\r\nThe 12th International Conference on Distributed Computing and Internet Technology (ICDCIT-2016) will take place in Bhubaneswar during 15th – 18th January 2016. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.', 'images/event/conference53.jpg', '2016-06-16', '', '', 1),
(54, 'conference', 'International Conference on Computational Intelligence & Networks (CINE 2016)', '', 'CINE is designed to provide a platform for scientists from Computational Intelligence, Control & Communication Networks to meet and exchange ideas, collaborate and work together. It also proposes to focus on all aspects of emerging technologies with modern computing techniques especially areas which require very high precision.\r\nCINE is designed to provide a platform for scientists from Computational Intelligence, Control & Communication Networks to meet and exchange ideas, collaborate and work together. It also proposes to focus on all aspects of emerging technologies with modern computing techniques especially areas which require very high precision.\r\nCINE is designed to provide a platform for scientists from Computational Intelligence, Control & Communication Networks to meet and exchange ideas, collaborate and work together. It also proposes to focus on all aspects of emerging technologies with modern computing techniques especially areas which require very high precision.\r\nCINE is designed to provide a platform for scientists from Computational Intelligence, Control & Communication Networks to meet and exchange ideas, collaborate and work together. It also proposes to focus on all aspects of emerging technologies with modern computing techniques especially areas which require very high precision.\r\n', 'images/event/conference54.jpg', '2016-06-16', '', '', 1),
(55, 'conference', '11thInternational Conference on Distributed Computing and Internet Technology (ICDCIT-2015)', '', 'The 11th International Conference on Distributed Computing and Internet Technology (ICDCIT-2015) will take place in Bhubaneswar during 5th – 8th February 2015. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.\r\nThe 11th International Conference on Distributed Computing and Internet Technology (ICDCIT-2015) will take place in Bhubaneswar during 5th – 8th February 2015. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.\r\nThe 11th International Conference on Distributed Computing and Internet Technology (ICDCIT-2015) will take place in Bhubaneswar during 5th – 8th February 2015. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.\r\nThe 11th International Conference on Distributed Computing and Internet Technology (ICDCIT-2015) will take place in Bhubaneswar during 5th – 8th February 2015. It will be organized by KIIT University, Bhubaneswar, India. Like the previous years, the proceedings of the conference will be published by Springer in the series of Lecture Notes in Computer Science.', 'images/event/conference55.jpg', '2016-06-16', '', '', 1),
(56, 'conference', 'International Conference on Computational Intelligence & Networks (CINE 2015)', '', 'CINE is intended to be an international meeting point of scientists from Computational Intelligence & Networks. The conference proposes to focus on all aspects of Communication and Control systems with modern computing techniques.\r\nCINE is intended to be an international meeting point of scientists from Computational Intelligence & Networks. The conference proposes to focus on all aspects of Communication and Control systems with modern computing techniques.\r\nCINE is intended to be an international meeting point of scientists from Computational Intelligence & Networks. The conference proposes to focus on all aspects of Communication and Control systems with modern computing techniques.\r\nCINE is intended to be an international meeting point of scientists from Computational Intelligence & Networks. The conference proposes to focus on all aspects of Communication and Control systems with modern computing techniques.', 'images/event/conference56.jpg', '2016-06-16', '', '', 1),
(61, 'workshop', 'Workshop 1 ', 'http://google.com', 'Are you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.\r\nAre you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.\r\nAre you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.\r\nAre you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.', 'images/event/workshop61.jpg', '2016-06-25', '', '', 1),
(62, 'workshop', 'Workshop 2', 'http://google.com', 'Are you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.\r\nAre you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.\r\nAre you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.\r\nAre you ready for Bootstap 4? It''s the 4th generation of this popular responsive framework. Bootstrap 4 will include some interesting new features such as 5 grid sizes (now including xl), cards, `em` sizing, CSS normalization (reboot) and larger font sizes.', 'images/event/workshop62.jpg', '2016-06-30', '', '', 1),
(71, 'conference', 'FICTA 2016- Frontiers in Intelligent Computing, Theory and Application', 'http://www.ficta.in', 'The 2016 International Conference on Frontiers of Intelligent Computing: Theory and applications (FICTA ) aims to bring together researchers, scientists, engineers, and practitioners to exchange and share their theories, methodologies, new ideas, experiences, applications in all areas of intelligent computing theories and applications to various engineering disciplines like Computer Science, Electronics, Electrical , Mechanical Engineering etc. This is the 5th edition of the series. Prior to this other four editions were organized by BEC, Bhubaneswar and NIT Durgapur respectively. The idea of this series was conceived by few eminent professors and researchers of primer institutions of India. The first Edition of this, FICTA 2012, was organized by Bhubaneswar Engg College ( BEC), Bhubaneswar and after successful completion of this next two FICTA 2013 and FICTA 2014 were also hosted by BEC. Due to its popularity and wide visibility in entire country and abroad, FICTA 2015 moved to prestigious NIT, Durgapur to make a mark in India.', 'images/event/conference71.JPG', '2016-09-16', '', '', 1),
(72, 'conference', 'ICCIDM-2016 International Conference on Computational Intelligence in Data Mining.', 'http://www.iccidm.in', 'International Conference on Computational Intelligence in Data Mining (ICCIDM-2016) provides an international forum for presentation of original research findings, as well as exchange and dissemination of innovative, practical development experiences in different fields of engineering. The conference draws researchers and application developers from a wide range of data mining and computational Intelligence related areas along with their algorithms and applications of current issues of almost all branches of Engineering and Technology. After the two successful versions of ICCIDM, this conference has tried grounding every aspect related to Data Mining, covering all the possible research areas and crux. Awareness of Data Mining and its application is becoming popular among the general population. Parallel offers of hope add woes to the researchers of Data Mining due to the potential limitations experienced in the real-time.', 'images/event/workshop72.JPG', '2016-12-10', '', '', 1),
(73, 'conference', '11th International Conference on Distributed Computing and Internet Technologies (ICDCIT-2017).', 'http://icdcit.ac.in/', 'Established in 2004, the ICDCIT conference series has become a platform for Computer Science researchers from India and all over the world to exchange research results and ideas on the foundations and applications of Distributed Computing and Internet Technology. Such technologies enable individuals and organizations to jointly engage in the production, processing and dissemination of knowledge.', 'images/event/conference73.JPG', '2017-02-13', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Subjects` varchar(1500) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Dp` varchar(500) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Spec` text NOT NULL,
  `Achievement` text NOT NULL,
  `journals` text NOT NULL,
  `confs` text NOT NULL,
  `Cabin` text NOT NULL,
  `Industy` varchar(10) NOT NULL,
  `Research` varchar(10) NOT NULL,
  `Teaching` varchar(10) NOT NULL,
  `About` text NOT NULL,
  `proj` text NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `Name`, `Subjects`, `Email`, `Dp`, `Position`, `Spec`, `Achievement`, `journals`, `confs`, `Cabin`, `Industy`, `Research`, `Teaching`, `About`, `proj`, `Visibility`) VALUES
(1, 'Rajdeep Chatterjee', 'Programming in C,\nObject Oriented Programming with C++,\nData Structure,\nJava Programming,\nArtificial Intelligence,\nSoft Computing', 'rajdeepfcs@kiit.ac.in', 'userdata/profile/Rajdeep_Chatterjee.jpg', 'Assistant Professor', 'Machine Learning,\nApplied Soft Computing,\nBrain Computer Interface', '3rd   position in National Day-2016 poster presentation (Engineering) at KIIT University. \nAll India Rank 01 in KIITEE-2009 M.Tech (C.S.E.)\nAll India Rank 1410 in GATE-2008', '', '', '', '', '', '', '', '', 1),
(2, 'Satarupa Mohanty', 'Computer Graphics and Multimedia,Design and Analysis of Algorithm,Computer Organization and Architecture,Programming Language C, C++,Advance Computer Architecture,Parallel and Distributed Computing', 'satarupafcs@kiit.ac.in', 'userdata/profile/default.png', 'Assistant Professor II', 'Parallel Algorithm design ,Bioinformatics', 'nil', 'An Efficient PSO-GA based Back Propagation Learning-MLP (PSO-GA-MLP) For classification C Prasad.S. Mohanty, B. Naik .  J.Nayak . H.S. Behera, Springer India 2015  ,                                                                                           L.C. Jain et al. (eds), Computational Intelligence in Data Mining - Volume 1,Smart Innovation,Systems and Technologies 31,DOI 10.1007/978-81-322-2205-7_48 \r\n', '1.Satarupa Mohanty, Biswajit sahoo, Anuj Acharya, Parallal Implementation of Exact algorithm for planted (l,d) motif Search&rdquo;, in Proc.4th  International Joint Conference on Advances in Engineering and Technology AET 2013 Elsevier, NCR, India, 2013. ', 'F219', '0', '0', '10+', '', 'nil', 1),
(3, 'Tina Samajdar', 'Programming in C,Object Oriented Programming,Data Warehousing Data Mining', 'tina.samajdarfcs@kiit.ac.in', 'userdata/profile/default.png', 'Assistant Professor', 'Digital Image Processing', 'GATE 2013 qualified,2013-2015 M.Tech CSE Topper', '1', '2', 'F117', '0', '0', '1', '', 'B.tech Project in WIMAX technology,M.Tech Project in Digital Image Processing', 1),
(4, 'Dr. R K Malu', 'Software Engineering, System analysis and system design,Object Oriented System Design,Software Project Management,Management Information System,Computer Fundamentals,Simulation', 'rajani.malufcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', 'Software Project Management\r\nSoftware Estimation', 'Received a silver plaque from the then MD, Tata Steel, Dr. J J Irani on best contribution to Tata Steel using a Statistical Process Control technique in a Quality Control Circle. ', 'A Quality model for adaptability, International Journal of Computer Science &amp; Engineering Technology (IJCSET), Vol. 4 No. 12 Dec 2013,Estimating Software Development Effort using UML  Use Case Point (UCP) Method  with a Modified set of Environmental Factors (IJCSIT) International Journal of Computer Science and Information Technologies, Vol. 5(3), 2014, 2742-2744,Cost Estimation Using Parameterized For Use Case Point Model (P-UCP) Int. Journal of Engineering Research and Application www.ijera.com ISSN : 2248 - 9622, Vol. 3, Issue 5, Sep -Oct 2013, pp.1280-1283,An Effective Test Suite Reduction Using Priority Cost Technique, International Journal of Computer Science &amp; Engineering Technology (IJCSET), Vol. 4 No. 04 Apr 2013  ', 'Optimization of Project Effort Estimate Using Neural Network, 2014 IEEE International Conference on Advanced Communication Control and Computing Technologies (ICACCCT), ISBN No. 978-1-4799-3914-5/14/$31.00 &copy;2014 IEEE  ', 'F-04', '10+', '6', '10+', 'I had worked in both private and public sectors in different positions in the department of Computer Sciences. My last corporate job was in Odisha Computer Application Center, Bhubaneswar, a Government nodal agency. I was working as DGM and got retired in 2006. From then I have been  working different academic institutions as principal, professor. At present I am working as a professor in School of Computer Engineering, KIIT University.', 'Limestone mining (Sonadih) - Optimization of product mix of ore,Tata Steel (Jamshedpur) - Worked as project consultant in different Simulation and Optimization projects in collaboration with IIT, Kharagpur to improve productivity and yield.,Machine utilization maximization in Gest Keens Williams (GKW) plant in Howrah.', 1),
(5, 'Dr.Sachi Nandan Mohanty', 'Algorithm Complexity, , ,Soft Computing,Computational Intelligence,Compiler Design,Computer Network,Machine Learning and Patten Reorganization', 'snmohantyfcs@kiit.ac.in', 'userdata/profile/Dr.Sachi_Nandan_MohantyA-14.jpg', 'Assistant Professor', 'Fuzzy Multi-criteria  Decision making,  ,Cognitive Engineering,Computational Intelligence.,Clustering and Classification on Big Data, ,Predictive Analysis', 'Received Eminent Academician award from Indian Society for Technical Education (ISTE), Bhubaneswar, India, 2014.,Best Paper Award, Influences of mood states on information processing during decision\nmaking: A Neuro-Fuzzy Approach. National Conference, organized by Indian Institute of\nTechnology, Roorkee, India. 2013.\n,Received MHRD Scholarship from the period July, 2009 to July, 2013.', 'Decision-making in Positive and Negative Prospects: Influence of Certainty and Affectivity by Sachi Nandan Mohanty, Damodar Suar International Journal of Advances in Psychology, Vol 2, Issue 1, 19-28 (2013),Influence of mood states, group discussion, and interpersonal comparison on change in decision-making and information processing by Sachi Nandan Mohanty, Damodar Suar, International Journal of Decision Science, Risk and Management, vol.5, Issue 2. 101-123(2013),Influence of Mood States on Decision Making under Uncertainty and Information processing by Sachi Nandan Mohanty, Damodar Suar, International journal of Psychological Reports, Vol 115, Issue 1, 44-64(2014),Study on Influence of Mood States on Information Processing During Decision Making Using Fuzzy Reasoning Tool and Neuro-Fuzzy System Developed Based on Mamdani Approach by Sachi Nandan Mohanty, Dilip Kuamr Pratihar, Damodar Suar, International Journal of Fuzzy Computing Modeling. Vol 1, Issue 3,252-268 (2015),Evaluation of Indian B2C E-shopping websites under Multicriteria Decision-making using Fuzzy hybrid techniques by Sandipan Dey, Biswajit Jana, Mahendra Kumar Gourisaria, Sachi Nandan Mohanty, Rajdeep Chatterjee, International Journal of Applied Engineering Research. Vol 10, Issue 9, 24551-24580 (2015)', 'An evolutionary multi-objective genetic algorithm to solve 0/1 knapsack problem by    S.N.Mohanty, R. N. Satpathy International Conferences ISBN 978-1-4244-4519-6 (2009),Some studies of genetic algorithm by S.N. Mohanty, D.K. Mishra, R.N. Satpathy\nConferences vol-1, pp. 88-89, jan.2008 (2008)\n,Influences of mood states on information processing during decision making: A Neuro Fuzzy Approach by S.N. Mohanty, D.K.Pratihar, D. Suar National Conference on Paradigm for Sustainable Business: People, Planet and Profit, 8th - 9th  march, 2013  ', 'A-14', '0', '4', '3', '', 'Multi Criteria Decision-making for Purchasing a Insurance Policy, Student Name: Biswajit Jana, 2013,Implementation on ID3 decision tree algorithm using fuzzy logic Student Name: Aparmita Swain,2014	,Gold Price Forecasting using ANFIS Student Name: Prajnashree Dakshinakabat,2014	,A Hybrid Approach for Network Intrusion Detection Student Name: Ganesh Prasad Rout,2014	,Evaluation of India B2C E-shopping Websites under Multi Criteria Decision-Making using Fuzzy Hybrid Technique Student Name: Sandipan Dey,2014	,The role of Emotion and Cognition in Decision-making by Pragyan Paramita,2014	', 1),
(6, 'Dr.Laxman Sahoo', 'RDBMS,Artificial Intelligence,Expert & Fuzzy Systems,Data and knowledge Security,Graph theory and applications,Distributed Database Systems', 'lsahoofcs@kiit.ac.in', 'userdata/profile/Dr.Laxman_SahooF116.jpg', 'Professor', 'Database, Big Data, AI,Object Oriented Database', 'AICTE visiting team member for inspection and grant new programs.', '“Multi Objective Line symmetry based Evolutionary Clustering Approach”, Volume  543, Springer, 2014, ISBN 978-3-319-04693-8, PP 49-58.\n\n,Evolutionary subspace clustering of high dimensional data”, Applied Computational Intelligence & Soft Computing;2013,2013', 'Design and Implementation of Three Phase Commit Protocol (3PC) Algorithm, ICROIT-2014, IEEE International Conference (Conference Record Number: 32243), Accepted in IEEExplore® Digital Library,“An Effective Clustering Algorithm for data mining “, IEEE International Conference on Data Storage and Data Engineering (DSDE 2010), Bangalore, India, pp  250-254, 2010.', 'F116', '1', '', '', 'I have been working in higher academics and having 32 years of experience in teaching, research and administration.\n\nPresently, I am in the Position of Professor, (School of Computer Engineering) and Former Head, (Database Engineering ) at KIIT University, Bhubaneswar, India. I am/was also associated with following bodies:-\n\n- Board of Studies, School of Computer Engineering\n- Member of Academic Council, KIIT University\n \nEarlier from Jan 2005, I was the Director, Babu Banarasi Das Group of Educational Institutions (BBD Group), Lucknow. There I was the Director (Engineering) of Northern India Engineering College (BBDNIIT), Lucknow and later became Director of Babu Banarasi Das National Institute of Technology & Management (BBDNITM), Lucknow. \n	\nAfter completing my Ph.D from IIT, Kharagpur (1987), I joined BITS, PILANI. There I was associated with computer science teaching, production of course material, other administrative work & involved in many different development committees.\n\nThen, I joined BIT, MESRA (Ranchi) as Asst. Professor, Dept. of Computer Science and in very short span of a decade was promoted to as Professor.  During this period besides looking after the work of  the  Department & Computer  Center , I have organized  different  computer programs  for faculty members of many institutes, Banks ,many Government organizations , seminars, conferences and handled many  government  funded  major- projects as Principal &  Co-Principal investigators . I have taught more than 50  computer science courses  to B.Tech, M.Tech, MCA, MBA, MIS & supervised/guided around 100 master degree students.  I also co-ordinated  M.Tech  program at Hyderabad in 1996 & M.Tech, BCA,BBA at Ranchi, Lalpur Campus.\n\n\n                                                                                                                                                                         1/11\n\n\nThen, I took the position of Director/ Co-ordinator and  converted its research institute, BISR into BIT, Jaipur Campus. Here I transformed the research center into Engineering & Management College by generating own funds & brought a good name in quality technical education by providing good placement. During this period, I also looked after the Allahabad Campus.\n\nAdministrative & Academic Responsibility: (Present):-\n•	Former Program Head of  M.Tech (Data Analytics) \n•	Tutor Mentor of M.Tech (DBE & DA)\n•	Course Coordinator (after joining) of AI,DPDB,DKS, GTA\n•	Member of BOS, ACM, RSC, Examination Cell\n•	Session Chair of International Conference on Distributed Computing and Internet Technology, KIIT University \n•	Program Committee member of workshop National Workshop on Big Data Analytics( Nov. 2014), KIIT University.   \nSociety Member:  Life member ISTE, New Delhi \n\n\nGoogle Scholar Link- https://scholar.google.co.in/citations?user=bU5mgskAAAAJ&hl=en', 'Currently, I am also supervising 6 No. of Ph.D Students & 2 No. of M.Tech. ,8 numbers of B.Tech final year students Students major projects.', 1),
(7, 'Himansu Das', 'Computer Organization and Architecture.,Database Management System,Advanced Computer Architecture,Computer Organization and Operating System,Operating System.', 'himanshufcs@kiit.ac.in', 'userdata/profile/Himansu_DasF-14.jpg', 'Assistant Professor', 'Cloud Computing', '', '1. Das, Himansu, Bighnaraj Naik, Bibudendu Pati, and Chhabi Rani Panigrahi. "A Survey on Virtual Sensor Networks Framework." International Journal of Grid & Distributed Computing(IJGDC), 2014,Vol. 7 no. 5, pp 121-130.,2. Das, Himansu, D.S.Roy, “A Grid Computing Service for Power System Monitoring”, in International Journal of Computer Applications (IJCA), 2013, Vol. 62 No. 20, pp 1-7.,3. Das, Himansu, D.S.Roy, “The Topological Structure of the Odisha Power Grid: A Complex Network Analysis”, in International Journal of Mechanical Engineering and Computer Applications (IJMCA), 2013, Vol.1 Issue 1, pp 12-18.', '1. Das, Himansu, A K Jena, J Nayak, B Naik, and H. S. Behera. "A Novel PSO Based Back Propagation Learning-MLP (PSO-BP-MLP) for Classification." In Computational Intelligence in Data Mining-Volume 2, Springer India, 2015, , pp. 461-471.,2. Das, Himansu, A K Jena, P K Rath , B Muduli , S R Das, "Grid Computing Based Performance Analysis of Power System: A Graph Theoretic Approach",  in Advances in Intelligent Systems and Computing, Springer India, 2015,  pp. 259-266. ,3. Das, Himansu, G S Panda, B Muduli, and P K Rath. "The Complex Network Analysis of Power Grid: A Case Study of the West Bengal Power Network." In Intelligent Computing, Networking, and Informatics, Springer India, 2014, pp. 17-29.,4. Sarkar, Joy Lal, C R Panigrahi, B Pati, and Himansu Das. "A Novel Approach for Real-Time Data Management in Wireless Sensor Networks." In Proceedings of 3rd International Conference on Advanced Computing, Networking and Informatics, pp. 599-607. Springer India, 2016.,5. Panigrahi, C R, Joy Lal Sarkar, B Pati, and Himansu Das. "S2S: A Novel Approach for Source to Sink Node Communication in Wireless Sensor Networks." In Mining Intelligence and Knowledge Exploration, pp. 406-414. Springer International Publishing, 2015.', 'F-14', '0', '0', '7', '', '', 1),
(8, 'Roshni Pradhan', 'C,C++,Data Minimg and Data Warehousing', 'roshni.pradhanfcs@kiit.ac.in', 'userdata/profile/Roshni_PradhanF-117.jpg', 'Faculty Associate', 'Cloud Computing,Big Data,Data Analytics', 'Best Innovative Research Award in Annual tech fest at VSSUT, Burla.,Awarded with University Gold Medal for securing Heights Marks in Post Graduation at VSSUT,Burla.', 'FairnewIGI Global(Book Chapter),IJIP Journal', '', 'F-117', '0', '2', '1', '', '', 1),
(9, 'Pinaki Sankar Chatterjee', 'Programming in C ,Object oriented Programming,Data structure,Computer Network,Computer Architecture,Web Technology', 'pinakifcs@kiit.ac.in', 'userdata/profile/default.png', 'Asst. Professor(II)', 'Natural Language Processing,Cognitive Wireless Network', '', 'Arijit Chatterjee, Pinaki Sankar Chatterjee &amp; Monideepa Roy: &ldquo;An Energy Optimized Predictive Mobile Target Tracking Algorithm for WSNs&rdquo;, Special Issue of International Journal on Advanced Computer Theory and Engineering (IJACTE) ISSN (Print) : 2319 &ndash; 2526, Volume-2, Issue-1, 2013.,Pinaki Sankar Chatterjee, Monideepa Roy: &ldquo;Energy Efficient Mobile Targets Classification and Tracking in WSNs based on Parameter Priority&rdquo;, Int. J. on Recent Trends in Engineering and Technology, Vol. 10, No. 1, Jan 2014.,Sujit Kumar Das, Pinaki Sankar Chatterjee, Monideepa Roy , &ldquo;Detecting and Punishing the Selfish Node and its Behavior in WSN &rdquo;, International Journal of Computer &amp; Organization Trends &ndash; Volume 6 Number 1 &ndash; Mar 2014 .,Satyajit Panda, Pinaki Sankar Chatterjee, Ipsa Das, Monideepa Roy , &ldquo;Energy Efficient Multiple Objects Sensing and Classification System in WSNs &rdquo;, Int. J. on Recent Trends in Engineering and Technology, 2014.,Aradhana Kar, Pinaki Sankar Chatterjee, &ldquo;A Light-Weight Mobile Application of Sign Writing Translator for Translating Sign Writing Symbols to Simple Sentence in English&rdquo; Int. J. of Recent Trends in Engineering &amp; Technology , Vol. 11, June 2014.', 'Aradhana Kar and Pinaki Sankar Chatterjee: &ldquo;A Video-based Approach for Translating Sign Language to Simple Sentence in English&rdquo;, Proc. of Int. Conf. on Advances in Computer Science, AETACS, Elsevier, 2013.,Sujit Kumar Das Bidyut Jyoti Saha Pinaki Sankar Chatterjee, &ldquo;Selfish Node Detection and Its Behavior in WSN&rdquo; IEEE &ndash; 33044, 5th ICCCNT &ndash; 2014, Hefei, China, July 11-13, 2014.,Aradhana Kar, Pinaki Sankar Chatterjee, &ldquo;An Approach for Minimizing the Time Taken by Video Processing for Translating Sign Language to Simple Sentence in English&rdquo;, International Conference on Computational Intelligence &amp; Networks, IEEE DOI 10.1109/CINE.2015.40, 2015.,Sukanya Chatterjee, Pinaki S Chatterjee,&rdquo; A Comparison based Clustering Algorithm to Counter SSDF attack in CWSN&rdquo;, International Conference on Computational Intelligence &amp; Networks, IEEE DOI 10.1109/CINE.2015.46, 2015.,Pinaki Sankar Chatterjee and Monideepa Roy, &ldquo;Base Station Controlled Spectrum Allocation Technique to Detect the PUE Attack in CWSN&rdquo;, L.C. Jain et al. (eds.), Computational Intelligence in Data Mining - Volume 1, Smart Innovation, Systems and Technologies 31, DOI 10.1007/978-81-322-2205-7_63, Springer India 2015.,Pinaki Sankar Chatterjee, Monideepa Roy, &ldquo;A Regression based Spectrum-Sensing Data Falsification Attack Detection Technique in CWSN&rdquo;, In International Conference on Information Technology (ICIT), IEEE conference, December 21-23, 2015.', 'F211', '0', '3', '7', 'To better facilitate student learning in the area of Computer Technology.', '', 1),
(10, 'Amiya Kumar Dash', 'PROGRAMMING IN C,COMPUTER GRAPHICS,COMPILER DESIGN,DATABASE MANAGEMENT SYSTEM,DATA STRUCTURE', 'amiya.dasfcs@kiit.ac.in', 'userdata/profile/Amiya_Kumar_DashF-13.jpg', 'Asst. professor -I', 'NATURAL LANGUAGE PROCESSING,MACHINE LEARNING,SOCIAL NETWORK ANALYSIS', '1.	Institute Medal for Branch Topper For Holding First Position in M.tech for the Academic year 2013-2015,NIT Rourkela', '', 'Harnessing Twitter for Automatic Sentiment Identification Using Machine Learning Techniques,In Proceedings of 3rd International Conference on Advanced Computing, Networking and Informatics, 23-25 june, Amiya Kumar Dash, Jitendra Kumar Rout, and Sanjay Kumar Jena.  pp. 507-514. Springer India, 2016.', 'F-13', '1', '1', '2', '', '', 1),
(11, 'Dr. Samaresh Mishra           ', '', 'smishrafcs@kiit.ac.in', 'userdata/profile/Dr._Samaresh_Mishra_.jpg', 'Dean ', 'Software Enginnring, Database', '', '', '', '', '0', '0', '0', '', '', 1),
(12, 'Dr. Bhabani S. P. Mishra', '', 'bsmishrafcs@kiit.ac.in', 'userdata/profile/default.png', 'Associate Professor', ' BIG Data, Data Mining, Soft Computing,  Cognitive Radio', '', '', '', '', '0', '0', '0', '', '', 1),
(13, 'Dr. Ajay Kumar Bisoi', '', 'akbisoifcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', '', '', '', '', '', '0', '0', '0', '', '', 1),
(14, 'Dr. Ganga Bishnu Mund', '', 'mund@kiit.ac.in', 'userdata/profile/default.png', 'Professor', 'Graph Theory, Program Analyisis, Algorithms', '', '', '', '', '0', '0', '0', '', '', 1),
(15, 'Dr. Madhabananda Das ', '', 'mndas_prof@kiit.ac.in', 'userdata/profile/default.png', 'Professor', 'Soft Computing, Machine Learning, AI, ANN', '', '', '', '', '0', '0', '0', '', '', 1),
(16, 'Dr. Rajani Kanta Malu', '', 'rajani.malufcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', '', '', '', '', '', '0', '0', '0', '', '', 1),
(17, 'Dr. Rajani Kanta Malu', '', 'rajani.malufcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', '', '', '', '', '', '0', '0', '0', '', '', 1),
(18, 'Dr. Biswajit Sahoo', '', 'bsahoofcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', 'Bioinformatics, Parallel processing', '', '', '', '', '0', '0', '0', '', '', 1),
(19, 'Dr. Laxman Sahoo', '', 'lsahoofcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', '', '', '', '', '', '0', '0', '0', '', '', 1),
(20, 'Dr. Alok Kumar Jagadev', '', 'alok.jagadevfcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', 'Data Mining, Soft Computing, Bioniformatics', '', '', '', '', '0', '0', '0', '', '', 1),
(21, 'Dr. Prasant Kumar Patt', '', 'patnaikprasantfcs@kiit.ac.in', 'userdata/profile/default.png', 'Professor', 'Privesi priservation, Cloud Computing, Mobile Computing, Usability', '', '', '', '', '0', '0', '0', '', '', 1),
(22, 'Dr. Santosh Kumar Swain', '', 'sswainfcs@kiit.ac.in', 'userdata/profile/default.png', 'Associate Professor', 'SE, OOS', '', '', '', '', '0', '0', '0', '', '', 1),
(23, 'Dr. Abhishek Ray              ', '', 'arayfcs@kiit.ac.in', 'userdata/profile/default.png', 'Associate Professor', 'Software Engineering', '', '', '', '', '0', '0', '0', '', '', 1),
(24, 'Dr. Prachet Bhuyan            ', '', 'pbhuyanfcs@kiit.ac.in', 'userdata/profile/default.png', 'Associate Professor', 'Software Engineering', '', '', '', '', '0', '0', '0', '', '', 1),
(25, 'Dr. Monideepa Roy', '', 'monideepafcs@kiit.ac.in', 'userdata/profile/default.png', 'Associate Professor', 'WSN, Mobile Networking', '', '', '', '', '0', '0', '0', '', '', 1),
(26, 'Dr. Amulya Ratna Swain', '', 'amulyafcs@kiit.ac.in', 'userdata/profile/default.png', 'Associate Professor', 'WSN, Virtualization', '', '', '', '', '0', '0', '0', '', '', 1),
(27, 'Dr. Debarshi Kumar Sanyal', '', 'debarshi.sanyalfcs@kiit.ac.in', 'userdata/profile/default.png', 'Associate Professor', 'Mobile Computing', '', '', '', '', '0', '0', '0', '', '', 1),
(28, 'Namita Panda', '', 'npandafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Software Testing', '', '', '', '', '', '', '', '', '', 1),
(29, 'Arup Abhinna Acharya', '', 'aacharyafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Software Engineering', '', '', '', '', '', '', '', '', '', 1),
(30, 'Subhasis Dash ', '', 'sdasfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'WSN', '', '', '', '', '', '', '', '', '', 1),
(31, 'Kumar Devadutta', '', 'kdevduttafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'SPM', '', '', '', '', '', '', '', '', '', 1),
(32, 'Leena Das ', '', 'ldasfcs@kiit.ac.in', 'userdata/profile/default.png', '', ' Real time system, Software Engineering', '', '', '', '', '', '', '', '', '', 1),
(33, 'Nachiketa Tarasia', '', 'ntarasiafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Wireless Sensor Network', '', '', '', '', '', '', '', '', '', 1),
(34, 'Suneeta Mohanty', '', 'smohantyfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Cloud Computing', '', '', '', '', '', '', '', '', '', 1),
(35, 'Harish Kumar Patnaik', '', 'hpatnaikfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Cloud Computing', '', '', '', '', '', '', '', '', '', 1),
(36, 'Chittaranjan Pradhan', '', 'chittaranjanfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Information Security, Image Processing, Data Mining, Multimedia Systems', '', '', '', '', '', '', '', '', '', 1),
(37, 'Tanmaya Swain', '', 'tanmayafcs@kiit.ac.in', 'userdata/profile/default.png', '', ' Wireless Communication', '', '', '', '', '', '', '', '', '', 1),
(38, 'Manoj Kumar Mishra', '', 'manojfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Grid Computing and Parallel Computing', '', '', '', '', '', '', '', '', '', 1),
(39, 'Jayanti Dansana', '', 'jayantifcs@kiit.ac.in', 'userdata/profile/default.png', '', '', '', '', '', '', '', '', '', '', '', 1),
(40, 'Anuja Kumar Acharya', '', 'anujafcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Image Processing', '', '', '', '', '', '', '', '', '', 1),
(41, 'Srinadh Babu N.', '', 'srinadh.babufcs@kiit.ac.in ', 'userdata/profile/default.png', '', '', '', '', '', '', '', '', '', '', '', 1),
(42, 'Bindu Agarwalla', '', 'bindu.agarwalfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Network on chip', '', '', '', '', '', '', '', '', '', 1),
(43, 'Dr.Siddharth Swarup Rautaray', '', 'siddharthfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Image Processing, DA, Human Computer Intraction', '', '', '', '', '', '', '', '', '', 1),
(44, 'Manas Ranjan Lenka ', '', 'manaslenkafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'WSN', '', '', '', '', '', '', '', '', '', 1),
(45, 'Dr. Debabala Swain', '', 'debabala.swainfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'High Performance Computing', '', '', '', '', '', '', '', '', '', 1),
(46, 'Dibyajyoti Guha', '', 'dibyajyoti.guhafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Computer Network, Machine Learning', '', '', '', '', '', '', '', '', '', 1),
(47, 'Debashis Hati', '', 'dhatifcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Web Technology', '', '', '', '', '', '', '', '', '', 1),
(48, 'Mahendra Kumar Gourisaria', '', 'mkgourisariafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Soft computing, Cloud Computing, Data mining, Internet & Web Tech ', '', '', '', '', '', '', '', '', '', 1),
(49, 'Pinaki Sankar Chatterjee', '', 'pinakifcs@kiit.ac.in', 'userdata/profile/default.png', '', 'WSN, Cognitive Science', '', '', '', '', '', '', '', '', '', 1),
(50, 'Anil Kumar Swain', '', 'anil.swainfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Algorithm ', '', '', '', '', '', '', '', '', '', 1),
(51, 'Subhrakanta Panda ', '', 'subhrakanta.pandafcs@kiit.ac.in ', 'userdata/profile/default.png', '', ' Program slicing Software testing, SE, RT', '', '', '', '', '', '', '', '', '', 1),
(52, 'Jagannath Singh', '', 'jagannath.singhfcs@kiit.ac.in', 'userdata/profile/default.png', '', ' Program slicing, Effort Estimation using ANN', '', '', '', '', '', '', '', '', '', 1),
(53, 'Ashutosh Behura ', '', 'ashutoshfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Embeded System', '', '', '', '', '', '', '', '', '', 1),
(54, 'Mamta Motwani', '', 'mamata.motwanifcs@kiit.ac.in', 'userdata/profile/default.png', '', '', '', '', '', '', '', '', '', '', '', 1),
(55, 'R. N. Ramakant Parida', '', 'rparidafcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Data Mining', '', '', '', '', '', '', '', '', '', 1),
(56, 'Sujoy Datta', '', 'sdattafcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Cryptograph and Security', '', '', '', '', '', '', '', '', '', 1),
(57, 'Pradeep Kandula ', '', 'pkandulafcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Formal Verification, Data Analysis', '', '', '', '', '', '', '', '', '', 1),
(58, 'Lalit Kumar Vashishtha ', '', 'vashishthafcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Stegenography', '', '', '', '', '', '', '', '', '', 1),
(59, ' Sharmistha Roy', '', 'sroyfcs@kiit.ac.in', 'userdata/profile/default.png', '', ' Usability Engineering , Cloud Computing', '', '', '', '', '', '', '', '', '', 1),
(60, 'Suresh Chandra Moharana', '', 'scmoharanafcs@kiit.ac.in ', 'userdata/profile/default.png', '', ' Cloud Computing, Virtualization', '', '', '', '', '', '', '', '', '', 1),
(61, 'Manjusha Pandey', '', 'manjushafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'WSN, Data Analyitcs, Intrusion detection', '', '', '', '', '', '', '', '', '', 1),
(62, 'Sital Dash', '', 'sitalfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Cloud Computing, MANET', '', '', '', '', '', '', '', '', '', 1),
(63, 'Dr. Sachi Nandan Mohanty', '', 'snmohantyfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Soft Computing, Cognitive Science', '', '', '', '', '', '', '', '', '', 1),
(64, 'Naliniprava Behera', '', 'npbeherafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Algorithm', '', '', '', '', '', '', '', '', '', 1),
(65, 'Santwana Sagnika', '', 'santwana.sagnikafcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Algorithm', '', '', '', '', '', '', '', '', '', 1),
(66, 'Suchismita Das', '', 'suchismita.dasfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Image Processing, Pattern Recognization', '', '', '', '', '', '', '', '', '', 1),
(67, 'Gargi Srivastava', '', 'gargi.srivastavafcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Internet Traffic Analysis', '', '', '', '', '', '', '', '', '', 1),
(68, 'Shaswati Patra ', '', 'shaswati.patrafcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Cellular Automata, SE', '', '', '', '', '', '', '', '', '', 1),
(69, 'Amiya Kumar Dash', '', 'amiya.dasfcs@kiit.ac.in', 'userdata/profile/default.png', '', 'NLP, ML', '', '', '', '', '', '', '', '', '', 1),
(70, 'Tina Samajdar', '', 'tina.samajdarfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Digital Image Processing', '', '', '', '', '', '', '', '', '', 1),
(71, 'Arup Sarkar', '', 'arup.sarkarfcs@kiit.ac.in ', 'userdata/profile/default.png', '', ' Image Processing, Mobile Computing', '', '', '', '', '', '', '', '', '', 1),
(72, 'Sarita Tripathy', '', 'sarita.tripathyfcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'Data Mining, Soft Computing', '', '', '', '', '', '', '', '', '', 1),
(73, 'Prabin Kumar Panigrahi', '', 'prabin.panigrahifcs@kiit.ac.in ', 'userdata/profile/default.png', '', 'AI, Robotics', '', '', '', '', '', '', '', '', '', 1),
(74, 'Bhaswati Sahoo', '', 'bhaswati.sahoofcs@kiit.ac.in', 'userdata/profile/default.png', '', 'Data Analytics', '', '', '', '', '', '', '', '', '', 1),
(75, 'Ajay Kumar Jena', '', 'ajay.bbs.in@gmail.com', 'userdata/profile/default.png', '', 'ST, SE', '', '', '', '', '', '', '', '', '', 1),
(80, 'Himanshu', '', 'himanshuk27@gmail.com', 'userdata/profile/HimanshuK27.jpg', 'Senior Developer', '', '', '', '', 'K27', '0', '0', '0', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(500) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Title` (`Title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Title`, `Date`, `Visibility`) VALUES
(2, '15th National ISP PG Convention In KIIT', '15 Mar 2016', 1),
(3, 'KIIT Celebrated International Women Day', '08 Mar 2016', 1),
(4, 'KIIT FEST 2016 Inaugurated', '05 Mar 2016', 1),
(5, '7th Indian Youth Science Congress Inaugurated', '26 Feb 2016', 1),
(6, 'KPL 9th Edition From Today', '18 Feb 2016', 1),
(8, '12th ICDCIT-2016 Inaugurated at KIIT University', '17 January 2016', 1),
(9, '2nd International Conference on Computational Intelligence & Networks (CINE-2016) organised by School of Computer Engineering.', '11 Jan 2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `Title`, `Link`, `Date`, `Visibility`) VALUES
(6, 'Talk by Dr. Bhabani Sinha', 'download/notice/Talk_by_Dr._Bhabani_Sinha-6.pdf', '20-06-2016', 1),
(8, 'Pre-debarred list for Spring - 2016', 'download/notice/Pre-debarred_list_for_Spring_-_2016-8.pdf', '2016-06-20', 1),
(19, 'B.Tech Seminar evaluation', 'download/notice/B.Tech_Seminar_evaluation(20-06-2016).pdf', '20-06-2016', 1),
(20, 'Schedule of 3rd Review of Thesis', 'download/notice/Schedule_of_3rd_Review_of_Thesis(20-06-2016).pdf', '20-06-2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `startup`
--

CREATE TABLE IF NOT EXISTS `startup` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Title` varchar(1000) NOT NULL,
  `Description` text NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `startup`
--

INSERT INTO `startup` (`id`, `Title`, `Description`, `Link`, `Image`, `Date`, `Visibility`) VALUES
(38, 'Startup 1', 'Sala google hi bna dala!', 'http://google.com', 'images/start/start38.jpg', '12/06/2016', 1),
(39, 'New Startup', 'Sapne dekh bas', '', 'images/start/start39.jpg', '12/06/2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE IF NOT EXISTS `stu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Title` varchar(1000) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`id`, `Title`, `Description`, `Image`, `Date`, `Visibility`) VALUES
(39, 'Student Achivement', 'Semester Pass Ho jaye yehi bhut badi bat he.', 'images/stu/stu39.jpg', '15/06/2016', 1),
(40, 'Ghanta Achievement', 'Lorem Ipsum likhte likhte pareshan ho gya.....', 'images/stu/stu40.jpg', '2016-06-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stu_res`
--

CREATE TABLE IF NOT EXISTS `stu_res` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Link` varchar(500) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `stu_res`
--

INSERT INTO `stu_res` (`id`, `Title`, `Description`, `Link`, `Date`, `Visibility`) VALUES
(2, 'Dummt PDF', 'Dont download this', 'download/stu/Dummt_PDF-2.pdf', '19-06-2016', 1),
(3, 'One more time', 'Himanshu Kkuma', '', '2016-06-20', 1),
(4, 'Last time', 'dsgsdfgdfagdafg', 'download/stu/Last_time-4.pdf', '2016-06-20', 1),
(5, 'drtdgfgfdgf', 'jhgjhsdfsdf', 'download/stu/drtdgfgfdgf-5.pdf', '2016-06-20', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
