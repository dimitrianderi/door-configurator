<?php


require './../vendor/autoload.php';

$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetMargins(10, 10, 10, true);

$pdf->AddPage();

$pdf->SetFont('dejavusans', '', 12);

$pdf->Cell(0, 10, 'Параметры двери:', 0, 1, 'C');

$pdf->SetFillColor(220, 220, 220);
$pdf->SetFont('', 'B');
$pdf->Cell(80, 10, 'Параметр', 1, 0, 'C', 1);
$pdf->Cell(80, 10, 'Значение', 1, 1, 'C', 1);
$pdf->SetFont('', '');

$pdf->Cell(80, 10, 'Цвет пленки', 1, 0, 'L', 0);
$pdf->Cell(80, 10, $tape_color, 1, 1, 'L', 0);

$pdf->Cell(80, 10, 'Цвет покраски', 1, 0, 'L', 0);
$pdf->Cell(80, 10, $painting_color, 1, 1, 'L', 0);

$pdf->Cell(80, 10, 'Цвет ручки', 1, 0, 'L', 0);
$pdf->Cell(80, 10, $handle_color, 1, 1, 'L', 0);

$pdf->Cell(80, 10, 'Ширина двери', 1, 0, 'L', 0);
$pdf->Cell(80, 10, $width_door, 1, 1, 'L', 0);

$pdf->Cell(80, 10, 'Высота двери', 1, 0, 'L', 0);
$pdf->Cell(80, 10, $height_door, 1, 1, 'L', 0);

$pdf->Cell(80, 10, 'Расположение ручки', 1, 0, 'L', 0);
$pdf->Cell(80, 10, $opening, 1, 1, 'L', 0);

$pdf->Cell(80, 10, 'Аксессуары', 1, 0, 'L', 0);
$pdf->MultiCell(80, 10, $accessories, 1, 'L', 0);

$pdf->SetFont('', 'B');
$pdf->Cell(80, 10, 'Сумма', 1, 0, 'L', 0);
$pdf->SetFont('', '');
$pdf->Cell(80, 10, $sum . 'руб.', 1, 1, 'L', 0);

$pdf->SetFont('', 'B');
$pdf->Cell(80, 10, 'Дилерская цена', 1, 0, 'L', 0);
$pdf->SetFont('', '');
$pdf->Cell(80, 10, $sum * 1.2 . 'руб.', 1, 1, 'L', 0);

$pdfContent = $pdf->Output('form_data.pdf', 'S');

$targetFolder = __DIR__ . '/../assets/path/';

$targetFile = $targetFolder . 'door_order.pdf';

if (file_put_contents($targetFile, $pdfContent) !== false) {
    echo 'PDF-файл успешно сохранен в папку: ' . $targetFile;
} else {
    echo 'Ошибка при сохранении PDF-файла';
}
