<?php defined('SYSPATH') or die();?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta charset="utf-8">
    <title>{$seoinfo['seotitle']}-{$GLOBALS['cfg_webname']}-{$linkman}，您还没有登陆</title>
    {include "pub/varname"}
    {Common::css('user.css,base.css,extend.css')}
    {Common::js('jquery.min.js,base.js,common.js,jquery.validate.js,jquery.md5.js')}
    {if $seoinfo['keyword']}
    <meta name="keywords" content="{$seoinfo['keyword']}" />
    {/if}
    {if $seoinfo['description']}
    <meta name="description" content="{$seoinfo['description']}" />
    {/if}
    {include "pub/varname"}
    {Common::css('base.css,extend.css,user.css,confirmation.css,cars_login.css')}
    {Common::js('jquery.min.js,base.js,common.js,delayLoading.min.js,jquery.validate.js,jquery.md5.js')}
    {Common::css_plugin('customize.css','customize')}
    
    <script type="text/javascript">
    </script>
    </head>
    <body>
       {request "pub/blankheader"}

    <div class="cnfrm-wrapper">
    	<p>Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at www.paypal.com to view details of this transaction.</p>
    </div>	
 

</body> 