-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql211.byetcluster.com
-- Generation Time: Dec 11, 2018 at 04:01 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_23129683_buildeasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `custmors`
--

CREATE TABLE IF NOT EXISTS `custmors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `custmors`
--

INSERT INTO `custmors` (`id`, `name`, `email`, `password`, `isEmailConfirmed`, `token`) VALUES
(1, 'venkata Narayana reddy', 'venkat.tumu261@gmail.com', '$2y$10$Z8lLMU1JoR7Q6xFry9y84uboiAqWpqSow6jmbE3FUNj/CrqXaht5K', 1, ''),
(5, 'swamy naga', 'swamy6123@gmail.com', '$2y$10$QT9M31MHwnocdFskTUIirO4HYGa19rZX5c4ACYMfVSK77aITnIuAy', 1, ''),
(4, 'dinesh', 'dinesh3848@gmail.com', '$2y$10$cFf6wsgI.mQQ4isvKUgEBOKK3n8/C9/vTjoiSiwOB5baFpWoycwsG', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `custmor_profile`
--

CREATE TABLE IF NOT EXISTS `custmor_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_custmor` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `doorno_area` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendor` int(11) NOT NULL,
  `category` varchar(256) NOT NULL,
  `service` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `id_vendor`, `category`, `service`, `address`, `description`, `image`) VALUES
(1, 1, 'Construction Material Dealers', 'bamboo', 'nizampet', 'Bamboo as a building material has high compressive strength and low weight has been one of the most used building material as support for concrete, especially in those locations where it is found in abundance. Bamboo as a building material is used for the construction of scaffolding, bridges and structures, houses.', 'bamboo.jpg'),
(2, 1, 'Construction Material Dealers', 'Birch', 'nizampet', 'Our White Birch fragrance oil provides a brand new layer of sophistication to standard pine scents with bright notes of eucalyptus, cypress, and tonka bean, growing a unique fragrant crispness. An excellent desire for winter candle or cleaning soap traces, this heady scent additionally has yr-spherical enchantment as a luxury evergreen perfume', 'Birch.jpg'),
(3, 1, 'Construction Material Dealers', 'Cedar', 'nizampet', 'White cedar (03 White Cedar) is a tree with essential uses in traditional Ojibwe tradition. Honored with the name NookomisGiizhik (â€œGrandmother Cedarâ€), the tree is the concern of sacred legends and is considered a gift to humanity for its myriad uses. It is utilized in craft, production, and medication.', 'Cedar.png'),
(4, 1, 'Construction Material Dealers', 'Cherry', 'nizampet', 'I assume maximum people have neglected out on the exceptional cherries, those that develop inside the backyard. Still, when cherries are proper â€” juicy, fleshy, even crisp â€” even the grocery store range can be impossible to resist. So I buy them with the aid of the sack, in general for snacks.', 'Cherry.jpg'),
(5, 1, 'Construction Material Dealers', 'Cross-Laminated', 'nizampet', 'Cross-laminated timber (CLT) is a wood panel product made from gluing layers of solid-sawn lumber together. Each layer of boards is oriented perpendicular to adjacent layers and glued on the side faces of each board, usually in a symmetric way so that the outer layers have the same orientation. An odd number of layers is most common, but there are configurations with even numbers as well (which are then arranged to give asymmetric configuration)', 'Cross-Laminated.jpg'),
(6, 2, 'Home Appliance Dealers', 'Split ac', 'pragathi nagar, pagathi nagar', 'Blue Star, Carrier, Carrier Midea, Daikin, Electrolox, Godrej, Haier, IFB, Kevinator, Kenstar, LG, Lloyd, Mitsubishi, OGeneral, Onida.', 'split ac1.jpg'),
(7, 1, 'Construction Material Dealers', 'Glulam', 'nizampet', 'Glulam (glued laminated wood) are structural beams such as some of solid lamellas glued together.\r\nThe beams are getting used frequently within the constructing production whilst a protracted clean span between the weight sporting factors (partitions, pillars) is needed.', 'Glulam.jpg'),
(8, 2, 'Home Appliance Dealers', 'Cassette ac', 'pragathi nagar, pagathi nagar', 'Some of the companys we deal with Blue Star, Carrier, Carrier Midea, Daikin, Electrolox, Godrej, Haier, IFB, Kevinator, Kenstar, LG, Lloyd, Mitsubishi, OGeneral, Onida.', 'cassette ac.jpg'),
(9, 1, 'Construction Material Dealers', 'Sand', 'nizampet', 'Sand is a granular fabric composed of finely divided rock and mineral particles. It is described by length, being finer than gravel and coarser than silt. Sand can also refer to a textural elegance of soil or soil type; i.E., a soil containing extra than eighty-five percent sand-sized debris with the aid of mass.', 'Sand.jpg'),
(10, 2, 'Home Appliance Dealers', 'Tower AC', 'pragathi nagar, pagathi nagar', 'Some of the companys we deal with Blue Star, Carrier, Carrier Midea, Daikin, Electrolox, Godrej, Haier, IFB, Kevinator, Kenstar, LG, Lloyd, Mitsubishi, OGeneral, Onida.', 'tower ac.jpg'),
(11, 1, 'Construction Material Dealers', 'steel', 'nizampet', 'In pure iron, the crystal structure has relatively little resistance to the iron atoms slipping beyond each other, and so natural iron is pretty ductile, or soft and without problems shaped. In metallic, small amounts of carbon, different elements, and inclusions inside the iron act as hardening dealers that save you the motion of dislocations that are commonplace within the crystal lattices of iron atoms.', 'steel.jpg'),
(12, 1, 'Construction Material Dealers', 'Plywood & Boards', 'nizampet', 'Fire Retardant plywood is a kind of plywood that is handled with unique hearth retardant chemicals on the time of manufacture in order that it will become better at resisting fires. It is also referred to as FR grade plywood. It is commonly utilized in public locations, wherein the threat of hearth needs to be reduced which includes for making the woodwork inside the kitchens of massive eating places, o,r for the indoors woodwork carried out in public theatres and halls, and the wood used inside the railway cubicles of our trains. It can also be utilized in homes and offices, for automobile interiors, and any other such locations wherein the hazard and unfold of the fire should be reduced. The Indian great requirements for the manufacture of FR grade fire resistant plywood are detailed inside the report IS 5509.', 'Plywood & Boards.jpg'),
(13, 1, 'Construction Material Dealers', 'Glass Suppliers', 'nizampet', 'The texture is created during the glass sheet-forming process. A sheet is formed from molten glass with a roller that spins on itself while traveling forward. Normally the roller spins at the same speed as its own forward motion, and the resulting sheet has a smooth surface. In the manufacture of rippled glass, the roller spins faster than its own forward motion. The rippled effect is retained as the glass cools. ', 'Glass Suppliers.jpg'),
(14, 1, 'Construction Service Providers', 'cement', 'nizampet', 'ACC Limited (Formerly The Associated Cement Companies Limited) is one of the largest producers of cement in India. Its registered office is called Cement House. It is located on Maharishi Karve Road, Mumbai.[5] The stock price of the company contributes to calculating BSE Sensex.', 'cement.jpg'),
(15, 4, 'Solar Product Dealers', 'solar water heater', 'hyderanaga', 'Solar water heating (SWH) is the conversion of daylight into warmness for water heating the use of a solar thermal collector. A variety of configurations are available at varying price to provide answers in specific climates and latitudes. SWHs are extensively used for residential and some commercial programs', 'solar water heater.jpg'),
(16, 4, 'Solar Product Dealers', 'solar power plant', 'hyderanager', 'Off-the-grid is a system and lifestyle designed to help people function without the support of remote infrastructures, such as an electrical grid. In electricity, off-grid can be stand-alone power system or mini-grids typically to provide a smaller community with electricity.', 'On grid Solar Power Systems.jpg'),
(17, 4, 'Solar Product Dealers', 'solar lighting', 'hyderanager', 'A solar lamp also is known as solar light or solar lantern is a lighting system composed of an LED lamp, solar panels, battery, charge controller and there may also be an inverter. The lamp operates on electricity from batteries, charged through the use of solar photovoltaic panel', 'solar lighting.jpg'),
(18, 4, 'Solar Product Dealers', 'solar inveter', 'hyderanager', 'Grid-tie inverters that are available on the market today use a number of different technologies. The inverters may use the newer high-frequency transformers, conventional low-frequency transformers, or no transformer. Instead of converting direct current directly to 120 or 240 volts AC, high-frequency transformers employ a computerized multi-step process that involves converting the power to high-frequency AC and then back to DC and then to the final AC output voltage.', 'solar inveter.jpg'),
(19, 11, 'Construction Service Providers', 'Gas Metal Arc Welding', 'kukatpally', 'Gas metal arc welding (GMAW), sometimes referred to by its subtypes metal inert gas (MIG) welding or metal active gas (MAG) welding, is a welding process in which an electric arc forms between a consumable wire electrode and the workpiece metal(s), which heats the workpiece metal(s), causing them to melt and join. Along with the wire electrode, a shielding gas feeds through the welding gun, which shields the process from contaminants in the air.', 'gaswelding.jpg'),
(20, 4, 'Construction Service Providers', 'Arc Welding', 'kukatpally', 'Arc welding is a welding process that is used to join metal to metal by using electricity to create enough heat to melt metal, and the melted metals when cool result in a binding of the metals. It is a type of welding that uses a welding power supply to create an electric arc between an metal stick ("electrode") and the base material to melt the metals at the point-of-contact. Arc welders can use either direct (DC) or alternating (AC) current, and consumable or non-consumable electrodes.', 'Arcwelding.jpg'),
(21, 4, 'Construction Service Providers', 'shielded Metal Arc welding', 'kukatpally', 'Shielded metal arc welding (SMAW), also known as manual metal arc welding (MMA or MMAW), flux shielded arc welding[1] or informally as stick welding, is a manual arc welding process that uses a consumable electrode covered with a flux to lay the weld.', 'welding services.jpg'),
(22, 4, 'Construction Service Providers', 'Flux Cored Arc Welding', 'kukatpally', 'Flux-cored arc welding (FCAW or FCA) is a semi-automatic or automatic arc welding process. FCAW requires a continuously-fed consumable tubular electrode containing a flux and a constant-voltage or, less commonly, a constant-current welding power supply', 'flux welding.jpg'),
(23, 4, 'Construction Service Providers', 'turf installation', 'kukatpally', 'Artificial turf is a surface of synthetic fibers made to look like natural grass. It is most often used in arenas for sports that were originally or are normally played on grass. However, it is now being used on residential lawns and commercial applications as well. The main reason is maintenanceâ€”artificial turf stands up to heavy use, such as in sports, and requires no irrigation or trimming. Domed, covered, and partially covered stadiums may require artificial turf because of the difficulty of getting grass enough sunlight to stay healthy. Artificial turf does have its downside, however: limited life, periodic cleaning requirements, petroleum use, toxic chemicals from infill, and heightened health and safety concerns.', 'turfinstallation.jpg'),
(24, 0, 'Construction Service Providers', 'water features', 'kukatpally', 'In landscape architecture a water feature is one or more items from a range of fountains, pools, ponds, cascades, waterfalls, and streams.Modern water features are typically self-contained, meaning that they do not require water to be plumbed in; rather water is recycled from either a pond or a hidden reservoir, also known as a sump. The sump can either be contained within the water feature, or buried underground', 'water featureing.jpg'),
(25, 0, 'Building Maintanence Services', 'Electrical Motor Repair Services', 'ramannagar', 'A positive displacement pump makes a fluid move by trapping a fixed amount and forcing (displacing) that trapped volume into the discharge pipe. Some positive displacement pumps use an expanding cavity on the suction side and a decreasing cavity on the discharge side.', 'motor repairs.jpg'),
(26, 11, 'Construction Service Providers', 'Rock featuring', 'ku', 'hhhhhhhhhhhhh', 'Rock-Feature-2.jpg'),
(27, 12, 'Building Maintanence Services', 'Electrical Motor Repair Services', 'ramannagar', 'A positive displacement pump makes a fluid move by trapping a fixed amount and forcing (displacing) that trapped volume into the discharge pipe. Some positive displacement pumps use an expanding cavity on the suction side and a decreasing cavity on the discharge side.', 'motor repairs.jpg'),
(28, 11, 'Construction Service Providers', 'Tile flooring ', 'kukatpally', 'A tile is a thin object usually square or rectangular in shape. Tile is a manufactured piece of hard-wearing material such as ceramic, stone, metal, baked clay, or even glass, generally used for covering roofs, floors, walls, or other objects such as tabletops.', 'tile flooring.jpg'),
(29, 11, 'Construction Service Providers', 'Vinyl sheet flooring', 'kukatpally', 'Vinyl sheet flooring is vinyl flooring that comes in large, continuous, flexible sheets. A vinyl sheet floor is completely impermeable to water, unlike vinyl floor tile, which comes in stiff tiles, and vinyl planks, which come in interlocking strips. It is sometimes called linoleum after a similar product of different (oiled linen) chemical composition. Vinyl flooring is extensively used because it is water-impervious, fairly durable, adjustably resilient and insulating, easy to install, available with a variety of appearances, and cheap.', 'vinyl sheet flooring.jpg'),
(30, 12, 'Construction Service Providers', 'Pest Control Services', 'ramannagar', 'Many unwelcome animals visit or make their home in residential buildings, industrial sites and urban areas. Some contaminate foodstuffs, damage structural timbers, chew through fabrics or infest stored dry goods. Some inflict great economic loss, others carry diseases or cause fire hazards, and some are just a nuisance. Control of these pests has been attempted by improving sanitation and garbage control, modifying the habitat, and using repellents, growth regulators, traps, baits and pesticides', 'PEST CONTROL SERVICES.png'),
(31, 11, 'Construction Service Providers', 'Granite flooring', 'kukatpally', 'Granite is the hardest stone among the other stone flooring materials. It has a very dense grain making it almost impervious. ... Besides being used as a flooring, granite is also used as countertops and backsplashes. Although not as porous as the other stone floors, granite still needs to be applied with a sealant every few years to maintain its good look', 'granite flooring.jpg'),
(32, 11, 'Construction Service Providers', 'Hypoxia flooring', 'kukatpally', 'Epoxy floors are so strong that theyâ€™re often used in heavy traffic areas such as industrial environments, hospitals, or sports facilities.If youâ€™ve ever considered an easy-to-maintain, industrial-grade flooring option, we bet thereâ€™s an epoxy solution for you', 'hypoxy flooring.jpg'),
(33, 12, 'Building Maintanence Services', 'Floor Cleaning Service', 'ramannagar', '\r\nPolishing is the process of creating a smooth and shiny surface by rubbing it or using a chemical action, leaving a surface with a significant specular reflection (still limited by the index of refraction of the material according to the Fresnel equations.)[1] In some materials (such as metals, glasses, black or transparent stones), polishing is also able to reduce diffuse reflection to minimal values. When an unpolished surface is magnified thousands of times, it usually looks like mountains and valleys. By repeated abrasion, those "mountains" are worn down until they are flat or just small "hills." The process of polishing with abrasives starts with coarse ones and graduates to fine ones.', 'FLOOR CLEANING SERVICE.jpg'),
(34, 11, 'Construction Service Providers', 'Laminate flooring', 'kukatpally', 'Laminate flooring is a multi-layer synthetic flooring product fused together with a lamination process. Laminate flooring simulates wood (or sometimes stone) with a photographic applique layer under a clear protective layer. The inner core layer is usually composed of melamine resin and fiber board materials.Laminate flooring has grown significantly in popularity, perhaps because it may be easier to install and maintain than more traditional surfaces.', 'laminate flooring.jpg'),
(35, 11, 'Construction Service Providers', 'Carpentry Services', 'kukatpally', 'Now a days Television is a mass medium for advertising, entertainment and news. Let your significance enhancement get a place of pride to spice up your family time and bringing you shades of TV table that is a need for your entertainment units. Wooden TV Unit for your living space bring more Beauty to your home.', 'carpentry.jpg'),
(36, 11, 'Construction Service Providers', 'Plumbing Services', 'kukatpally', '', 'plumbing ervices (1).jpg'),
(37, 11, 'Construction Service Providers', 'Interior designs', 'kukatpally', 'interior', 'interiordest.jpg'),
(38, 11, 'Construction Service Providers', 'Masonry Services', 'kukatpally', '', 'brick-wall-installation.jpg'),
(39, 11, 'Construction Service Providers', 'Painting Services', 'kukatpally', 'Include works like applying wall care putty, Emulsion Paint to decor your internal walls.From lightening up a living room to a complete color overhaul, the impact a fresh coat of paint can have on your home is huge!', 'paint.jpg'),
(40, 11, 'Construction Service Providers', 'Plumbing Services', 'kukatpally', '', 'plumbing ervices (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(20) NOT NULL,
  `expire` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `password`, `isEmailConfirmed`, `token`, `expire`) VALUES
(1, 'swamy', 'swamy6123@gmail.com', '$2y$10$tvIAfvrDh0.AnlciaQAlz.P7mLMWtFbOLo//LhivW8UtT8jjQcQH2', 1, '', '0000-00-00'),
(2, 'dinesh', 'dinesh3848@gmail.com', '$2y$10$tJifpbIExtatVRVpqdl67OVciBQ50aKk3yE6B9jfJe9eEdINxfwTO', 1, 'gwbd29aqvi', '2018-12-10'),
(4, 'naga', 'venkysri452@gmail.com', '$2y$10$QBI6nRXjG7Auo6husd2jy.7U3Q64BLB7mCDysY9X1MT4SycdXL9xG', 1, '', '0000-00-00'),
(11, 'venkat', 'venkattumu143@gmail.com', '$2y$10$aQPXFnYbWOegGz3zLLSl9uKo1rV3mnzSHl6FxdkgU/iAcMcgPZnoq', 1, '', '0000-00-00'),
(12, 'swamy naga', 'venkyweb452@gmail.com', '$2y$10$UIMrtvM1TrYQ5zmyQeDWteV1JZzEyY/cQN/kXSYkCrucHT9rkrJl2', 1, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_profile`
--

CREATE TABLE IF NOT EXISTS `vendor_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_vendor` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `area` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vendor_profile`
--

INSERT INTO `vendor_profile` (`id`, `id_vendor`, `image`, `mobile`, `area`, `address`) VALUES
(1, 1, 'suit-1.jpg', '8790010929', 'madhapur', 'hyderabad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
