<?php 
    header("Content-disposition: attachment; filename=Krukiddee.docx");
    header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
    readfile("Krukiddee.docx");
?>