<?php 
include "inc/config.inc.php";
$pageTitle="Primary Practice Areas";
$pageHeader = <<<EOT
    <title>$pageTitle - $firmName is serving the $firmMetros areas</title>
    <meta name="description" content="$firmName $pageTitle" />
    <meta name="keywords" content="$pageTitle, $firmKeywords, $firmCities" />
EOT;
$pageFooter = <<<EOT
EOT;
?>
<?php include "inc/header.inc.php"; ?>
<h3>
	<p>Primary Practice Areas</p>
</h3>
<p class="txt_blue"><img id="PersonalInjuryWrongfulDeath" src="/images/open.png" alt="personal injury wrongful death" width="20" height="15" onclick="ToggleVisibility('PersonalInjuryWrongfulDeath', 'personal_injury_wrongful_death')" /><strong>&nbsp; &nbsp;Personal Injury/ Wrongful Death</strong></p>

<div id="personal_injury_wrongful_death"><p>If you are injured or a family member is killed because of the wrongful conduct of a person or persons, you, as the injured party or the heir of the decedent may file a wrongful death action against those responsible for the injury or the decedent's death. This area of Tort Law is governed by Texas state statute.  In general the statute defines who may sue for injury due to wrongful conduct or wrongful death and what, if any, limits may be applied to an award of damages.  If you've been recently injured or suffered the loss of a loved one in a wrongful death accident, it is critical that you seek assistance as soon as possible to investigate your case.   You need a competent attorney such as Christina Fox to help preserve your rights.</p></div>

<p class="txt_blue"><img id="FamilyLaw" src="/images/open.png" alt="family law" width="20" height="15" onclick="ToggleVisibility('FamilyLaw', 'family_law')" /><strong>&nbsp; &nbsp;Family Law</strong></p>

<div id="family_law"><p>Our purpose is to provide you with information regarding Divorce, Child Custody, Child Support, Visitation, Spousal Support, Modifications, Enforcements, Adoptions, Marital Agreements and other Family Law issues in Texas.  We consult with you to evaluate the particulars of your case and help you come to a conclusion as to how you'd like to proceed.  We understand the need to alleviate some of the stress involved in these kinds of decisions and we'll work with you to determine a proper course of action.</p></div>

<p class="txt_blue"><img id="ConsumerBankruptcy" src="/images/open.png" alt="consumer bankruptcy" width="20" height="15" onclick="ToggleVisibility('ConsumerBankruptcy', 'consumer_bankruptcy')" /><strong>&nbsp; &nbsp;Consumer Bankruptcy - Chapter 7 and Chapter 13</strong></p>

<div id="consumer_bankruptcy"><p>Millions of people have turned to filing bankruptcy to eliminate debt and stop foreclosure.  In the current economic environment in particular, bankruptcy is seen as a viable option for those overwhelmed by debt and unable to pay their bills. To discover how filing bankruptcy may benefit you, call and let us help you wade through your options and come up with a plan that will suit your financial needs.</p></div>

<p class="txt_blue"><img id="BusinessBankruptcy" src="/images/open.png" alt="business bankruptcy" width="20" height="15" onclick="ToggleVisibility('BusinessBankruptcy', 'business_bankruptcy')" /><strong>&nbsp; &nbsp;Business Bankruptcy - Chapter 11</strong></p>

<div id="business_bankruptcy"><p>Chapter 11 bankruptcy, also known as a business bankruptcy, is for corporations that have the potential to be a viable business if it were free from debt.  This bankruptcy would allow the business to restructure secured debts, reduce unsecured debts and still continue to operate.  It will help the business owner put a Plan of Reorganization in place so that the business can continue to flourish once the bankruptcy is completed.  The goal of a Chapter 11 is to propose a plan that will make a struggling business a more profitable business.</p></div>

<p class="txt_blue"><img id="CriminalDefense" src="/images/open.png" alt="criminal defense" width="20" height="15" onclick="ToggleVisibility('CriminalDefense', 'criminal_defense')" /><strong>&nbsp; &nbsp;Criminal Defense</strong></p>

<div id="criminal_defense"><p>Criminal punishments for crimes are outlined in the Texas State Penal Code. For each crime committed such as DWIs, Drug Crimes, Other Felonies and Misdemeanors, there are a variety of defenses a defendant may use to prove his innocence, argue for the case to be dismissed or have his sentence reduced. For the criminal defendant to be found guilty the prosecuting attorney must prove the defendant is guilty beyond a reasonable doubt.  If you've been accused of a crime, it is important that you get competent legal counsel, such as Christina Fox, attorney at law, as soon as possible.<br /><br /> Call or email now for your consultation:</p></div>

<?php include "inc/footer.inc.php"; ?>