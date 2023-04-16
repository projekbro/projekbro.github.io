<?php
require 'setting.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<!-- This site is optimized with the Yoast SEO plugin v20.2.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<title><?php echo $setting_web['title'] ;?></title>
	<meta name="description" content="<?php echo $setting_web['desc'] ;?>" />
	<meta name="keywords" content="<?php echo $setting_web['keywords'] ;?>" />
    <link rel="shortcut icon" href="<?php echo $setting_web['url'] ;?>assets/images/vunitra-logo.png" type="image/x-icon">
	<link rel="canonical" href="<?php echo $setting_web['url'] ;?>" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $setting_web['title'] ;?>" />
	<meta property="og:description" content="<?php echo $setting_web['desc'] ;?>" />
	<meta property="og:url" content="<?php echo $setting_web['url'] ;?>/" />
	<meta property="og:site_name" content="<?php echo $setting_web['nama'] ;?>" />
	<meta property="article:publisher" content="https://instagram.com/vunitra" />
	<meta property="article:modified_time" content="2023-01-22T18:18:45+00:00" />
	<meta property="og:image" content="<?php echo $setting_web['url'] ;?>assets/images/vunitra-logo.png" />
	<meta property="og:image:width" content="250" />
	<meta property="og:image:height" content="250" />
	<meta property="og:image:type" content="image/png" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo $setting_web['title'] ;?>" />
	<meta name="twitter:description" content="<?php echo $setting_web['desc'] ;?>" />
	<meta name="twitter:image" content="<?php echo $setting_web['url'] ;?>assets/images/vunitra-logo.png" />
	<meta name="twitter:label1" content="Estimasi waktu membaca" />
	<meta name="twitter:data1" content="15 menit" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://juraganweb.com/","url":"https://juraganweb.com/","name":"Jasa Pembuatan Website No #1 di Surabaya - Juraganweb","isPartOf":{"@id":"https://juraganweb.com/#website"},"about":{"@id":"https://juraganweb.com/#organization"},"primaryImageOfPage":{"@id":"https://juraganweb.com/#primaryimage"},"image":{"@id":"https://juraganweb.com/#primaryimage"},"thumbnailUrl":"https://juraganweb.com/wp-content/uploads/2022/06/Juraganweb-Logo-2022-Icon.png","datePublished":"2020-12-15T08:38:36+00:00","dateModified":"2023-01-22T18:18:45+00:00","description":"Jasa pembuatan Website Profil Perusahaan, Blog, Toko Online terbaik di Surabaya. Harga murah!, pengerjaan cepat, dan sangat terpercaya.","breadcrumb":{"@id":"https://juraganweb.com/#breadcrumb"},"inLanguage":"id","potentialAction":[{"@type":"ReadAction","target":["https://juraganweb.com/"]}]},{"@type":"ImageObject","inLanguage":"id","@id":"https://juraganweb.com/#primaryimage","url":"https://juraganweb.com/wp-content/uploads/2022/06/Juraganweb-Logo-2022-Icon.png","contentUrl":"https://juraganweb.com/wp-content/uploads/2022/06/Juraganweb-Logo-2022-Icon.png","width":513,"height":513,"caption":"Logo Juraganweb"},{"@type":"BreadcrumbList","@id":"https://juraganweb.com/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://juraganweb.com/#website","url":"https://juraganweb.com/","name":"Juraganweb","description":"Jasa Pembuatan Website Perusahaan &amp; Toko Online di Surabaya","publisher":{"@id":"https://juraganweb.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://juraganweb.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"id"},{"@type":"Organization","@id":"https://juraganweb.com/#organization","name":"Juraganweb","url":"https://juraganweb.com/","logo":{"@type":"ImageObject","inLanguage":"id","@id":"https://juraganweb.com/#/schema/logo/image/","url":"https://juraganweb.com/wp-content/uploads/2022/06/Juraganweb-Logo-2022-Icon.png","contentUrl":"https://juraganweb.com/wp-content/uploads/2022/06/Juraganweb-Logo-2022-Icon.png","width":513,"height":513,"caption":"Juraganweb"},"image":{"@id":"https://juraganweb.com/#/schema/logo/image/"},"sameAs":["https://facebook.com/juraganwebcom","https://www.instagram.com/juragan.web"]}]}</script>
	<meta name="google-site-verification" content="7uajYIRhz2SoxZtKoSWJ_CZWCazsDZSLGT2fXblrZY8" />
	<!-- / Yoast SEO plugin. -->




    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="canonical" href="https://marketjb.github.io/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!--GOOGLE ADSENS
    <script data-ad-client="ca-pub-89931..." async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    -->
    <!-- Sendpulse
    <script charset="UTF-8" src="//web.webpushs.com/js/push/8e8993f7411ea1f42fe928adbc177e18_1.js" async></script>
    -->
    <!--chat realtime
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="81c8c70c-1a38-4f47-8823-6507e672b1a1";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
     -->
    <!--POPUP
    <script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="9974773650d712a33e7a5f0823a9b2f971ee263f421d1d960beb81cf1a11457e"></script>
    -->    
    <!-- Global site tag (gtag.js) - Google Analytics 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MECC81VZ93"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MECC81VZ93');
</script>
 -->
 	
  <!-- Google Tag Manager
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KHJ9N8D');</script>
-->
<!-- End Google Tag Manager -->

  

  
</head>