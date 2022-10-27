<?php
  
  // Plaintext password entered by the user
  $plaintext_password = "12";
  
  // The hashed password retrieved from database
  $hash = 
'$2y$10$xO8w14OfEGTGdRsHYH8ShO2iUIRpIeu4jTeR.pR1XuF16hQtECVR2';
  
  // Verify the hash against the password entered
  $verify = password_verify($plaintext_password, $hash);
  
  // Print the result depending if they match
  if ($verify) {
      echo 'Password Verified!';
  } else {
      echo 'Incorrect Password!';
  }
?>