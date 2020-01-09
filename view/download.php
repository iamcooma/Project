<?php 
    header("Content-disposition: attachment; filename=taejai_project_submission.docx");
    header("Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
    readfile("taejai_project_submission.docx");
?>