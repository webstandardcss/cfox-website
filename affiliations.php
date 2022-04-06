<?php 
include "inc/config.inc.php";
$pageTitle="Professional Affiliations";
$pageHeader = <<<EOT
    <title>$pageTitle - $firmName is serving the $firmMetros areas</title>
    <meta name="description" content="$firmName $pageTitle" />
    <meta name="keywords" content="$pageTitle, $firmKeywords, $firmCities" />
EOT;
$pageFooter = <<<EOT
EOT;
?>
<?php include "inc/header.inc.php"; ?>

<h3>Professional Affiliations</h3>
<p>Christina Fox is an active member of the community and has the following professional affiliations:</p>
<ul>
    <li> <a href="http://www.tarrantbar.org/">Tarrant County Bar Association Member</a></li>
    <br />
    <li> <a href="http://www.txnd.uscourts.gov/">US District Court for Northern District of Texas</a></li>
    <br />
    <li> <a href="http://www.texasbar.com/">Admitted to Texas State Bar</a></li>
    <br />
    <li> <a href="http://www.txed.uscourts.gov/">US District Court Eastern District of Texas</a></li>
</ul>

<?php include "inc/footer.inc.php"; ?>