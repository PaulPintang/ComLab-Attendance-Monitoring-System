<?php
// Include the main TCPDF library (search for installation path).
include('../../admin/conn.php');
require_once('TCPDF-main/tcpdf.php');

date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y h:i: A");

    $sql = "SELECT count(id) AS total FROM students";
    $rows_results = mysqli_query($db, $sql);
    $values = mysqli_fetch_assoc($rows_results);
    $num_rows = $values['total'];



class PDF extends TCPDF 
{
  // PAGE FOOTER
   
}



// create new PDF document
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Professor');
$pdf->SetTitle('Attendance Monitoring Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData('wala', PDF_HEADER_LOGO_WIDTH, 'ATTENDANCE MONITORING SYSTEM FOR CSD LABORATORY'.' ', );
$pdf->setFooterData();

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}


// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);



// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

 $html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body style="font-size: 10px;">
    <div>
        <p style="background-color: #f8f8ff;">Course&Year: <b> BSIS-4A </b></p>
        
        <p style="font-size: 10px;">DATE: '.$date.'</p>';
          $getA = mysqli_query($db, "SELECT * FROM professor");
         while($row = mysqli_fetch_array($getA)){
             $a = $row['totalStud'];
       $html.= '  <b>Total = '.$a.' students</b>
         <p>Total Present = <span style="color: blue">'.$num_rows.'</span></p>
      
          <p>Total Absent = <span style="color: orange">'.$a - $num_rows.'</span></p>';
         }
         $html.= '<p style="color: blue">PRESENT</p>
        <table border=".1" cellspacing="3" cellpadding="4">
            <tr>
                <th align="center">Name</th>
                <th align="center">Student ID</th>
                <th align="center">Time In</th>
                <th align="center">PC Number</th>
            </tr>';
         $getStudent = mysqli_query($db, "SELECT * FROM students");
         while($row = mysqli_fetch_array($getStudent)){
            $studentName = $row['studentName'];
            $studentId = $row['studentId'];
            $timeIn = $row['timeIn'];
            $pcNum = $row['pcNum'];
            $html.= '<tr>
                <td align="center">'.$studentName.'</td>
                <td align="center">'.$studentId.'</td>
                <td align="center">'.$timeIn.'</td>
                <td align="center">PC-'.$pcNum.'</td>
            </tr>';
        } 
            $html.='
        </table>
</body>
</html>';
     $pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('Attendance.pdf', 'I');