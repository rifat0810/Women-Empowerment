-- Database: `final`

-- Table structure for table `admin`

CREATE TABLE `admin` (
  `id` int(5) NOT NULL auto_increment,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`)
)


-- Table structure for table `member`

CREATE TABLE `member` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `username` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `fullname` varchar(75) NOT NULL,
  `images` text NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY  (`id`)
)

-- Table structure for table `ctutorial`



CREATE TABLE `ctutorial` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `author` varchar(75) NOT NULL,
  `title` varchar(200) NOT NULL,  
  `images` text NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY  (`id`)
)


-- Table structure for table `htutorial`



CREATE TABLE `htutorial` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `author` varchar(75) NOT NULL,
  `title` varchar(75) NOT NULL,  
  `images` text NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY  (`id`)
)



-- Table structure for table `post`



CREATE TABLE `post` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `author` varchar(75) NOT NULL,
  `title` varchar(75) NOT NULL,  
  `images` text NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY  (`id`)
)
-- Table structure for table `blog`


CREATE TABLE `blog` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `author` varchar(75) NOT NULL,
  `title` varchar(75) NOT NULL,  
  `images` text NOT NULL,
  `content` varchar(5000) NOT NULL,
  PRIMARY KEY  (`id`)
)

-- Table structure for table `user`

CREATE TABLE `user` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `fullname` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  PRIMARY KEY  (`id`)
)
-- Table structure for table `ques`

CREATE TABLE `ques` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `author` varchar(100) NOT NULL,
  `quesname` varchar(100) NOT NULL,
  `opti1` varchar(100) NOT NULL,
  `opti2` varchar(100) NOT NULL,
  `opti3` varchar(100) NOT NULL,
  `opti4` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
)

-- Table structure for table `ans`
CREATE TABLE `ans` (
  `id` int(5) NOT NULL auto_increment,
  `date` varchar(55) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quesname` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
)

-- Table structure for table `result`
CREATE TABLE `result` (
  `id` int(5) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `result` int(1000) DEFAULT NULL,
  PRIMARY KEY  (`id`)
)

-- Table structure for table `comment`
CREATE TABLE `comment` (
  `id` int(5) PRIMARY KEY auto_increment,
  `date` varchar(55) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  post_id_fk INT,
  FOREIGN KEY(post_id_fk) REFERENCES ctutorial(id)
)
-- Table structure for table `commenth`
CREATE TABLE `commenth` (
  `id` int(5) PRIMARY KEY auto_increment,
  `date` varchar(55) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  post_id_fk INT,
  FOREIGN KEY(post_id_fk) REFERENCES htutorial(id)
)



