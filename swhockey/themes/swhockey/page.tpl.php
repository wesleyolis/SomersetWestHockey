<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>



  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>

<link rel="stylesheet" href="style2.css" type="text/css">
</head>

<body style=" background-color: #000000;">


<div align="center">


<table  width="980px" id="theme_page"  style="background: #000000 url('themes/swhockey/images/back4.jpg') no-repeat fixed;" cellspacing="0" cellpadding="0"><tr><td>
<table class="" border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
<tr><td valign="top" height="114">		

<div class="site-header">
<table  border="0" width="100%" id="table2" cellspacing="0" cellpadding="0"><tr>
<td align="left" width="20%" height="159">&nbsp;<div style="position: relative" >
	<!-- <div style="position: absolute; left:13px; top:-107px" id="logo">--><?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
	<!--</div></div>--></td>

<td width="60%" align="left" height="159">&nbsp;
<!--<div style="position: relative" >
	<div style="position: absolute; left:13px; top:-107px" id="logo">  -->


<div><p align="right">		
<?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
<?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?></p></div>
<!--</div></div>!-->

</td><td width="10%" valign="bottom" height="159"><?php print $search_box ?></td></tr>
<tr id="menu"><td colspan="3">
<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')) ?><?php } ?>
<?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')) ?><?php } ?>     
</td></tr><tr><td colspan="3"><div><?php print $header ?></div></td></tr></table></div>

</td></tr>
<tr ><td id="theme_content" valign='top'>
	
<table width="950px" border="0" cellpadding="10" cellspacing="0" id="content" style="border-width: 0px" bordercolor="#000000">
  
    <?php if ($sidebar_left) { ?><td  id="sidebar-left">
      <?php print $sidebar_left ?>
    </td><?php } ?>
    <td  valign="top">
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div id="main">
        <?php print $breadcrumb ?>
        <?php if ($title && arg(0) != 'node')  { ?>
        <h1 class="title"><?php print $title ?></h1><br>
        <?php } ?>
        <?php print $messages ?>
         <?php if ($mission) { ?><?php print $messages ?><?php } ?>
     	   <?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
        <div  <?php if (arg(0)!='node' || arg(2) !='' || arg(1)=='add') { ?>class="maincontent semi_trans"<?php } ?>>
        <?php print $help ?>
        <?php print $content; ?>
        </div>
        <?php print $feed_icons; ?>
      </div>
    </td>
    <?php if ($sidebar_right) { ?><td  id="sidebar-right">
      <?php print $sidebar_right ?>
    </td><?php } ?>  
  </tr>
</table>
</br>

		<div align="center" id="footer">
		  <?php print $footer_message ?></div>
			<?php print $closure ?>

 


<p>&nbsp;</td></tr></table></td></tr></table>
</div>
<p>&nbsp;</p><p>&nbsp;</p>


<script src="themes\swhockey\transparent.js" language="javascript">
<!--

//-->
</script>
</body>
</html>