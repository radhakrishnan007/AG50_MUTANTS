sql/tbl_newsletter.sql

--
-- Database: `blog_samples`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `id` int(11) NOT NULL,
  `en_title` varchar(255) NOT NULL,
  `en_description` text NOT NULL,
  `de_title` varchar(255) NOT NULL,
  `de_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`id`, `en_title`, `en_description`, `de_title`, `de_description`) VALUES
(1, 'Example Content', 'It was popularised in the 1960s with the release of Letraset sheets containing passages, and more recently with desktop publishing software like Aldus PageMaker including versions', 'Beispiel Inhalt', 'Bekannt wurde es 1960, mit dem erscheinen von \"Letraset\", welches Passagen von enhielt, so wie Desktop Software wie ebenfalls mit.'),
(2, 'Usage Example', 'The standard chunk of used since the 1500s is reproduced below for those interested. Also reproduced in their exact original form.', 'Anwendungsbeispiel', 'Der Standardteil von, genutzt seit 1500, ist reproduziert für die, die es interessiert abgeleitet von der Englischen Version aus.');

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;