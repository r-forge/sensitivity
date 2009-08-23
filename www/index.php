
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<! --- R-Forge Logo --- >
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<hr>

<p> If you're looking for the <strong>latest stable release</strong> of the package 'sensitivity', please check out the page on CRAN <a href="http://cran.r-project.org/web/packages/sensitivity/index.html">here</a>. </p>

<p> The <strong>project summary page</strong> you can find <a href="http://r-forge.r-project.org/projects/sensitivity/">here</a>. </p>

<p> Stay informed with the <strong>news page</strong> <a href="http://r-forge.r-project.org/news/?group_id=210">here</a>, and subscribe to the <strong>news mailing list</strong> (low traffic). <a href="https://lists.r-forge.r-project.org/cgi-bin/mailman/listinfo/sensitivity-news">[Subscribe]</a></p>

<p> Developers interested in contribute are welcome to <strong>join the project</strong>. <a href="https://r-forge.r-project.org/project/request.php?group_id=210">[Request to join]</a> </p>

<p> You may also be interested in those packages:
<ul>
<li><a href="http://cran.r-project.org/web/packages/mlegp/index.html">mlegp</a>: Maximum likelihood Gaussian process modeling for univariate and multi-dimensional outputs with diagnostic plots and sensitivity analysis. </li>
<li>CompModSA: Sensitivity Analysis for Complex Computer Models (download it from <a href="http://www.stat.unm.edu/~storlie/">this page</a>). </li>
</ul>
</p>

<p>Hello!!!</p>

</body>
</html>
