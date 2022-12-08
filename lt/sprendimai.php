<?php
    include_once '/var/www/html/includes/db_connection.php'
?>
<!DOCTYPE html>
<html itemscope lang="lt" xml:lang="lt" itemtype="http://schema.org/Blog">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Sprendimai | Telenordi</title><meta itemprop="name" content="Sprendimai"><meta content="" property="og:image"><meta itemprop="image" content=""><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /><link rel="canonical" href="sprendimai.php"><meta name="geo.region" content="LT-VL"><meta name="geo.placename" content="Vilnius"><meta name="geo.position" content="54.687156;25.279651"><meta name="ICBM" content="54.687156, 25.279651"><meta name="google" content="notranslate" /><meta name="dc.language" CONTENT="lt"><link href="../favicon.ico" type="image/x-icon" rel="icon" /><link href="../favicon.ico" type="image/x-icon" rel="shortcut icon" /><link rel="stylesheet" type="text/css" href="../css/frontend/frontend.min.css" /><link rel="stylesheet" type="text/css" href="../css/frontend/add.css" /><style type="text/css">.wysiwyg-color-009bad {color:#009bad !important;}.bg-color-009bad {background-color:#009bad !important;}.wysiwyg-color-00d8af {color:#00d8af !important;}.bg-color-00d8af {background-color:#00d8af !important;}.wysiwyg-color-7eabca {color:#7eabca !important;}.bg-color-7eabca {background-color:#7eabca !important;}.wysiwyg-color-3dc4e2 {color:#3dc4e2 !important;}.bg-color-3dc4e2 {background-color:#3dc4e2 !important;}.wysiwyg-color-dae49f {color:#dae49f !important;}.bg-color-dae49f {background-color:#dae49f !important;}.wysiwyg-color-ccdcec {color:#ccdcec !important;}.bg-color-ccdcec {background-color:#ccdcec !important;}.wysiwyg-color-d3d9ad {color:#d3d9ad !important;}.bg-color-d3d9ad {background-color:#d3d9ad !important;}.wysiwyg-color-f8f0dd {color:#f8f0dd !important;}.bg-color-f8f0dd {background-color:#f8f0dd !important;}.wysiwyg-color-efe9cf {color:#efe9cf !important;}.bg-color-efe9cf {background-color:#efe9cf !important;}.wysiwyg-color-d9d9bd {color:#d9d9bd !important;}.bg-color-d9d9bd {background-color:#d9d9bd !important;}.wysiwyg-color-f0e4cb {color:#f0e4cb !important;}.bg-color-f0e4cb {background-color:#f0e4cb !important;}.wysiwyg-color-ebd7d6 {color:#ebd7d6 !important;}.bg-color-ebd7d6 {background-color:#ebd7d6 !important;}.wysiwyg-color-cab59a {color:#cab59a !important;}.bg-color-cab59a {background-color:#cab59a !important;}.wysiwyg-color-eeded1 {color:#eeded1 !important;}.bg-color-eeded1 {background-color:#eeded1 !important;}.wysiwyg-color-fcecb8 {color:#fcecb8 !important;}.bg-color-fcecb8 {background-color:#fcecb8 !important;}.wysiwyg-color-eef1c5 {color:#eef1c5 !important;}.bg-color-eef1c5 {background-color:#eef1c5 !important;}.wysiwyg-color-f8f3df {color:#f8f3df !important;}.bg-color-f8f3df {background-color:#f8f3df !important;}.wysiwyg-color-e9c0ba {color:#e9c0ba !important;}.bg-color-e9c0ba {background-color:#e9c0ba !important;}.wysiwyg-color-f2d0ce {color:#f2d0ce !important;}.bg-color-f2d0ce {background-color:#f2d0ce !important;}.wysiwyg-color-f0c1a3 {color:#f0c1a3 !important;}.bg-color-f0c1a3 {background-color:#f0c1a3 !important;}.wysiwyg-color-bbdde7 {color:#bbdde7 !important;}.bg-color-bbdde7 {background-color:#bbdde7 !important;}.wysiwyg-color-fbe4d6 {color:#fbe4d6 !important;}.bg-color-fbe4d6 {background-color:#fbe4d6 !important;}.wysiwyg-size-9 {font-size:9px !important;}.wysiwyg-size-10 {font-size:10px !important;}.wysiwyg-size-11 {font-size:11px !important;}.wysiwyg-size-12 {font-size:12px !important;}.wysiwyg-size-13 {font-size:13px !important;}.wysiwyg-size-14 {font-size:14px !important;}.wysiwyg-size-15 {font-size:15px !important;}.wysiwyg-size-16 {font-size:16px !important;}.wysiwyg-size-17 {font-size:17px !important;}.wysiwyg-size-18 {font-size:18px !important;}.wysiwyg-size-19 {font-size:19px !important;}.wysiwyg-size-20 {font-size:20px !important;}.wysiwyg-size-21 {font-size:21px !important;}.wysiwyg-size-22 {font-size:22px !important;}.wysiwyg-size-23 {font-size:23px !important;}.wysiwyg-size-24 {font-size:24px !important;}.wysiwyg-size-25 {font-size:25px !important;}.wysiwyg-size-26 {font-size:26px !important;}.wysiwyg-size-27 {font-size:27px !important;}.wysiwyg-size-28 {font-size:28px !important;}.wysiwyg-size-29 {font-size:29px !important;}.wysiwyg-size-30 {font-size:30px !important;}.wysiwyg-size-31 {font-size:31px !important;}.wysiwyg-size-32 {font-size:32px !important;}.wysiwyg-size-33 {font-size:33px !important;}.wysiwyg-size-34 {font-size:34px !important;}.wysiwyg-size-35 {font-size:35px !important;}.wysiwyg-size-36 {font-size:36px !important;}.wysiwyg-size-37 {font-size:37px !important;}.wysiwyg-size-38 {font-size:38px !important;}.wysiwyg-size-39 {font-size:39px !important;}.wysiwyg-size-40 {font-size:40px !important;}.wysiwyg-size-41 {font-size:41px !important;}.wysiwyg-size-42 {font-size:42px !important;}.wysiwyg-size-43 {font-size:43px !important;}.wysiwyg-size-44 {font-size:44px !important;}.wysiwyg-size-45 {font-size:45px !important;}.wysiwyg-size-46 {font-size:46px !important;}.wysiwyg-size-47 {font-size:47px !important;}.wysiwyg-size-48 {font-size:48px !important;}</style>	<script type="text/javascript" src="../js/frontend/jquery-1.11.0.min.js"></script>
	<style>
    #div_demo {
        width:427px;
        height:240px;
        position: relative;
    }
	</style>
			<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-30573698-2', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>
<body class="">
    <!-- Google Tag Manager -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBQG86"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TBQG86');</script>
	<script type="text/javascript">
	            templet = "";
                page_url = "https://www.telenordi.lt/";
                is_mobile = false;
            </script><div id="total_popup_overlay"></div><div id="total_popup"><div id="total_popup_content"></div></div><div id="header"><div class="wrapper"><a href="../index.html" id="logo"></a><div id="menu_icon">Meniu</div><div id="menu_outer"><ul id="menu" class="mobile_hidden"><li class="li1"><a href="kontaktu-centro-paslaugos.html" class="l1 first dropdown">Paslaugos</a><span class="arrow a1"></span><ul class="u2"><li class="li2 back_li"><span class="back2 back">Atgal</span></li><li class="li2"><a href="kontaktu-centro-paslaugos/telemarketingas-pardavimai-telefonu.html">Pardavimai telefonu</a></li><li class="li2"><a href="kontaktu-centro-paslaugos/kontaktu-skambuciu-centras.html">Klientų aptarnavimas</a></li><li class="li2"><a href="kontaktu-centro-paslaugos/apklausos-ir-lojalumas.html">Klientų apklausos ir lojalumas</a></li></ul></li><li class="li1"><a href="sprendimai.php" class="l1 first dropdown">Sprendimai<i class="current"></i></a><span class="arrow a1"></span><ul class="u2"><li class="li2 back_li"><span class="back2 back">Atgal</span></li><li class="li2"><a href="sprendimai/ip-telefonija.html">Telefonijos sistema</a></li></ul></li><li class="li1"><a href="verslo-sritys.html" class="l1 first dropdown"><b>Verslo</b> sritys</a><span class="arrow a1"></span><ul class="u2"><li class="li2 back_li"><span class="back2 back">Atgal</span></li><li class="li2"><a href="verslo-sritys.html#elektronines-parduotuves">El. parduotuvės</a></li><li class="li2"><a href="verslo-sritys.html#rezervavimas-internetu">Rezervavimas internetu</a></li><li class="li2"><a href="verslo-sritys.html#verslo-paslaugos">Verslo paslaugos</a></li><li class="li2"><a href="verslo-sritys.html#telekomunikacijos">Telekomunikacijos</a></li><li class="li2"><a href="verslo-sritys.html#mazmenine-prekyba">Mažmeninė ir didmeninė prekyba</a></li><li class="li2"><a href="verslo-sritys.html#draudimas">Draudimas</a></li><li class="li2"><a href="verslo-sritys.html#it">IT</a></li><li class="li2"><a href="verslo-sritys.html#logistika">Logistika</a></li><li class="li2"><a href="verslo-sritys.html#finansai-paskolos">Finansai, paskolos</a></li></ul></li><li class="li1"><a href="apie-telenordi/apie-mus.html" class="l1 first dropdown">Apie TELENORDI</a><span class="arrow a1"></span><ul class="u2"><li class="li2 back_li"><span class="back2 back">Atgal</span></li><li class="li2"><a href="apie-telenordi/kontaktu-centras-2.html">Apie mus</a></li><li class="li2"><a href="apie-telenordi/karjera.html">Karjera</a></li><li class="li2"><a href="apie-telenordi/kontaktai.html">Kontaktai</a></li></ul></li><li class="li1"><a href="kontaktai.html" class="l1 first ">Kontaktai</a></li></ul></div></div></div><div id="sticker">
    <div id="sticker_links">
                <div class="sticker_link chat" data-target="#sticker_chat" data-nr="1"></div>
        <div class="sticker_link login" data-target="#sticker_login" data-nr="2"></div>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <form action="/includes/contact.php" method="POST">
            <button class="btn"><i class="fa fa-phone" onclick="href='tel: +370-xxx-xxxxx'" type="submit" name="submit"> </i></button>
        </form>
    
    </div>
    <div id="sticker_languages" class="inactive sticker_block" style="width:390px"><div class="languages_block"><a href="../index.html" class="lt" style="background-image:url(../img/languages/lt.png);">Lietuvių</a><a href="../index.html" class="en" style="background-image:url(../img/languages/en.png);">Anglų</a><a href="../index.html" class="ru" style="background-image:url(../img/languages/ru.png);">Rusų</a></div><div class="languages_block"><a href="../index.html" class="lv" style="background-image:url(../img/languages/lv.png);">Latvių</a><a href="../index.html" class="sv" style="background-image:url(../img/languages/sv.png);">Švedų</a><a href="../index.html" class="nn" style="background-image:url(../img/languages/nn.png);">Norvegų</a></div><div class="languages_block"><a href="../index.html" class="fi" style="background-image:url(../img/languages/fi.png);">Suomių</a><a href="../index.html" class="de" style="background-image:url(../img/languages/de.png);">Vokiečių</a><a href="../index.html" class="et" style="background-image:url(../img/languages/et.png);">Estų</a></div> </div><div id="sticker_login" class="sticker_block sticker_form inactive"><div><div class="login_title">Prisijunkite</div><form action="https://www.telenordi.lt/Ajax/login" id="AjaxUserLogin" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="ed4f3c3e0effa6795539d0358758bfb06134f300" id="Token182505852"/></div><div class="input text"><input name="data[User][username]" placeholder="Prisijungimo vardas" class="" type="text" id="UserUsername"/></div><div class="input password"><input name="data[User][password]" placeholder="Slaptažodis" class="" type="password" id="UserPassword"/></div><div class="submit"><input  class="btn" type="submit" value="Prisijungti"/></div><div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="466c367460f86c778da43f80eafb3edba4c2e940%3A" id="TokenFields328826787"/><input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked1832670073"/></div></form></div><script type="text/javascript">
//<![CDATA[
$(document).ready(function () {$("#AjaxUserLogin").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {makeCall("#AjaxUserLogin")}, data:$("#AjaxUserLogin").serialize(), dataType:"html", success:function (data, textStatus) {$("#sticker_login").html(data);}, type:"POST", url:"\/Ajax\/login"});
return false;});});
//]]>
</script></div><div id="sticker_chat" class="sticker_block sticker_form inactive"><div><div class="login_title">Susisiekite</div><form action="https://www.telenordi.lt/Ajax/chat" id="AjaxChatForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="ed4f3c3e0effa6795539d0358758bfb06134f300" id="Token346507480"/></div><div class="input text"><input name="data[Chat][first_name]" placeholder="Vardas" class="" type="text" id="ChatFirstName"/></div><div class="input text"><input name="data[Chat][last_name]" placeholder="Pavardė" class="" type="text" id="ChatLastName"/></div><div class="input email"><input name="data[Chat][email]" placeholder="El. paštas" class="" type="email" id="ChatEmail"/></div><div class="input tel"><input name="data[Chat][phone]" placeholder="Telefonas" class="" type="tel" id="ChatPhone"/></div><div class="input textarea"><textarea name="data[Chat][question]" placeholder="Kuo galėtume Jums būti naudingi?" class="" cols="30" rows="6" id="ChatQuestion"></textarea></div><div class="submit"><input  class="btn" onClick="ga(&#039;send&#039;,&#039;event&#039;,&#039;Kontaktu forma/burbuliukas&#039;,&#039;uzpildyta&#039;)" type="submit" value="Siųsti"/></div><div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="1291b9144982d34b40c8090db99d48d51ef685e6%3A" id="TokenFields2015333433"/><input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked1443305625"/></div></form></div><script type="text/javascript">
//<![CDATA[
$(document).ready(function () {$("#AjaxChatForm").bind("submit", function (event) {$.ajax({async:true, data:$("#AjaxChatForm").serialize(), dataType:"html", success:function (data, textStatus) {$("#sticker_chat").html(data);}, type:"POST", url:"\/Ajax\/chat"});
return false;});});
//]]>
</script></div>    
    
</div>
<div id="content"><div id="slides"><div id="slides_inner"><div style="background-image:url(../uploads/slides/20140711_84193732.jpg);" class="slide slide_1 active"><div class="wrapper"><div style="color:#fff;" class="name">Pažangūs telefonijos ir kontaktų centro techniniai sprendimai</div><div style="color:#fff;" class="txt"></div></div></div></div></div><script type="text/javascript">total_slides = 1;</script><div id="breadcrumb"><div class="wrapper"><ul><li><a href="../index.html">Titulinis</a></li><li><span>Sprendimai</span></li></ul><div class="clear"></div></div></div>

<div class="wrapper">
    <?php

    $sql = 'SELECT * FROM client_records';
    $result = mysqli_query($conn, $sql);

    $fetched = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>


    <h4 class="center gray-text">Duomenys</h4>
    <div class="container">
        <div class="row">
            <?php echo "ID" . str_repeat("&nbsp;", 7) . "IP adresas" . str_repeat("&nbsp;", 10) . "Paspaudimo data";?>
            <?php foreach($fetched as $entry){ ?>
                <div><?php echo $entry['id'] . str_repeat("&nbsp;", 5) . $entry['client_ip_address'] . str_repeat("&nbsp;", 5) . $entry['reg_date']; ?></div>
            <?php } ?>
        </div>
    </div>

</div>

<div id="footer">
    <div class="wrapper">
        <div class="four_blocks">
            <div id="masonry_item_container_outer">
                <div id="masonry_item_container">
                <div class="four_block"><div class="list_block masonry_item"><h3><a href="kontaktu-centro-paslaugos.html" class="dropdown">Paslaugos</a></h3><ul><li><a href="kontaktu-centro-paslaugos/telemarketingas-pardavimai-telefonu.html">Pardavimai telefonu</a></li><li><a href="kontaktu-centro-paslaugos/kontaktu-skambuciu-centras.html">Klientų aptarnavimas</a></li><li><a href="kontaktu-centro-paslaugos/apklausos-ir-lojalumas.html">Klientų apklausos ir lojalumas</a></li></ul></div><div class="list_block masonry_item"><h3><a href="sprendimai.php" class="dropdown">Sprendimai</a></h3><ul><li><a href="sprendimai/ip-telefonija.html">Telefonijos sistema</a></li></ul></div></div><div class="four_block"><div class="list_block masonry_item"><h3><a href="verslo-sritys.html" class="dropdown"><b>Verslo</b> sritys</a></h3><ul><li><a href="verslo-sritys.html#elektronines-parduotuves">El. parduotuvės</a></li><li><a href="verslo-sritys.html#rezervavimas-internetu">Rezervavimas internetu</a></li><li><a href="verslo-sritys.html#verslo-paslaugos">Verslo paslaugos</a></li><li><a href="verslo-sritys.html#telekomunikacijos">Telekomunikacijos</a></li><li><a href="verslo-sritys.html#mazmenine-prekyba">Mažmeninė ir didmeninė prekyba</a></li><li><a href="verslo-sritys.html#draudimas">Draudimas</a></li><li><a href="verslo-sritys.html#it">IT</a></li><li><a href="verslo-sritys.html#logistika">Logistika</a></li><li><a href="verslo-sritys.html#finansai-paskolos">Finansai, paskolos</a></li></ul></div><div class="list_block masonry_item"><h3><a href="apie-telenordi.html" class="dropdown">Apie TELENORDI</a></h3><ul><li><a href="apie-telenordi/kontaktu-centras-2.html">Apie mus</a></li><li><a href="apie-telenordi/karjera.html">Karjera</a></li><li><a href="apie-telenordi/kontaktai.html">Kontaktai</a></li></ul></div></div>            </div>
        </div>
            <div class="four_block four_block_last">
                <div class="footer_logo"></div>
                <div class="footer_contacts">
                    Urbšio g. 1, Panevėžys, LT-35169, Lietuva<br/><b>Tel.:</b> 8 &nbsp;5 &nbsp;203 &nbsp;2900<br/><b>El. p.:</b> info@telenordi.com<br/><b>Įmonės kodas:</b> 302433284<br/><b>PVM kodas:</b> LT100004950917<br/><b>A/S:</b> LT387300010155782827                </div>
                <!--
                <div class="footer_spype">footer.skype</div>
                -->
            </div>
            <div class="clear"></div>
            <div class="three_blocks">
                <div id="subscription_container"><script type="text/javascript">
//<![CDATA[
$(document).ready(function () {$("#AjaxSubscription").bind("submit", function (event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest) {makeCall("#AjaxSubscription")}, data:$("#AjaxSubscription").serialize(), dataType:"html", success:function (data, textStatus) {$("#subscription_container").html(data);}, type:"POST", url:"\/Ajax\/subscription"});
return false;});});
//]]>
</script><div class="footer_newsletter"><div class="three_name">Užsisakykite mūsų naujienlaiškį</div><form action="https://www.telenordi.lt/Ajax/subscription" id="AjaxSubscription" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="data[_Token][key]" value="ed4f3c3e0effa6795539d0358758bfb06134f300" id="Token783601634"/></div><div class="input email required"><input name="data[Subscription][email]" placeholder="El. p. adresas" maxlength="255" type="email" id="SubscriptionEmail" required="required"/></div><div class="submit"><input  class="btn" type="submit" value="Užsakyti"/></div><div style="display:none;"><input type="hidden" name="data[_Token][fields]" value="c1a201c6997aa1c56b00297ff4f123923e7bd168%3A" id="TokenFields238007330"/><input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked1140765502"/></div></form></div></div>                <div class="footer_career">
                    <div class="three_name">Telenordi – gera vieta dirbti</div>
                    <a class="btn" href="apie-telenordi/karjera.html">Prisijunk prie TELENORDI!</a>
                </div>
                <div class="footer_social">
                    <div class="three_name">Bendraukime</div>
                    <div class="social"><a href="https://lt-lt.facebook.com/kontaktu.centras" class="icon fb" target="_blank"></a><a href="https://www.linkedin.com/company/telenordi" class="icon in" target="_blank"></a><a href="https://www.youtube.com/channel/UCT8B1vgNxvRNapB4v6-1HgA/" class="icon yt" target="_blank"></a><div class="clear"></div></div>                </div>
                <div class="clear clear_mobile"></div>
            </div>
        </div>
        <div class="clear clear_mobile"></div>
        <div id="copyright">
            © 2020. Visos teisės saugomos.        </div>
    </div>
</div>
</div><div id="page_up"></div>	<script async type="text/javascript" src="../js/frontend/plugins.min.js"></script>
</body>
</html>
