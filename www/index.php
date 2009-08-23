
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

<!-- <?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){ -->
<!-- $contents = ''; -->
<!-- while (!feof($handle)) { -->
<!-- 	$contents .= fread($handle, 8192); -->
<!-- } -->
<!-- fclose($handle); -->
<!-- echo $contents; } ?> -->

<!-- end of project description -->

<h1>Sensitivity project</h1>

<p><em>A collection of functions for factor screening and global sensitivity analysis of model output.</em></p>

<hr>


<h2>Welcome to sensitivity project!</h2>

<!-- <p> The <strong>project summary page</strong> you can find <a href="http://r-forge.r-project.org/projects/sensitivity/">here</a>. </p> -->

<p>On this website, you'll find:</p>
<ul>
<li>the news archives</li>
<li>a mailing list to stay informed of the latest evolutions (very low
traffic)</li>
<li>the latest sources of the package, and daily compiled binary packages</li>
</ul>

<p>
<center><strong><a href="http://r-forge.r-project.org/projects/sensitivity/">&rarr; ENTER IN SENSITIVITY PROJECT</a></strong></center>
</p>

<p>Otherwise, if you're looking for the latest stable release of the package,
you'd better check
out <a href="http://cran.r-project.org/web/packages/sensitivity/index.html">"sensitivity"
on CRAN</a>. </p>

<h2>Join the project</h2>

<p>Developers of new sensitivity analysis functions are welcome to
join the project. If you are interested, feel free to contact the
project administrators.</p>

<h2>The sensitivity package has been integrated in several simulation platforms</h2>

<p>In the sensitivity package, design generation and analysis
functions are decoupled from the simulation model. As a consequence,
the package has been integrated in several simulation plateforms:</p>
<ul>
<li><a href="http://promethee.irsn.org/">Promethee</a> (IRSN):
Promethee is basically a flexible and portable distributed computing
engine designed for “real world” parametric calculation.</li>
<li><a href="http://www.openturns.org">OpenTURNS</a>
(EDF/EADS/Phimeca): OpenTURNS is an Open source initiative to Treat
Uncertainties, Risks’N Statistics in a structured industrial
approach.</li>
<li><a href="http://w3.avignon.inra.fr/mexico/index.php/Accueil">MEXICO</a>
(INRA Avignon): Méthodes pour l'EXploration Informatique des modèles
COmplexes.</li>
<li><a href="http://vle.univ-littoral.fr">VLE</a> (Université du Littoral
Côte d'Opale): The Virtual Laboratory Environment VLE is a software
and an API for complex systems multi-modeling and simulation.</li>
</ul>

<p>See in particular <a href="http://vle.univ-littoral.fr/fr/index.php/Mexico">an example of interaction between sensitivity, MEXICO, and VLE</a> (in french).</p>

<h2>Other packages for sensitivity analysis</h2>

<p>Here are other R packages for doing sensitivity analysis (available
on CRAN or not):</p>
<ul>
<li><a href="http://cran.r-project.org/web/packages/mlegp/index.html">mlegp</a>:
Maximum likelihood Gaussian process modeling for univariate and
multi-dimensional outputs with diagnostic plots and sensitivity
analysis. </li>
<li><a href="http://www.stat.unm.edu/%7Estorlie/">CompModSA</a>: Sensitivity Analysis for Complex Computer Models. </li>
</ul>

<hr>

<p>Last update: 23 aug 2009</p>

</body>

</html>
