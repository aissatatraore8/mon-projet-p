<?php 
$url= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$host='http://';
$hosts='https://';
if($url=='sec/'||$url=='192.168.1.53/'){
$host=$host.'sec';
$hosts=$hosts.'sd:443/';
}else{
$host=$host.'apps.sitaninfo.com:';
$hosts=$hosts.'apps.sitaninfo.com:443';

}

?>

<!DOCTYPE html>
<!-- saved from url=(0037)https://login.infomaniak.com/fr/users -->
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="fr"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<style type="text/css">[uib-typeahead-popup].dropdown-menu{display:block;}</style>
		<style type="text/css">.uib-time input{width:50px;}</style>
		<style type="text/css">
			[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .
			tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].
			tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .
			tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .
			tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .
			tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .
			tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .
			tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .
			tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .
			tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .
			tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .
			tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .
			tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .
			arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].
			popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .
			arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].
			popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > 
			.arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].
			popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .
			arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .
			arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .
			arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .
			arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .
			arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].
			popover,[uib-popover-template-popup].popover{display:block !important;}
		</style>
		
		<style type="text/css">.
			uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}
		</style>
		
		<style type="text/css">.
			uib-position-measure{display:block !important;visibility:hidden 
			!important;position:absolute !important;top:-9999px !important;left:-9999px 
			!important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px 
			!important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll
			!important;}
		</style>
		
		<style type="text/css">.
			uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.
			uib-left,.uib-right{width:100%}
		</style>
		<style type="text/css">.ng-animate.item:not(.left):not(.right)
			{-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}
		</style>
		<style type="text/css">
			@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],
			.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.
			ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}
		</style>
    
		<meta name="description" content="Infomaniak - Console d'administration">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="keywords" content="Infomaniak">
		<meta name="referrer" content="origin">
		<title>Portail SEC DIARRA</title>

       
		<!--<base href="/">--><!-- base href="<?php echo $host?>/" -->

		<!-- build:css build/dist/assets/css/main.css -->
		<link rel="stylesheet" href="portail/main-d7fb8a9117.css" charset="UTF-8">
		<!-- endbuild -->

		<!-- build:js build/dist/assets/js/vendor.js -->
		<script type="text/javascript" src="portail/vendor.js" charset="UTF-8"></script>
		<!-- endbuild -->

		<!-- build:js build/dist/assets/js/polyfill.js -->
		<script type="text/javascript" src="portail/polyfill.js" charset="UTF-8"></script>
		<!-- endbuild -->

		<script type="text/javascript" charset="utf-8" async="" src="portail/locale.js"></script></head>

		<body class="">




		<div id="wrapper" class="main-wrapper template-large">

    

    <div id="main">
        <div class="main-wrapper">
            <aside class="aside">
                <!-- uiView: --><div ui-view="" class="main-content ng-scope" style=""><header-component class="ng-scope ng-isolate-scope"><header class="header">
<div class="row">
<div class="col-xs-6">
<div class="header__logo margin-bottom-15">
<img src="portail/logo_sec1.png" alt="logo">
</div>
<span class="header__subtitle">
<!-- ngIf: $ctrl.type === 'login' -->
<!-- ngIf: $ctrl.type !== 'login' --><span ng-if="$ctrl.type !== 'login'" class="ng-scope"> </span><!-- end ngIf: $ctrl.type !== 'login' -->
</span>
</div>
<div class="col-xs-6">
<div class="dropdown--inline right">
<div class="clearfix dropdown" uib-dropdown="">

</div>
</div>
</div>
</div>
</header>
</header-component>
<section class="section section--center ng-scope">
<div class="full-width">
<!-- ngRepeat: user in config.list --><div class="ng-scope">
<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/logo_archiva.png" alt="Système d'archivage électronique" src="portail/logo_archiva.png"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>


<a href="http://sec:8080/archiva%2Dsae/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">ARCHIVA-SAE</span>
<span class="block-user__login ng-binding">L'archive vivant de vos documents, textes ou images</span>
</div>
</a>

</div>

<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/favicon.ico" alt="Gestion des temps passés et activités" src="portail/favicon.ico"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="http://192.168.1.53:90/gtp" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">FLEX RH GTA</span>
<span class="block-user__login ng-binding">Solution flexible et évolutive de gestion du temps et activités</span>
</div>
</a>

</div>

<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/logo_gtp.jpg" alt="Gestion des temps passés" src="portail/logo_gtp.jpg"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="<?php echo $host?>:8081/Gtp/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">GTP</span>
<span class="block-user__login ng-binding">Solution flexible de et évolutive de gestion du temps</span>
</div>
</a>

</div>
<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/larissa.png" alt="Gestion des dossiers d'appels d'offres" src="portail/larissa.png"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="<?php echo $host?>/GesDao/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">GesDAO</span>
<span class="block-user__login ng-binding">Solution simple de gestion et de suivi des soumissions</span>
</div>
</a>

</div>
<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/logo_glpi.png" alt="G L P I" src="portail/logo_glpi.png"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="http://backup/glpi/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">GLPI</span>
<span class="block-user__login ng-binding">Solution simple pour la supervision</span>
</div>
</a>

</div>
<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/logo_gtp.jpg" alt="sarali" src="portail/logo_sarali.png"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="http://cloud.sitaninfo.com:8090/sarali/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">SARALI</span>
<span class="block-user__login ng-binding">Solution simple de gestion de la paye</span>
</div>
</a>

</div>
<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/webstock.png" alt="Suivi et gestion des stocks" src="portail/webstock.png"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="<?php echo $host?>/wsm/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">WebStock</span>
<span class="block-user__login ng-binding">Solution de suivi et gestion des stocks</span>
</div>
</a>


</div>
</div><!-- end ngRepeat: user in config.list -->
<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/logo_emeeting.png" alt="G L P I" src="portail/logo_emeeting.png"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="http://cloud.sitaninfo.com:9586/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">E-MEETING</span>
<span class="block-user__login ng-binding">Solution simple pour les reunions</span>
</div>
</a>

</div>


<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="/assets/images/logo_emeeting.png" alt="AN" src=""><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="http://192.168.1.53/annuaire/" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">ANNUAIRE SEC</span>
<span class="block-user__login ng-binding">Annuaire des collaborateurs</span>
</div>
</a>

</div>

</div>

<div class="block-user">
<div class="block-user__avatar link">
<div class="block-user__circle">
<!-- ngIf: !user.avatar --><img ng-if="!user.avatar" class="full-width ng-scope" ng-src="https://play-lh.googleusercontent.com/6BO2T7sr8gcgrNnboY4fjbLJney-nkP4GXbeFzPrs8qTCeZIYHjD3htkg_hk3QVbuA" alt="SYSCOHADA to DGI" src="https://play-lh.googleusercontent.com/6BO2T7sr8gcgrNnboY4fjbLJney-nkP4GXbeFzPrs8qTCeZIYHjD3htkg_hk3QVbuA"><!-- end ngIf: !user.avatar -->
<!-- ngIf: user.avatar -->
</div>
</div>
<a href="https://syscohada-to-dgi.vercel.app" target="_blank">
<div class="block-user__display link">
<span class="block-user__name ng-binding">SYSCOHADA to DGI</span>
<span class="block-user__login ng-binding">Outil de conversion SYSCOHADA vers DGI</span>
</div>
</a>

</div>

</section>
<div>
	<footer-component class="ng-scope ng-isolate-scope">
		<footer class="footer tablet-desktop-only">

		</footer>
	</footer-component></div>
</div></aside>
            <main class="main-view" style="background-image:url(./portail/img.jpg)">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1>Je ne perds jamais, soit je gagne, soit j’apprends.</h1>

                                        <p class="medium">Nelson Mandela</p>
                    
                                    </div>
            </main>
        </div>
    </div>

</div>





    






</body></html>