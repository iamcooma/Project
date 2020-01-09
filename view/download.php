<?php 
    header("Content-disposition: attachment; filename=KKD.docx");
    header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
    readfile("KKD.docx");
?>