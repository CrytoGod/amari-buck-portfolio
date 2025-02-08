-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2025 at 08:44 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: amari-portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table category
--

CREATE TABLE category (
  id int UNSIGNED NOT NULL,
  title varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table category
--

INSERT INTO category (id, title) VALUES
(1, 'Motion'),
(4, 'Web'),
(5, 'Motion & Web');

-- --------------------------------------------------------

--
-- Table structure for table contact
--

CREATE TABLE contact (
  id int UNSIGNED NOT NULL,
  fullname varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  phone varchar(255) NOT NULL,
  email varchar(500) NOT NULL,
  reason varchar(500) NOT NULL,
  comment varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table contact
--

INSERT INTO contact (id, fullname, phone, email, reason, comment) VALUES
(1, 'Madzen Webber', '+1233255153', 'wezen@gmail.com', 'design', 'Free design'),
(2, 'web2', '1232232232232', 'web2@gmail.com', 'design', 'aqaqaqaqa'),
(3, 'web3test', '+1324578', 'web3@yahoo.com', 'web', 'free work');

-- --------------------------------------------------------

--
-- Table structure for table media
--

CREATE TABLE media (
  id int UNSIGNED NOT NULL,
  image_video varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  project_id int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table media
--

INSERT INTO media (id, image_video, project_id) VALUES
(1, 'zima-video.mp4', 1),
(2, 'zima-detail-1', 1),
(3, 'zima-detail-2', 1),
(4, 'zima-detail-4', 1),
(5, 'zima-detail-4', 1),
(6, 'zima-main.png', 1),
(7, 'zima-video.mp4', 1),
(8, 'kiku-video.mp4', 2),
(9, 'kiku.png', 2),
(10, 'kiku-image-1', 2),
(11, 'kiku-image-2', 2),
(12, 'kiku-image-3', 2),
(13, 'kiku-image-4', 2),
(14, 'kiku-image-5', 2),
(15, 'n-s-video.mp4', 3),
(16, 'n-s-image-1.png', 3),
(17, 'n-s-image-2.png', 3),
(18, 'n-s-image-3.png', 3),
(19, 'n-s-image-4.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table projects
--

CREATE TABLE projects (
  id int UNSIGNED NOT NULL,
  title varchar(250) NOT NULL,
  project_brief varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  done_by varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  market_analyise varchar(3000) NOT NULL,
  brand_strategy varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  design_process varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  challenges varchar(3000) NOT NULL,
  conclusion_and_learnings varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  links_to_other_projects varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  category_id int UNSIGNED NOT NULL,
  thumbnail varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table projects
--

INSERT INTO projects (id, title, project_brief, done_by, market_analyise, brand_strategy, design_process, challenges, conclusion_and_learnings, links_to_other_projects, category_id, thumbnail) VALUES
(1, 'Zima', 'Zima, once a popular malt beverage in the 1990s, lost its relevance as trends shifted. This was a group project our challenge was to reimagine Zima for a new generation, maintaining its nostalgic essence while aligning it with modern tastes and preferences.', 'Me and Emmanuel Opadele', 'Market analysis revealed a resurgence in demand for innovative products, particularly among those seeking new and exciting experiences. In this context, Zima\'s original packaging appeared outdated, and its unclear positioning in the modern beverage landscape limited its appeal to potential consumers. Recognizing this gap, we aimed to attract a younger generation looking for a light, refreshing beverage that combines the enjoyment of beer with the energizing effects of an energy drink. This audience desires a product that aligns with their active lifestyles, offering both refreshment and an energy boost while maintaining a cool, modern twist.', 'As a team, we decided to take an entirely fresh approach by fusing beer and energy drinks. While this concept isn\'t entirely new, we identified that few brands had explored this niche, which presented an exciting opportunity for innovation. Our vision was to create a bold and edgy identity that captured the brightest colors of the night sky—something that would stand out against competing products and pique curiosity. The key message we aimed to convey was to be daring and \"Unleash the Zima.\"', 'The logo underwent a complete overhaul, transitioning to a more modern design that incorporated lightning bolts to emphasize the energy aspect. Our packaging leaned towards darker hues, allowing the vibrant colors to pop and become more noticeable. We chose Ubuntu and Roboto typefaces to complement the overall aesthetic. We divided the project into sections, including promotional videos, web development, brand book creation, and promotional posters. Our goal was to ensure the website was highly interactive, effectively engaging our target audience.', 'One of the significant challenges we faced was achieving the perfect logo design. Initially, we envisioned a bold and impactful logo that reflected the brand\'s revitalization. However, this aspiration posed a dilemma: while a bold design could capture attention, there was a risk of falling into cliché territory. Our aim was to create a product that resonated with consumers, conveying the message that Zima had returned better than ever. Throughout the design process, we sought feedback from our professors and classmates, which helped us strike the right balance between boldness and sophistication.', 'The key to our success was the fusion of two popular beverage categories, which filled a niche in the market while attracting attention with its bold branding and innovative concept. The emphasis on vibrant colors and energetic imagery effectively communicated the essence of Zima as a fun, refreshing choice for consumers. Additionally, our strategic use of social media and interactive marketing fostered community engagement and brand loyalty.\r\nThroughout this rebranding project, we learned the importance of collaboration and leveraging feedback from our professors and classmates. Conducting thorough market research allowed us to identify opportunities for innovation and ensure our branding resonated with consumers. We also recognized the value of iterative design and feedback, as our willingness to adapt and refine our concepts ultimately led to a stronger final product. Moving forward, these insights will guide our approach to future projects, emphasizing the importance of teamwork, creativity, and strategic market understanding.', '', 1, 'zima-tumbnail.png'),
(2, 'Kiku', 'Kiku is a custom-designed pair of earbuds created to blend sleek, modern aesthetics with cutting-edge functionality. Developed as part of a school project, the design process began in Cinema 4D, where every detail of the earbuds was meticulously crafted to reflect innovation and style.', 'Me', 'Market analysis revealed a growing demand for innovative and personalized tech products, particularly among younger, tech-savvy consumers seeking high-quality audio solutions that reflect their individuality. In this context, traditional earbuds often fail to stand out due to their generic designs and lack of uniqueness. Recognizing this gap, Kiku was developed to appeal to a modern audience that values both functionality and aesthetics. This target demographic prioritizes sleek, stylish products that integrate seamlessly into their active, on-the-go lifestyles while delivering superior sound quality. Kiku earbuds were designed to meet these expectations, blending cutting-edge design with a bold, modern identity to captivate and inspire.', 'The strategy behind Kiku was to push beyond the ordinary by creating a product that combines cutting-edge technology with a bold and artistic design. While high-quality audio devices are prevalent, few brands focus on delivering a product that doubles as a statement piece. With Kiku, the vision was to craft a brand identity that merges functionality with self-expression, emphasizing individuality and creativity. Drawing inspiration from sleek, futuristic aesthetics, the earbuds were designed to stand out with vibrant, modern hues and smooth, sculptural forms. The key message is clear: \"Hear Your World, Shape Your Style.\" Kiku invites users to experience sound in a way that’s as unique as they are.', 'The Kiku design focused on blending technology and art. A sleek logo and futuristic packaging emphasized innovation and style, using metallic tones and modern typefaces like Montserrat and Poppins. The project included 3D modeling in Cinema 4D, a responsive and interactive website, and promotional materials. Each element was designed to captivate a tech-savvy audience and showcase Kiku’s unique features.', 'One major challenge was crafting the ideal logo. We aimed for a bold, impactful design that reflected Kiku’s innovative edge, but this risked becoming overly generic. Balancing boldness with uniqueness required extensive iterations. Feedback from professors and peers was instrumental in refining the logo, ensuring it conveyed the brand’s futuristic vision while resonating with a tech-savvy audience.', 'The success of Kiku Earbuds was driven by a careful blend of modern design and innovative features, capturing the attention of a tech-savvy audience. By focusing on sleek aesthetics and cutting-edge technology, we positioned Kiku as both functional and stylish, appealing to those seeking quality and convenience in their audio experience. Our focus on user experience, from design to website interactivity, helped establish a strong connection with our target market.\r\nThroughout this project, we learned the value of teamwork, iteration, and constant feedback. Collaboration was key in refining the product, while market research ensured we addressed consumer needs. We gained deeper insights into the significance of adapting designs based on real-time input, which strengthened the final outcome. These lessons will inform our approach to future projects, reinforcing the importance of blending creativity with market awareness.', '', 5, 'kiku.png'),
(3, 'Project 3', 'Project 3', 'Project 3', 'Market Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes hereMarket Analysis goes here', 'brand strategy goes herebrand strategy goes herebrand strategy goes herebrand strategy goes herebrand strategy goes herebrand strategy goes herebrand strategy goes herebrand strategy goes herebrand strategy goes herebrand strategy goes here', 'Design strategy and process goes hereDesign strategy and process goes hereDesign strategy and process goes hereDesign strategy and process goes hereDesign strategy and process goes hereDesign strategy and process goes hereDesign strategy and process goes hereDesign strategy and process goes here', 'Challenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes hereChallenges goes here', 'conclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learningsconclusion_and_learnings', 'links_to_other_projectslinks_to_other_projectslinks_to_other_projectslinks_to_other_projectslinks_to_other_projectslinks_to_other_projectslinks_to_other_projects', 4, 'thumbnail-n-s');

--
-- Indexes for dumped tables
--

--
-- Indexes for table category
--
ALTER TABLE category
  ADD PRIMARY KEY (id);

--
-- Indexes for table contact
--
ALTER TABLE contact
  ADD PRIMARY KEY (id);

--
-- Indexes for table media
--
ALTER TABLE media
  ADD PRIMARY KEY (id);

--
-- Indexes for table projects
--
ALTER TABLE projects
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table category
--
ALTER TABLE category
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table contact
--
ALTER TABLE contact
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table media
--
ALTER TABLE media
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table projects
--
ALTER TABLE projects
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
