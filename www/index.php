<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<!-- MMM
<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>
MMM -->

<h1>[EN] Welcome to RcmdrPlugin.UCA project!</h1>

<p>Some extension to Rcmdr (R Commander) to teach statistics in a first university course made by R-UCA project and used at University of Cadiz (UCA).
This customization includes: test for randomness, confidence interval and test for sigma for one normal sample and predictions using active model.</p>

<p>All the customizations provides by this package will be propose to be part of the Rcmdr package. All the customization included in the Rcmdr package will be dropped from here.</p>

<p>More information in <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>r-forge project summary page</strong></a> or in <a href="http://knuth.uca.es/moodle/course/view.php?id=60&lang=en">project page</a>.</p>

<h1>[ES] ¡Bienvenido al proyecto RcmdrPlugin.UCA!</h1>

<p>Algunas extensiones a Rcmdr (R Commander) para la ense&ntilde;anza de un primer curso universitario en estad&iacute;stica hechas por el proyecto R-UCA y usadas en la Universidad de C&aacute;diz (UCA).
Estas extensiones incluyen: test de aleatoriedad, intervalo de confianza y test de hip&oacute;tesis para sigma en una poblaci&oacute;n normal y realizaci&oacute;n de predicciones usando el modelo activo./p>

<p>Todas las adaptaciones serán propuestas para su incorporación a Rcmdr. Las adaptaciones que se incorporen al paquete Rcmdr se suprimirán de este paquete.</p>

<p>M&aacute;s informaci&oacute;n en la <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>p&aacute;gina r-forge resumen del proyecto</strong></a> o en la <a href="http://knuth.uca.es/moodle/course/view.php?id=60&lang=es">p&aacute;gina del proyecto</a>.</p>

</body>
</html>
