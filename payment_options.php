<?php 
include "inc/config.inc.php";
$pageTitle="Payment Options";
$pageHeader = <<<EOT
    <title>$pageTitle - $firmName is serving the $firmMetros areas</title>
    <meta name="description" content="$firmName $pageTitle" />
    <meta name="keywords" content="$pageTitle, $firmKeywords, $firmCities" />
EOT;
$pageFooter = <<<EOT
EOT;
?>
<?php include "inc/header.inc.php"; ?>

<h3>Payment Options</h3>
<p>Retainer fees are collected at the start of representation by our law office.&nbsp; The amount of the retainer fee varies depending on the nature of the case and filing fees.&nbsp; Once a retainer is received, work begins and funds are deposited into
    a client trust account.&nbsp; We then bill all time and costs incurred against that deposit, and collect additional funds, if needed, once that deposit is used.<br /> By the 5<sup>th</sup> of each month itemized statements are generated and emailed
    to each client.&nbsp; A month after final resolution of the case a refund is issued for any unused portion of fees.&nbsp; Cash, check, and credit card payments are gladly accepted. &nbsp; In addition, for your convenience online payments can be made
    using a secured website.</p>
<table border="0">
    <tbody>
        <tr>
            <td>
                <p class="blue"><strong>Please mail your payments to:</strong></p>
            </td>
            <td style="width: 65px;">&nbsp;</td>
            <td>
                <!-- <p class="blue"><strong> &nbsp; &nbsp;Pay now online</strong></p> -->
            </td>
        </tr>
        <tr>
            <td>Law Office of Christina Fox<br />1205 Hall Johnson Road<br />Colleyville, TX 76034</td>
            <td style="width: 60px;">
                <!-- &nbsp; - or - -->
            </td>
            <!-- <td><form action="https://www.paypal.com/cgi-bin/webscr" method="post"> <input name="cmd" type="hidden" value="_s-xclick" /> <input name="hosted_button_id" type="hidden" value="33DQSU3HNR3TG" /> <input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_US/i/btn/btn_paynowCC_LG.gif" type="image" /> <img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" border="0" alt="" width="1" height="1" /> </form></td> -->
        </tr>
    </tbody>
</table>

<?php include "inc/footer.inc.php"; ?>