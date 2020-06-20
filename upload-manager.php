
<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["pdf"]) && $_FILES["pdf"]["error"] == 0){
        $allowed = "pdf" ;
        $filename = $_FILES["pdf"]["name"];
        $filetype = $_FILES["pdf"]["type"];
        $filesize = $_FILES["pdf"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!pdf_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["pdf"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["pdf"]["error"];
    }
}


include('vendor/rmccue/requests/library/Requests.php');
Requests::register_autoloader();
$headers = array(
    'Authorization' => '47BCE655-3A88-4468-81FC-4B40937B6B57'
);
$response = Requests::get('https://api.copyleaks.com/v3/downloads/{$filename.pdf', $headers);
?>