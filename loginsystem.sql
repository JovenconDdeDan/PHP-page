CREATE DATABASE `loginid`;

CREATE TABLE `loginid` (
    `userid` int(11) NOT NULL,
    `username` varchar(25) NOT NULL,
    `email` varchar(30) NOT NULL,
    `password` varchar(20) NOT NULL
);

INSERT INTO `loginid` (`userid`, `username`, `email`, `password`) VALUES
(1,'tatiana743', 'ttamk1@gmail.com', 'sandwichseco8'),
(2,'docjohntor', 'medicom34@gmail.com', '6ehf83nsj'),
(3,'reconocedorpro', 'cramirez@gmail.com', 'motitas67'),
(4,'cramirez', 'cramirez@gmail.com','motitas67');

ALTER TABLE `loginid` 
    ADD PRIMARY KEY (`userid`);

ALTER TABLE `loginid`
    MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
