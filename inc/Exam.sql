-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2015 at 08:53 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `mobile`) VALUES
(1, 'Bhagyesh Sunil Patel', 'uzrnem', 'uzrnem', '9604400880');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `questions` text NOT NULL,
  `model` text NOT NULL,
  `ans` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `user_id`, `marks`, `questions`, `model`, `ans`) VALUES
(64, 1, 22, '30,2,11,15,28,27,26,1,9,23,', 'ADADABBCBC', 'DDADABDCEEEEEEEEEEEEEEEEE'),
(59, 6, 22, '13,12,5,4,11,6,3,1,15,7,', 'DACCADCCDB', 'DCCCEECCDDEEEEEEEEEEEEEEE'),
(58, 4, 36, '5,2,6,10,14,13,15,3,9,7,', 'CDDAADDCBB', 'CDDAEDDCBBEEEEEEEEEEEEEEE'),
(53, 2, 20, '12,13,11,7,14,4,1,8,10,5,', 'ADABACCDAC', 'ACBBABCDABEEEEEEEEEEEEEEE'),
(60, 3, 2, '12,9,8,2,15,1,14,11,5,7,', 'ABDDDCAACB', 'EDDEEEEDEEEEEEEEEEEEEEEEE');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Question` text NOT NULL,
  `op_1` text NOT NULL,
  `op_2` text NOT NULL,
  `op_3` text NOT NULL,
  `op_4` text NOT NULL,
  `r_op` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `Question`, `op_1`, `op_2`, `op_3`, `op_4`, `r_op`) VALUES
(2, 'Which one is not String Storing Class', 'String', 'StringBuffer', 'StringBuilder', 'StringTokenizer', 'D'),
(1, 'Right Sytax for Java Main Method()', 'public static void Main(String agrs[])', 'public static void main(string args[])', 'public static void main(String []agrs)', 'Public static void main(String []args)', 'C'),
(3, 'WHich Statement is False', 'Class Extends Class', 'Class implements Interface', 'Interface Extends Class', 'Interface implements Interface', 'C'),
(4, 'Which Class Cannot be a subclass in java', 'abstract class', 'parent class', 'final class', 'none of above', 'C'),
(5, 'suspend thread cab be revived by using', 'start() method', 'Suspend()', 'resume()', 'yield()', 'C'),
(6, 'Runnable is', 'class', 'method', 'variable', 'Interface', 'D'),
(7, 'Which method is used to perform DML statements in', 'execute()', 'executeUpdate()', 'executeQuery()', 'None of above', 'B'),
(8, 'Package of drawstring() ', 'java.applet', 'java.io', 'javax.swing', 'java.awt', 'D'),
(9, 'Which method Executes only once', 'start()', 'init()', 'stop()', 'destroy()', 'B'),
(10, 'Object which can store group of other objects is called', 'Collection Object', 'Java object', 'Package', 'Wrapper', 'A'),
(11, 'Which method are Utilized to control the access to an Obj in Multi Threaded Programming ', 'Asynchronized', 'Synchronized', 'Serialized', 'None of Above', 'A'),
(12, 'Program which executes applet is known as', 'Applet Engine', 'Virtual Machine', 'JVM', 'None of above', 'A'),
(13, 'All in Collection classes are Available Package', 'jva.io', 'java.lang', 'java.awt', 'java.util', 'D'),
(14, 'AppletViewer tool is available in which of the folder of JDK :', 'bin', 'lib', 'source', 'class', 'A'),
(15, 'which method can be used to draw a circle in the applet?', 'drawCircle()', 'drawOval()', 'drawArc()', 'both b and c', 'D'),
(16, 'The exception class is in ____ package', 'java.file', 'java.io', 'java.lang', 'java.util\r\n', 'C'),
(17, 'Which keyword is used to monitor statement for exception?', 'try', 'catch', 'throw', 'throws', 'A'),
(18, 'If an exception is generated in try block , then it is caught in ____ block', 'finally', 'throw', 'throws', 'catch', 'D'),
(19, 'To explicitly throw an exception , ______ keyword is used.', 'try', 'catch', 'throw', 'throwing', 'C'),
(20, '______ is a superclass of all exception classes.', 'Exception', 'Throwable', 'RuntimeException', 'IOException', 'B'),
(21, 'Exception is subclass of ____ class', 'Exception', 'Throwable', 'RuntimeException', 'IOException', 'B'),
(22, 'If a statement tries to divide by zero which exception is thrown?', 'ArithemticException', 'NullPointerException', 'NumberFormatException', 'None of these', 'A'),
(23, 'When a method can throw an exception then it is specified by _____ keyword', 'finally', 'throw', 'throws', 'catch', 'C'),
(24, 'Which block gets executed compulsory whether exception is caught or not.', 'finally', 'throw', 'throws', 'catch', 'A'),
(25, 'To create our own exception class , we have to _______', 'Extend exception class', 'Create our own try and catch block', 'use finally block', 'Use throws keyword', 'A'),
(26, 'In case of multiple catch blocks,______', 'The superclass exception must be caught first', 'The superclass exception can not caught first', 'Either super or subclass can be caught first.', 'None of these', 'B'),
(27, 'When an array element is accessed beyond the array size , ____ exception is thrown', 'ArrayElementOutOfLimit', 'ArrayIndexOutOfBounds Exception', 'ArrayIndexOutOfBounds', 'ArrayElementOutOfBounds', 'B'),
(28, 'Which method is used to print the description of the exception?', 'printStackTrace()', 'printExceptionMessage()', 'printStackMessage()', 'printExceptionTrace()', 'A'),
(29, 'parseInt() and parseLong() method throws ________________ ?', 'ArithmeticException', 'ClassNotFoundException', 'NullPointerException', 'NumberFormatException', 'D'),
(30, 'Which of the following must be true of the object thrown by a throw statement?', 'It must be assignable to the Throwable type', 'It must be assignable to the Error type', 'It must be assignable to the Exception type', 'It must be assignable to the String type', 'A'),
(64, 'which container use flow layout as default layout', 'Applet', 'pannel', 'both', 'none', 'C'),
(65, 'Which container use border layout', 'Frame', 'Dialog', 'window', 'ALL', 'D'),
(66, 'Java was first developed in ?', '	1990', '	1991', '	1993', '	1996', 'B'),
(67, 'The old name of Java was ?', '	J language', '	oak', '	oct', '	None of above', 'B'),
(68, 'Which of the following feature is not supported by java ?', '	Multithreading', '	Reflection', '	Operator Overloading', '	Garbage Collection', 'C'),
(69, 'Which of the following is not keyword in java ?', '	null', '	import', '	volatile', '	package', 'A'),
(70, 'What is the full form of JDK ?', '	Java Data Kit', '	Java Defination Kit', '	Java Development Kit', '	Java Design Kit', 'C'),
(71, 'Which command is used to compile a java program ?', '	javac', '	java', '	javad', '	.javadoc', 'A'),
(72, 'What is the full form of JVM', '	Java Virtual Machine', '	Java Variable Machine', '	Java Virtual Mechanism', '	Java Variable Mechanism', 'A'),
(73, 'Hot java is', '	web browser', '	java version', '	IDE', '	none', 'A'),
(74, 'javah stands for', '	compiler', '	Interpreter', '	Header file', '	debugger', 'C'),
(75, 'Main method parameter has which type of data type', '	String', '	Int', '	char', '	double', 'A'),
(76, 'How many keywords are available in java', '	48', '	35', '	32', '	52', 'A'),
(77, 'Smallest individual unit in java program is known as', '	String', '	Literal', '	Token', '	operator', 'C'),
(78, 'What is return type of execute() method?', '	Action forward', '	void', '	String', '	int', 'A'),
(79, 'A thread becomes runnable when you call', '	start()', '	run()', '	init()', '	none', 'A'),
(80, 'process of writing the state of object into byte stream', '	Deserialisation', '	Externlisation', '	serialisation', '	print', 'C'),
(81, 'marker interface', '	having body', '	having no body', '	both', '	none', 'B'),
(82, 'Choose one marker interface', '	serializable', '	iterator', '	collection', '	none', 'A'),
(83, 'Which interface does java.util.Hashtable implement?', '	Java.util.Map', '	Java.util.List', '	Java.util.Hashtable', '	None', 'A'),
(102, 'Which keyword is used while using interface', '	extends', '	implement', '	access', '	none', 'B'),
(101, 'Executable applet is', '	.java file', '	.class', '	.applet', '	java', 'B'),
(100, 'In which we clone the object and their constituent parts', '	Shallow Cloning', '	Deep cloning', '	Both', '	none', 'B'),
(99, 'Which command disassembles a class file', '	javaamd', '	javacmd', '	javap', '	java', 'C'),
(98, 'Interfaces helps in which type of inheritance', '	Multiple interface', '	Multilevel Interface', '	Hirerchical Interface', '	None', 'A'),
(97, 'Which method of java is invoked by JVM to reclaim the inaccessible memory location', '	reclaim() method', '	final() method', '	finalize() method', '	Both b and c', 'C'),
(95, 'Java is known as _______stage language', '	1', '	2', '	3', '	4', 'B'),
(96, 'Which driver is called as thin-driver in JDBC', '	Type 1 Driver', '	Type 2 Driver', '	Type 3 Driver', '	Type 4 Driver', 'D'),
(103, 'Which keyword represents object of the present class', '	this', '	package', '	interface', '	final', 'A'),
(104, 'The method cant be overridden', '	final', '	abstract', '	public', '	private', 'A'),
(105, 'What is the full form of ADT ?\r\n', '	Abstract Data Type\r\n', '	Abstract Development tool\r\n', '	Abstract Design Tool\r\n', '	Advance Development Tool\r\n', 'A'),
(106, '\r\n\r\nThe expected signature of the main method is public static void main(). What happens if we make a mistake and forget to put the static keyword ?\r\n', '	The JVM issues an error saying that main method should be declared static\r\n', '	The compiler issues a warning saying that main method should be declared static and adds it automati\r\n', '	The JVM successfully invokes the main method\r\n', '	The JVM fails at runtime with NoSuchMethodError\r\n', 'D'),
(107, '\r\n\r\nWhat does the AWT stands for ?\r\n', '	Abstract Windowing toolkit\r\n', '	A web toolkit\r\n', '	Application with types\r\n', '	Absolutly wonderfull toolkit\r\n', 'A'),
(108, '\r\n\r\nWhich of the following is generated when the source code is successfully compiled ?\r\n', '	Output\r\n', '	Bytecode\r\n', '	Error\r\n', '	None of above\r\n', 'B'),
(109, '\r\n\r\nIn java , if you do not give a value to a variable before using it ,______\r\n', '	It will contain a garbage value\r\n', '	It will initialized with zero\r\n', '	Compiler will give an error\r\n', '	None of above\r\n', 'C'),
(110, '\r\n\r\nWhich among the following is the compulsory section of java program ?\r\n', '	package Statement\r\n', '	import Statement\r\n', '	Documentation section\r\n', '	Class declaration section\r\n', 'D'),
(111, '\r\n\r\nSharing of common information is achieved by the concept of ?\r\n', '	polymorphism\r\n', '	encapsulation\r\n', '	inheritance\r\n', '	none of above\r\n', 'C'),
(112, '\r\n\r\nThe extension name of a Java source code file is ?\r\n', '	.java\r\n', '	.obj\r\n', '	.class\r\n', '	.exe\r\n', 'A'),
(113, '\r\n\r\nThe JDK command to compile a class in the file Test.java is\r\n', '	java Test\r\n', '	javac Test.java\r\n', '	javac Test\r\n', '	javac Text.class\r\n', 'B'),
(114, '\r\n\r\n_________ is a software that interprets Java bytecode.\r\n', '	Java virtual machine\r\n', '	Java compiler\r\n', '	Java debugger\r\n', '	Java API\r\n', 'A'),
(115, '\r\n\r\nWhich JDK command is correct to run a Java application in ByteCode.class?\r\n', '	java ByteCode\r\n', '	java ByteCode.class\r\n', '	javac ByteCode.java\r\n', '	javac ByteCode\r\n', 'A'),
(116, '\r\n\r\nJava is also known as ...... stage language\r\n', '	One\r\n', '	Two\r\n', '	Three\r\n', '	Four\r\n', 'B'),
(117, '\r\n\r\nFor interpretation of java program, _________ command is used.\r\n', '	java\r\n', '	javac\r\n', '	javap\r\n', '	none of these\r\n', 'A'),
(118, '\r\n\r\nWhat is HotJava ?\r\n', '	system software\r\n', '	web browser\r\n', '	java environment\r\n', '	IDE\r\n', 'B'),
(119, '\r\n\r\nWhich is a reserved word in the Java programming language?\r\n', '	method\r\n', '	native\r\n', '	subclasse\r\n', '	array\r\n', 'B'),
(120, '\r\n\r\nHow many JDBC driver types does Sun define?\r\n', '	1\r\n', '	2\r\n', '	3\r\n', '	4\r\n', 'D'),
(121, '\r\n\r\nWho invented Java\r\n', '	Netscape\r\n', '	Microsoft\r\n', '	sun\r\n', '	none of these\r\n', 'C'),
(122, '\r\n\r\nTo run a compiled Java program, the machine must have what loaded and running?\r\n', '	JVM\r\n', '	byte code\r\n', '	web browser\r\n', '	java compiler\r\n', 'A'),
(123, '\r\n\r\nA JSP is transformed into a:\r\n', '	servlet\r\n', '	method\r\n', '	java class\r\n', '	applet\r\n', 'A'),
(124, '\r\n\r\nWhat servlet processor was developed by Apache Foundation and Sun?\r\n', '	Apache Tomcat\r\n', '	Apache webserver\r\n', '	Glass fish\r\n', '	Browser\r\n', 'A'),
(125, '\r\n\r\ntype 4 is completely written in java hence\r\n', '	computer\r\n', '	cross plateform\r\n', '	linux\r\n', '	office\r\n', 'B'),
(126, '\r\n\r\nstatement use to execute store procedure\r\n', '	prepared statement\r\n', '	stored procedure\r\n', '	callable statement\r\n', '	statement\r\n', 'C'),
(127, '\r\n\r\nhow many interface in jdbc API\r\n', '	1\r\n', '	2\r\n', '	3\r\n', '	4\r\n', 'C'),
(128, '\r\n\r\nforName() is a static method of\r\n', '	java.lang.class\r\n', '	java.util\r\n', '	java.object\r\n', '	java.connection\r\n', 'A'),
(129, '\r\n\r\nsession listener define following method\r\n', '	sessionCreated, sessionReplaced\r\n', '	sessionCreated, sessionDestroyed\r\n', '	sessionDestroyed, sessionReplaced\r\n', '	none\r\n', 'C'),
(130, '\r\n\r\nwhich package contain jdbc class\r\n', '	java.jdbc and javax.jdbc\r\n', '	java.jdbc and java.jdbc.sql\r\n', '	java.sql and javax.sql\r\n', '	java.rdb and javax.rdb\r\n', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `college` varchar(30) NOT NULL,
  `numb` varchar(20) NOT NULL,
  `receipt` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `college`, `numb`, `receipt`) VALUES
(1, 'Bhagyesh Sunil Patel', 'uzrnem', 'narayana', 'SSBT''s COET,jalgaon', '9604400880', 0),
(2, 'Kavita Sonawane', 'ajinkz', 'patel', 'Mahashabde Vidhyalay', '420', 123),
(5, 'Vishwanath Ahire', 'vishu', 'nath', 'SSBT COET', '7757997996', 23),
(4, 'Sagar Rajkule', 'sagar', 'admin', 'SSBT COET', '9049834748', 420),
(6, 'Rahul Mahajan', 'rahul', 'mahajan', '', '', 0),
(3, 'Yash Bhai', 'yash', 'bhai', 'high', '980', 98);
