-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 04:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesignprojectdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `planetstable`
--

CREATE TABLE `planetstable` (
  `PlanetName` text,
  `PlanetDiameter` text,
  `PlanetMass` text,
  `PlanetDensity` text,
  `PlanetGravity` text,
  `PlanetNumber` text,
  `SunDistance` text,
  `NumberMoon` text,
  `PlanetRings` text,
  `MagneticField` text,
  `PlanetAtmosphere` text,
  `PlanetAtmosphereComposition` text,
  `PlanetMoreFacts` text,
  `PlanetImage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planetstable`
--

INSERT INTO `planetstable` (`PlanetName`, `PlanetDiameter`, `PlanetMass`, `PlanetDensity`, `PlanetGravity`, `PlanetNumber`, `SunDistance`, `NumberMoon`, `PlanetRings`, `MagneticField`, `PlanetAtmosphere`, `PlanetAtmosphereComposition`, `PlanetMoreFacts`, `PlanetImage`) VALUES
('Mercury', '4879km\r\n', '3.285 x 10^23kg\r\n', '5427kg/m^3', '3.7m/s^2', '1st', '5.791 x 10^7km', '0', 'No', 'Yes', 'No', 'N/A', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in eros purus. Fusce ut dolor risus. Aliquam id odio iaculis, sollicitudin justo eget, pellentesque eros. Phasellus pulvinar diam a dui malesuada, venenatis scelerisque lorem tempus. Fusce ullamcorper erat lorem, in porta arcu ultrices sed. Donec lectus neque, porta commodo mi sit amet, sodales finibus est. Maecenas fringilla nibh et augue vulputate, in ornare nibh laoreet. Praesent sed sapien scelerisque, egestas quam vel, faucibus magna. Sed ultrices nulla sed vestibulum lobortis. Pellentesque sit amet ipsum dapibus, dapibus felis quis, porttitor nisi. Morbi dignissim tincidunt magna id tincidunt. Ut blandit arcu ac purus viverra, dapibus gravida sapien posuere. Maecenas eget eros hendrerit, efficitur lectus in, bibendum dolor. Etiam sed egestas elit, in imperdiet risus. Aenean ultricies iaculis ultrices. Cras a aliquet purus, vel elementum nisl.', '\"../Media/Mercury.jpg\"'),
('Venus', '12104km', '4.867 x 10^24kg', '5243kg/m^3', '8.9m/s^2', '2nd', '1.082 x 10^8km', '0', 'No', 'No', 'Yes', '96.5% CO2, 3.5% N2 and less than 1% other gases\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempor ante ligula, iaculis posuere quam maximus ac. Pellentesque arcu nunc, finibus in commodo in, cursus eget justo. Sed id urna commodo metus finibus mollis. Quisque pulvinar sapien ut risus convallis, quis luctus erat mattis. Curabitur tristique porttitor ante ut tempus. Suspendisse potenti. Fusce eu magna sed elit dictum pellentesque ut at magna.<br><br>Phasellus vel cursus metus. Morbi eget sollicitudin sapien, sodales porttitor neque. Nunc bibendum accumsan volutpat. Praesent dapibus venenatis nunc sit amet rutrum. Duis posuere ornare lacus. Sed aliquam libero eget rhoncus congue. Fusce dictum enim at tempor porttitor. Integer sed mauris at lorem rutrum molestie. Curabitur auctor, urna ut tempor accumsan, neque ligula placerat mauris, in egestas lectus orci ac risus. Nulla imperdiet velit metus, vel lobortis augue lobortis id. Sed iaculis feugiat erat, eu luctus sapien pellentesque a. Ut ac odio in enim consequat tincidunt. Quisque suscipit nunc ligula, non ullamcorper justo mattis nec. Nunc congue eros ante, at aliquam enim lacinia id. Fusce vitae suscipit turpis. Nulla elementum lacus eu arcu vulputate accumsan.', '../Media/Venus.jpg'),
('Earth', '12742km', '5.972 x 10^24kg', '5514kg/m^3', '9.8m/s^2', '3rd', '1.496 x 10^8km', '1', 'No', 'Yes', 'Yes', '78% N2, 21% O2 and 1% other gases', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl mi, sagittis quis felis sit amet, suscipit semper purus. Morbi porttitor eu justo at ornare. Duis eget malesuada nulla, et finibus sapien. Nulla semper semper cursus. Nunc scelerisque mi nec vulputate aliquam. Donec massa orci, vestibulum a dolor ac, imperdiet consectetur diam. Nulla sit amet metus leo. Nam ultricies risus quis ligula scelerisque, in suscipit ipsum sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor ornare, hendrerit lacus at, maximus nunc. Duis in condimentum arcu. Nunc auctor, risus at malesuada vestibulum, risus augue porta sapien, et commodo sapien magna at mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ultricies, libero vitae auctor dapibus, quam tellus lacinia nisi, quis iaculis mauris dolor ac tellus. Ut consectetur quam at felis accumsan, in fermentum libero scelerisque.<br><br>\r\nProin suscipit velit et urna consectetur, a interdum dolor tincidunt. Etiam nisi purus, pulvinar sit amet sem at, suscipit commodo urna. Etiam ultricies consectetur magna. Pellentesque ut diam dapibus mauris vestibulum placerat. Cras nunc lectus, condimentum at faucibus vel, aliquam vitae sem. Praesent bibendum libero sit amet elementum blandit. Nam eu felis ullamcorper, rutrum eros id, luctus tortor. Etiam urna velit, mollis in ligula dictum, bibendum consectetur dui. Nullam faucibus vulputate lobortis. Donec vitae lectus vestibulum, consequat sapien dapibus, consequat est. Pellentesque consectetur ex eu metus viverra, sed laoreet turpis tristique. Maecenas faucibus congue nisi, sed mollis ipsum. Etiam tristique luctus tortor vel congue. Cras viverra lobortis est et aliquam. Donec dui nulla, tristique eu ipsum at, faucibus pretium felis. Fusce metus ante, suscipit in ornare a, faucibus at arcu.', '../Media/Earth.jpg'),
('Mars', '6779km', '6.39 x 10^23kg', '3934kg/m^3', '5m/s^3', '4th', '2.279 x 10^8km', '2', 'No', 'No', 'Yes', '95% CO2, 2.7% N2, 1.6% Ar and 0.7% other gases', 'Vestibulum eu cursus purus. Etiam sollicitudin tincidunt ligula at euismod. Mauris egestas lobortis elementum. Pellentesque a luctus lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam at lectus velit. Phasellus lacus risus, malesuada id risus at, facilisis iaculis erat. Aliquam blandit arcu nisl, finibus gravida eros bibendum a. Pellentesque sagittis mi sed tincidunt blandit.', '../Media/Mars.jpg'),
('Jupiter', '139820km', '1.898 x 10^27kg', '1326kg/m^3', '59.5m/s^2', '5th', '7.785 x 10^8km', '79', 'Yes', 'Yes', 'Yes', '89% H2, 10% He and less than 1% other gases', 'Quisque mollis posuere dictum. Etiam enim metus, vestibulum et ipsum vitae, congue bibendum risus. Mauris sit amet egestas lorem. Vestibulum lobortis tincidunt semper. Quisque id porttitor justo. Vivamus vehicula nulla turpis. Donec ut nisi orci. Sed vel est a justo feugiat commodo. Etiam consequat fermentum laoreet. Donec maximus nibh ut dictum aliquet. Vestibulum et viverra libero, nec sodales leo. Donec ipsum mauris, facilisis nec consequat in, gravida dictum nisi.', '../Media/Jupiter.jpg'),
('Saturn', '116460km', '5.683 x 10^26kg', '687kg/m^3', '35.5m/s^2', '6th', '1.434 x 10^9km', '62', 'Yes', 'Yes', 'Yes', '96.3% H2, 3.25% He and 0.45% other gases', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl mi, sagittis quis felis sit amet, suscipit semper purus. Morbi porttitor eu justo at ornare. Duis eget malesuada nulla, et finibus sapien. Nulla semper semper cursus. Nunc scelerisque mi nec vulputate aliquam. Donec massa orci, vestibulum a dolor ac, imperdiet consectetur diam. Nulla sit amet metus leo. Nam ultricies risus quis ligula scelerisque, in suscipit ipsum sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at tortor ornare, hendrerit lacus at, maximus nunc. Duis in condimentum arcu. Nunc auctor, risus at malesuada vestibulum, risus augue porta sapien, et commodo sapien magna at mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas ultricies, libero vitae auctor dapibus, quam tellus lacinia nisi, quis iaculis mauris dolor ac tellus. Ut consectetur quam at felis accumsan, in fermentum libero scelerisque.', '../Media/Saturn.jpg'),
('Uranus', '50724km', '8.681 x 10^25kg', '1318kg/m^3', '21.3m/s^2', '7th', '2.871 x 10^9km', '27', 'Yes', 'Yes', 'Yes', '82.5% H2, 15.2% He, 2.3% Ch4 and less than 1% other gases', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed diam purus. Vestibulum malesuada non odio a faucibus. Donec ut eleifend mauris. Proin id fringilla est, a tempor ex. Maecenas erat tellus, luctus ac elit quis, ultrices laoreet sapien. Integer non tempor eros, vitae ultricies dui. Cras pulvinar nunc sit amet mi condimentum feugiat. Proin massa felis, mollis ac velit eget, vulputate vulputate ipsum.<br><br>Curabitur id nunc ac enim gravida gravida id at purus. Donec maximus in leo sit amet ornare. Integer aliquet sodales ipsum, vitae accumsan turpis mattis ut. Vivamus ultrices mi vitae nisi consectetur, in aliquet nulla elementum. Vestibulum id mauris efficitur, eleifend sapien sit amet, consectetur tortor. Quisque aliquet, mi at ornare suscipit, velit lacus rutrum nisl, vitae aliquet mauris enim et massa. Morbi faucibus orci ac sem maximus, vitae volutpat nibh laoreet. Cras id orci posuere, rutrum enim lacinia, convallis enim. Nam eget elit mollis, eleifend nisi a, interdum velit. In feugiat placerat erat, ut consequat sapien varius a.', '../Media/Uranus.jpg'),
('Neptune', '49244km', '1.024 x 10^26kg', '1638kg/m^3', '23.5m/s^2', '8th', '4.495 x 10^9km', '14', 'Yes', 'Yes', 'Yes', '80% H2, 18% He, CH4 1.5% and less than 1% other gases', 'Integer vulputate lectus risus, quis molestie erat tempus at. Sed feugiat pretium orci, in cursus erat mattis nec. Maecenas ultrices dolor a ligula cursus porttitor. Curabitur commodo in neque eget posuere. Etiam venenatis urna tortor, et malesuada magna finibus vitae. Quisque at neque vitae nunc porta tincidunt. Integer maximus sit amet quam sit amet consectetur. Quisque et magna quis dolor viverra lacinia ac interdum ipsum.<br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut euismod ligula sit amet sem molestie rutrum. Nulla ornare volutpat sagittis. Suspendisse facilisis fermentum scelerisque. Duis posuere nisi eget lectus tristique luctus. Sed vehicula quam eget iaculis viverra. Phasellus ut bibendum leo. Curabitur sed lobortis libero. Suspendisse pretium dui urna, at cursus diam vulputate eget. Maecenas non enim hendrerit, volutpat odio eu, finibus ante. Phasellus auctor lectus ac enim pretium vulputate. Duis a velit id risus aliquam rutrum at non mi. Aliquam erat volutpat. Maecenas eu finibus ligula. Aenean eu velit tortor.', '../Media/Neptune.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `planetstable`
--
ALTER TABLE `planetstable`
  ADD UNIQUE KEY `Index` (`PlanetName`(4));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
