<?php 
if(isset($_FILES['excel'])){ 
 $connect = mysqli_connect("localhost", "root", "", "soil");  
 include ("PHPExcel/IOFactory.php");  
 $html="<table border='1'>";  

 $file_name = $_FILES['excel']['name'];
 $objPHPExcel = PHPExcel_IOFactory::load($file_name);  
 foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)   
 {  
      $highestRow = $worksheet->getHighestRow();  
      for ($row=2; $row<=$highestRow; $row++)  
      {  
           $html.="<tr>";  
           $division = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());  
           $zone = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());  
		   $date = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());  
		   $M = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());  
		   $N = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());  
		   $K = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());  
		   $P = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());  
           $sql = "INSERT INTO table_excel(division, zone, date, M, N, K, P) VALUES ('".$division."', '".$zone."', '".$date."', '".$M."', '".$N."', '".$K."', '".$P."')";  
           mysqli_query($connect, $sql);  
           $html.= '<td>'.$division.'</td>';  
           $html .= '<td>'.$zone.'</td>';  
		   $html.= '<td>'.$date.'</td>';  
           $html .= '<td>'.$M.'</td>';  
		   $html.= '<td>'.$N.'</td>';  
           $html .= '<td>'.$K.'</td>';  
		   $html.= '<td>'.$P.'</td>';  
           $html .= "</tr>";  
      }  
 }  

 $html .= '</table>';  
 echo $html;  
 echo '<br />Data Inserted';
} 
 ?>  
 
