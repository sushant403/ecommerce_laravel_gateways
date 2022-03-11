-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2022 at 08:36 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `am_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` bigint(20) UNSIGNED DEFAULT NULL COMMENT '1 => single_product, 2 => variant_product',
  `unit_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `thumbnail_image_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barcode_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_type` int(11) NOT NULL DEFAULT '0' COMMENT '1 => free_shipping, 2 => flat_rate',
  `shipping_cost` double(16,2) NOT NULL DEFAULT '0.00',
  `discount_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` double(16,2) NOT NULL DEFAULT '0.00',
  `tax_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tax` double(16,2) NOT NULL DEFAULT '0.00',
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `specification` longtext COLLATE utf8mb4_unicode_ci,
  `minimum_order_qty` int(11) DEFAULT NULL,
  `max_order_qty` int(11) DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_physical` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `display_in_details` tinyint(4) NOT NULL DEFAULT '0',
  `requested_by` int(10) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `stock_manage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_type`, `unit_type_id`, `brand_id`, `thumbnail_image_source`, `barcode_type`, `model_number`, `shipping_type`, `shipping_cost`, `discount_type`, `discount`, `tax_type`, `gst_group_id`, `tax`, `pdf`, `video_provider`, `video_link`, `description`, `specification`, `minimum_order_qty`, `max_order_qty`, `meta_title`, `meta_description`, `meta_image`, `is_physical`, `is_approved`, `status`, `display_in_details`, `requested_by`, `created_by`, `slug`, `updated_by`, `stock_manage`, `created_at`, `updated_at`) VALUES
(1, 'Business Card', 1, 1, 1, 'uploads/images/12-03-2022/622ba53643491.png', 'C39', NULL, 0, 0.00, '1', 0.00, NULL, NULL, 0.00, NULL, 'youtube', NULL, '<div class=\"col-6 col-xs-12\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 638.5px; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px; background-color: rgb(255, 255, 255);\"><div class=\"hidden-xs hidden-sm\"><h2 class=\"mb-0 text-color-standard\" style=\"font-family: var(--visage-font-heading-family, inherit); overflow-wrap: anywhere; padding-bottom: 0px; padding-top: 0px; word-break: normal; font-size: var(--visage-text-size-2); line-height: var(--visage-text-size-2-line-height); letter-spacing: -0.02em;\">Set yourself apart with smoothed out, rounded corners.</h2></div><div class=\"text-color-standard\"><ul><li>Quarter-inch rounded corners</li><li>Fit perfectly in any standard holder or wallet</li><li>Available with most paper stocks</li><li>3 paper thicknesses: standard (14pt), premium (16pt) or premium plus (18pt)</li></ul><p><br></p><p><img src=\"https://cms.cloudinary.vpsvc.com/images/c_scale,dpr_auto,f_auto,q_auto:good,w_700/legacy_dam/en-us/S001398003/BCMX402-bc-roundedCorner-overview_001\" style=\"width: 100%;\"><br></p><ul><li><br></li></ul><p>Rounded corner business cards have a look and feel that’s hard to miss. And the attention-grabbing shape helps keep your company top of mind.</p><p>Rounded corners are available with most of our great paper stocks, with lots more customization options, too. You can have square business cards with rounded corners or complete your design with our embossed gloss or foil accents. The shape also works well with the soft edges of many social media logos, so check out&nbsp;<a href=\"https://www.vistaprint.com/hub/social-media-icons-on-business-cards\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; color: var(--visage-link-font-color); cursor: pointer; display: inline-block; font-family: inherit; font-size: inherit; font-weight: inherit; margin: 0px; padding: 0px; text-align: inherit; text-decoration: var(--visage-link-text-decoration);\">how to add social media icons to business cards</a>.</p><p>Need more than 10,000? Click&nbsp;<a href=\"https://pages.vistaprintcorporate.com/business-cards-quote.html?utm_source=Vistaprint&amp;utm_medium=Form&amp;utm_campaign=Vistaprint_Form_ProductRequest_Rounded_Business_Cards&amp;utm_content=Rounded_Business_Cards\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; color: var(--visage-link-font-color); cursor: pointer; display: inline-block; font-family: inherit; font-size: inherit; font-weight: inherit; margin: 0px; padding: 0px; text-align: inherit; text-decoration: var(--visage-link-text-decoration);\">here</a>&nbsp;to submit a request.</p><p>Looking for ideas? Take a look at some of our favorite&nbsp;<a href=\"https://www.vistaprint.com/hub/business-card-examples\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; color: var(--visage-link-font-color); cursor: pointer; display: inline-block; font-family: inherit; font-size: inherit; font-weight: inherit; margin: 0px; padding: 0px; text-align: inherit; text-decoration: var(--visage-link-text-decoration);\">business card examples</a>.</p><p><br></p></div></div><div class=\"col-6 col-xs-12\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 638.5px; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px; background-color: rgb(255, 255, 255);\"><div class=\"progressive-image-wrapper\"></div></div>', '<div class=\"col-7 col-sm-12 col-vertically-center\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 496.594px; align-self: center; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px;\"><div class=\"\" style=\"\"><div class=\"\" style=\"display: flex; justify-content: space-around;\"><img src=\"https://rendering.documents.cimpress.io/preview?width=980&amp;instructions_uri=https%3a%2f%2fuds.documents.cimpress.io%3a443%2fv2%2ftransient%2fprdSpecSvc%3fdocument%3dhZDBboMwDIZfpfJpk1oI0E6UWy%252bVdl2107RDCKZ4CgQloWuL%252bu5zoJ200xRFST7%252fdn57hBNaR6aDAtJIwBIqo4YWOw%252fFCG6wtVTooPgYoZMtsmpvDQeX8E2Vb%252fi9jZKtahk0SMeG02ATZflEPJ79zqKc83vjyE8%252fjXBmmZg0l9%252fbvwVvjIylK%252f8v9U7TsZt9guIDLWdwL57U32BLVaXx7mZPqKvZTs1lDnQNLaXpog8tBbSXLelgamdJ6js8%252bIsOws7YdoKK4Vz%252bIGtchCYnqo1lZo%252flUyrEMhUZ7%252fUz3D6nNRd7w2kSxl7erWZ1433vijgOMRc9xu8iRW1v0bmITHxKYvtII3SxkFmZ1KVc5bV8Wa0zTFa5ynAlRZLLDZZ5shFxP5SaXIMVW%252but%252bUIVxv9aQdENWt9%252bAA%253d%253d%26type%3dpreview&amp;scene=https%3a%2f%2fscenes.documents.cimpress.io%3a443%2fv3%2ftransient%3fdata%3dlZJRS8MwEMe%252fyrgnhQjt1pXaxw2mIk7nRBDxIW0yGxuTkVwcdfS7e6mI%252bjDBhzzc%252f3%252f53eVye9gpgQ2Up0XCwDd2twhaz7SUAkp0QTLYOitCjVDuwbcBSphfXJ3keb5aXiYPwKJ4z53ilZY%252bJi2UUZ6IsLRGkj%252fjdeuViCbMNDctaeuGbyXFa%252bRGcCdImltnpItJtzYYIcXoS2Fw16i6NdL731fWofLoOEbSmbbedyTefLY7unZKGuSorCH73Dr1binWQyljZI2xBIH8d6urwA0q7EhJkwT6noHm3dDV4x6wG3q2b9KRGl9ug6ujhE69xhidbWWcQW21dWS45%252boom7A0L9h4nB1TjrCIcbYbrr2kAn9hq%252bEbDnEJyApW%252fBfq%252bUYeZKbZlKXThM7kJzcuQt8%252fDbvwQpMbZmpoUfoP\" class=\"fluid-image p-6 design-specs-image note-float-right\" style=\"max-width: 100%; width: 100%; max-height: 500px; margin-right: auto; margin-left: auto; display: block; padding: 32px !important; float: right;\"></div><div class=\"\" style=\"display: flex; justify-content: space-around;\"><br></div></div></div><div class=\"col-5 col-sm-12 col-vertically-center\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 354.719px; align-self: center; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px;\"><div class=\"mb-2 row\" style=\"margin: 0 calc(var(--visage-grid-gutter) * -1); padding-left: 0px;\"><div class=\"col-6 col-xs-4 col-sm-4\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><p class=\"mt-0 mb-2 strong text-size-6 text-color-standard\" style=\"font-weight: var(--visage-strong-font-weight,bold); font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em; margin-bottom: 8px !important;\">Full Bleed Size</p></div><div class=\"col-6 col-xs-8 col-sm-8\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><div class=\"\" style=\"display: flex; flex-flow: column wrap;\"><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">3.62\" x 2.12\"</p><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">91.9 x 53.8 mm</p></div></div></div><div class=\"mb-2 row\" style=\"margin: 0 calc(var(--visage-grid-gutter) * -1); padding-left: 0px;\"><div class=\"col-6 col-xs-4 col-sm-4\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><p class=\"mt-0 mb-2 strong text-size-6 text-color-standard\" style=\"font-weight: var(--visage-strong-font-weight,bold); font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em; margin-bottom: 8px !important;\">Document Trim Size</p></div><div class=\"col-6 col-xs-8 col-sm-8\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><div class=\"\" style=\"display: flex; flex-flow: column wrap;\"><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">3.5\" x 2\"</p><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">88.9 x 50.8 mm</p></div></div></div><div class=\"mb-2 row\" style=\"margin: 0 calc(var(--visage-grid-gutter) * -1); padding-left: 0px;\"><div class=\"col-6 col-xs-4 col-sm-4\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><p class=\"mt-0 mb-2 strong text-size-6 text-color-standard\" style=\"font-weight: var(--visage-strong-font-weight,bold); font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em; margin-bottom: 8px !important;\">Safety Area</p></div><div class=\"col-6 col-xs-8 col-sm-8\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><div class=\"\" style=\"display: flex; flex-flow: column wrap;\"><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">3.38\" x 1.88\"</p><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">85.9 x 47.8 mm</p></div></div></div></div>', 1, 100, 'Rounded Corner Business Cards', 'Rounded corner business cards stand out with a modern, memorable look. Lose the corners to get an edge.', 'uploads/images/12-03-2022/622ba53705268.png', 1, 1, 1, 1, 1, 1, 'business-card', 1, '1', '2022-03-11 19:38:31', '2022-03-11 19:41:44'),
(2, 'Tote-Bag-2203450423', 1, 1, 1, 'uploads/images/12-03-2022/622bab9f6bef4.png', 'C39', NULL, 0, 0.00, '1', 0.00, NULL, NULL, 0.00, NULL, 'youtube', NULL, '<div class=\"col-6 col-xs-12\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 638.5px; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px; background-color: rgb(255, 255, 255);\"><div class=\"hidden-xs hidden-sm\"><h2 class=\"mb-0 text-color-standard\" style=\"box-sizing: border-box; color: var(--visage-font-heading-color,inherit); font-family: var(--visage-font-heading-family, inherit); font-weight: 900; margin-bottom: 0px !important; margin-top: 0px; overflow-wrap: anywhere; padding-bottom: 0px; padding-top: 0px; word-break: normal; font-size: var(--visage-text-size-2); line-height: var(--visage-text-size-2-line-height); letter-spacing: -0.02em;\">Share your brand on the go with a versatile custom tote bag.</h2><h2 class=\"mb-0 text-color-standard\" style=\"font-family: var(--visage-font-heading-family, inherit); overflow-wrap: anywhere; padding-bottom: 0px; padding-top: 0px; word-break: normal; font-size: var(--visage-text-size-2); line-height: var(--visage-text-size-2-line-height); letter-spacing: -0.02em;\"><div class=\"hidden-xs hidden-sm\" style=\"color: rgb(0, 0, 0); font-weight: 400; letter-spacing: -0.18px;\"></div><div class=\"text-color-standard\" style=\"color: rgb(0, 0, 0); font-weight: 400; letter-spacing: -0.18px;\"><ul><li>Open main compartment with easy access</li><li>100% cotton canvas</li><li>Double carry handles</li><li>Print your design on both sides of the bag</li></ul><p><br></p><p><img src=\"https://cms.cloudinary.vpsvc.com/images/c_scale,dpr_auto,f_auto,q_auto:good,w_700/legacy_dam/en-us/S001377893/Classic-Cotton-Tote-Bag-Small-Overview-Tile-001\" style=\"width: 693.802px;\"><br></p><ul><li><br></li></ul><p><span style=\"font-weight: var(--visage-strong-font-weight,bold);\">Decoration:</span>&nbsp;Full-Color Print</p><p><span style=\"font-weight: var(--visage-strong-font-weight,bold);\">Care Instructions:</span>&nbsp;To keep your printed design looking bold, washing is not recommended.</p><p>The classic cotton tote bag is a go-to favorite for event giveaways and promotional packs. Easy to design and lightweight, these personalized tote bags won’t weigh you down when traveling for a trade show, conference or industry event. So, next time you need a big-batch giveaway, provide something people will regularly use that creates a positive image of your business.</p><p>To make this classic tote bag your own, upload your logo to preview how it looks in our interactive design studio. From there, it’s easy to add additional text and edit the color and style. And if you need any help or a second opinion along the way, our design experts are on hand to support you.</p></div></h2></div></div><div class=\"col-6 col-xs-12\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 638.5px; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px; background-color: rgb(255, 255, 255);\"><div class=\"progressive-image-wrapper\"></div></div>', '<div class=\"mb-2 row\" style=\"margin: 0 calc(var(--visage-grid-gutter) * -1); padding-left: 0px; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px;\"><div class=\"col-6 col-xs-4 col-sm-4\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><p class=\"mt-0 mb-2 strong text-size-6 text-color-standard\" style=\"font-weight: var(--visage-strong-font-weight,bold); font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em; margin-bottom: 8px !important;\">Full Bleed Size</p></div><div class=\"col-6 col-xs-8 col-sm-8\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><div class=\"\" style=\"display: flex; flex-flow: column wrap;\"><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">8\" x 8\"</p><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">203.2 x 203.2 mm</p><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\"><br></p></div></div></div><div class=\"mb-2 row\" style=\"margin: 0 calc(var(--visage-grid-gutter) * -1); padding-left: 0px; font-family: Graphik; font-size: 18px; letter-spacing: -0.18px;\"><div class=\"col-6 col-xs-4 col-sm-4\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><p class=\"mt-0 mb-2 strong text-size-6 text-color-standard\" style=\"font-weight: var(--visage-strong-font-weight,bold); font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em; margin-bottom: 8px !important;\">Document Trim Size</p></div><div class=\"col-6 col-xs-8 col-sm-8\" style=\"list-style-type: none; margin-left: 0px; margin-right: 0px; max-width: none; padding: 0 var(--visage-grid-gutter); vertical-align: top; width: 177.359px;\"><div class=\"\" style=\"display: flex; flex-flow: column wrap;\"><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">8\" x 8\"</p><p class=\"my-0 text-size-6 text-color-standard\" style=\"font-size: var(--visage-text-size-6); line-height: var(--visage-text-size-6-line-height); letter-spacing: -0.01em;\">203.2 x 203.2 mm</p></div></div></div>', 1, 100, 'Carry your logo around town with our practical, customizable totes.', 'Carry your logo around town with our practical, customizable totes.', 'uploads/images/12-03-2022/622baba03abef.png', 1, 1, 1, 1, 1, 1, 'tote-bag-2203450423', NULL, '0', '2022-03-11 20:05:52', '2022-03-11 20:05:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_created_by_foreign` (`created_by`),
  ADD KEY `products_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
