Create database called demo on phpmyadmin
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
copy this second into sql
<br/>
CREATE TABLE `nametable2` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cidate` date NOT NULL,
  `codate` date NOT NULL,
  `guest` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `bed` varchar(20) NOT NULL,
  `breakfast` text NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
...
