SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `info` (
  `UserID` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `Pass` varchar(32) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `info` (`UserID`, `Name`, `Uname`, `Pass`, `Email`) VALUES
(13, 'Admin', 'admin', 'admin', 'admin@admin.com'),
(14, 'Harry', 'harry', 'potter', 'harry@gmail.com'),
(16, 'Ronald', 'Ronny', 'smith', 'Ronald25@gmail.com'),
(25, 'Sujal', 'sujal', 'sujal', 'sujal123@yahoo.com'),
(26, 'babu', 'babu', 'babu', 'babu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `info`
  MODIFY `UserID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;