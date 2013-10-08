<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" exclude-result-prefixes="xsl">
	<xsl:output name="exemple1.html" method="html" encoding="UTF-8"/>
	
	<!--
		Template de traitement du noeud racine
	-->
	<xsl:template match="/">
	<html>
		<head>
			<title>Liste des Hippodromes</title>
			<link rel="stylesheet" href="../../Outils/css.css" media="screen"/>
		</head>
		<body>
			<xsl:apply-templates/>
		</body>
	</html>
	</xsl:template>
	
	<xsl:template match="Hippodrome">
		<h2><xsl:value-of select="name()"/> : <xsl:value-of select="@name"/></h2>
		<code class="result">type de tab partants :  <xsl:value-of select="@type_tab_partants"/></code>
	</xsl:template>
	
	
</xsl:stylesheet>