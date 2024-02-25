<?php
require_once('./tcpdf/tcpdf.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get text content from the text editor
    $htmlContent = $_POST['htmlContent'];
    $textContent = strip_tags(html_entity_decode($htmlContent));
    // Create new TCPDF instance
    $pdf = new TCPDF();
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('times', '', 12);

    // Add content to PDF
    $pdf->MultiCell(0, 10, $textContent);

    // Output PDF to browser
    $pdf->Output('download.pdf', 'D');
} else {
    // Handle invalid request
    http_response_code(400);
    echo 'Invalid request';
}