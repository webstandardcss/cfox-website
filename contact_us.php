<?php 
include "inc/config.inc.php";
$pageTitle="Contact Us";
$pageHeader = <<<EOT
    <title>$pageTitle - $firmName is serving the $firmMetros areas</title>
    <meta name="description" content="$firmName $pageTitle" />
    <meta name="keywords" content="$pageTitle, $firmKeywords, $firmCities" />
EOT;
$pageFooter = <<<EOT
EOT;
?>
<?php include "inc/header.inc.php"; ?>
<table border="0">
    <tbody>
        <tr>
            <td style="vertical-align: top">
                <h3>Contact Us</h3>
                <p>Law Office of Christina Fox, PLLC</p>
                <hr /> Fax: (817) 719-9109
                <!-- <p><em>For a Legal Consultation </em><a href="ConsultationForm.php">(click here)</a>.</p> -->
                <p>&nbsp;</p>
		<?php include "inc/hours.inc.php"; ?>
            </td>
            <td style="width: 35px;">&nbsp;</td>
            <!-- Map -->
            <td>
                <!-- <img src="/images/LawOfficeMap250.png" mce_src="/images/LawOfficeMap250.png" alt="Office Location" width="280" height="245" align="bottom" /> -->
                <p><iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1205+Hall+Johnson+Road,+Colleyville,+TX+76034&amp;aq=0&amp;oq=55&amp;ie=UTF8&amp;hq=&amp;hnear=1205+Hall+Johnson+Road,+Colleyville,+TX+76034&amp;t=m&amp;&amp;z=14&amp;iwloc=A&amp;output=embed"
                        mce_src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1205+Hall+Johnson+Road,+Colleyville,+TX+76034&amp;aq=0&amp;oq=55&amp;ie=UTF8&amp;hq=&amp;hnear=1205+Hall+Johnson+Road,+Colleyville,+TX+76034&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe></p>
                <br /><small><a style="color:#0000FF;text-align:left" href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=1205+Hall+Johnson+Road,+Colleyville,+TX&amp;aq=0&amp;oq=1205+hall+johnson&amp;sll=37.0625,-95.677068&amp;sspn=35.957999,63.632813&amp;t=v&amp;ie=UTF8&amp;hq=&amp;hnear=1205+Hall+Johnson+Rd,+Colleyville,+Texas+76034&amp;ll=32.892805,-97.149389&amp;spn=0.074505,0.124283&amp;z=13">View Larger Map</a></small></td>
        </tr>
    </tbody>
</table>

<?php include "inc/footer.inc.php"; ?>
