
<?php
	require_once('lib/TCPDF-master/tcpdf.php');
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	    require_once(dirname(__FILE__).'/lang/eng.php');
	    $pdf->setLanguageArray($l);
	}
	$pdf->SetFont('helvetica', '', 9);
	$pdf->AddPage();

	$html = file_get_contents('test.txt', true);
// define some HTML content with styles

	ob_end_clean();


	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');

	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	// add a page
	$pdf->AddPage();

	$html = '
	<h1>HTML TIPS & TRICKS</h1>

	<h3>REMOVE CELL PADDING</h3>
	<pre>$pdf->SetCellPadding(0);</pre>
	This is used to remove any additional vertical space inside a single cell of text.

	<h3>REMOVE TAG TOP AND BOTTOM MARGINS</h3>
	<pre>$tagvs = array(\'p\' => array(0 => array(\'h\' => 0, \'n\' => 0), 1 => array(\'h\' => 0, \'n\' => 0)));
	$pdf->setHtmlVSpace($tagvs);</pre>
	Since the CSS margin command is not yet implemented on TCPDF, you need to set the spacing of block tags using the following method.

	<h3>SET LINE HEIGHT</h3>
	<pre>$pdf->setCellHeightRatio(1.25);</pre>
	You can use the following method to fine tune the line height (the number is a percentage relative to font height).

	<h3>CHANGE THE PIXEL CONVERSION RATIO</h3>
	<pre>$pdf->setImageScale(0.47);</pre>
	This is used to adjust the conversion ratio between pixels and document units. Increase the value to get smaller objects.<br />
	Since you are using pixel unit, this method is important to set theright zoom factor.<br /><br />
	Suppose that you want to print a web page larger 1024 pixels to fill all the available page width.<br />
	An A4 page is larger 210mm equivalent to 8.268 inches, if you subtract 13mm (0.512") of margins for each side, the remaining space is 184mm (7.244 inches).<br />
	The default resolution for a PDF document is 300 DPI (dots per inch), so you have 7.244 * 300 = 2173.2 dots (this is the maximum number of points you can print at 300 DPI for the given width).<br />
	The conversion ratio is approximatively 1024 / 2173.2 = 0.47 px/dots<br />
	If the web page is larger 1280 pixels, on the same A4 page the conversion ratio to use is 1280 / 2173.2 = 0.59 pixels/dots

	';

	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');

	// reset pointer to the last page
	$pdf->lastPage();

	// ---------------------------------------------------------

	//Close and output PDF document
	$pdf->Output('example_061.pdf', 'I');

	//============================================================+
	// END OF FILE
	//============================================================+

?>