
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `db_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`) VALUES
(1, 'Astronomy, Astrophysics & Cosmology'),
(2, 'Extraterrestrial Physics & Space Sciences'),
(3, 'Planetary Sciences & Astrobiology'),
(4, 'Space Exploration & Astronautics'),
(5, 'Popular Astronomy'),
(6, 'Applied Psychology'),
(7, 'Child & Adolescent Psychology'),
(8, 'Clinical Psychology'),
(9, 'Cognitive Psychology'),
(10, 'Organizational Psychology'),
(11, 'Social & Personality Psychology'),
(12, 'Social Work & Social Policy'),
(13, 'Theory & History')
;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;


