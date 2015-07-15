<?php 
if(!isset($_POST['submit']))
{
    echo "Error, please submit the form.";
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

// Form Validation
if(empty($name)||empty($email))
{
    echo "All fields are required.";
    exit;
}

//Get the uploaded file information
// $name_of_uploaded_file =
//     basename($_FILES['uploaded_file']['name']);
 
//get the file extension of the file
// $type_of_uploaded_file =
//     substr($name_of_uploaded_file,
//     strrpos($name_of_uploaded_file, '.') + 1);
 
//$size_of_uploaded_file =
//    $_FILES["uploaded_file"]["size"]/1024;//size in KBs

//Settings
//$max_allowed_file_size = 100; // size in KB
// $allowed_extensions = array("jpg", "jpeg", "gif", "bmp");
 
// File Validation
// if($size_of_uploaded_file > $max_allowed_file_size )
// {
//   $errors .= "\n Size of file should be less than $max_allowed_file_size";
// }
 
//------ Validate the file extension -----
// $allowed_ext = false;
// for($i=0; $i<sizeof($allowed_extensions); $i++)
// {
//   if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
//   {
//     $allowed_ext = true;
//   }
// }
 
// if(!$allowed_ext)
// {
//   $errors .= "\n The uploaded file is not supported file type. ".
//   " Only the following file types are supported: ".implode(',',$allowed_extensions);
// }

//copy the temp. uploaded file to uploads folder
// $path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
// $tmp_path = $_FILES["uploaded_file"]["tmp_name"];
 
// if(is_uploaded_file($tmp_path))
// {
//   if(!copy($tmp_path,$path_of_uploaded_file))
//   {
//     $errors .= '\n error while copying the uploaded file';
//   }
// }

// First, we need to include the pear library files for these classes.

// include_once('Mail.php');
// include_once('Mail_Mime/mime.php');
// The code below composes and sends the email

// $message = new Mail_mime();
 
// $message->setTXTBody($text);
 
// $message->addAttachment($path_of_uploaded_file);
 
// $body = $message->get();
 
// $extraheaders = array("From"=>$from, "Subject"=>$subject,"Reply-To"=>$visitor_email);
 
// $headers = $message->headers($extraheaders);
 
// $mail = Mail::factory("mail");
 
// $mail->send($to, $headers, $body);

$email_from = 'email@email.com';
$email_subject = "Helpful Hamper Submission";
$email_body = "You have received a new submission from $first_name.\n".
    "email address: $email\n";

$to = "email@email.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

// function IsInjected($str)
// {
//     $injections = array('(\n+)',
//            '(\r+)',
//            '(\t+)',
//            '(%0A+)',
//            '(%0D+)',
//            '(%08+)',
//            '(%09+)'
//            );
                
//     $inject = join('|', $injections);
//     $inject = "/$inject/i";
     
//     if(preg_match($inject,$str))
//     {
//       return true;
//     }
//     else
//     {
//       return false;
//     }
// }
 
// if(IsInjected($email))
// {
//     echo "Bad email value!";
//     exit;
// }
?>