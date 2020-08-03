<?php
namespace Phppot;

require_once ("./Model/NewsLetter.php");
use Phppot\DataSource;
$newsLetter = new NewsLetter();
$result = $newsLetter->getAllRecords();
?>
<html lang="<?php echo $lang; ?>">
<head>
<title>How to Enable Multi-language Support to Website using PHP</title>
<link href='./assets/css/phppot-style.css' rel='stylesheet'
    type='text/css' />
<link href='./assets/css/multi-lingual-page.css' rel='stylesheet'
    type='text/css' />
</head>
<body>
    <div class="phppot-container">
<?php require_once "./view/home.php"; ?>
</div>
	// include language configuration file based on selected language
	$lang = "en";
	if(isset($_GET['lang'])){ 
		$lang = $_GET['lang']; 
	} 
	require_once("./view/Language/lang.".$lang.".php");
...
<div class="demo-page-title"><?php echo $language["LIST_TITLE"]; ?></div>
...
<div class="no-result"><?php echo $language["NOTIFY_NO_RESULT"]; ?></div>
</body>
</html>