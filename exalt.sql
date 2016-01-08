SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `cscart_payment_processors` (
  `processor_id` mediumint(8) UNSIGNED NOT NULL,
  `processor` varchar(255) NOT NULL DEFAULT '',
  `processor_script` varchar(255) NOT NULL DEFAULT '',
  `processor_template` varchar(255) NOT NULL DEFAULT '',
  `admin_template` varchar(255) NOT NULL DEFAULT '',
  `callback` char(1) NOT NULL DEFAULT 'N',
  `type` char(1) NOT NULL DEFAULT 'P',
  `addon` varchar(32) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `cscart_payment_processors` (`processor_id`, `processor`, `processor_script`, `processor_template`, `admin_template`, `callback`, `type`, `addon`) VALUES
(108, 'Exalt', 'exalt.php', 'views/orders/components/payments/cc.tpl', 'exalt.tpl', 'Y', 'P', '');


ALTER TABLE `cscart_payment_processors`
  ADD PRIMARY KEY (`processor_id`);


ALTER TABLE `cscart_payment_processors`
  MODIFY `processor_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
