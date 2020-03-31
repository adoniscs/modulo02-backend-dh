<?php
  // aplicando criptografia na string adonis com a constante PASSWORD_DEFAULT
  echo password_hash("adonis", PASSWORD_DEFAULT);

  echo "<br>";
  // aplicando criptografia na string adonis com a constante PASSWORD_BCRYPT
  echo password_hash("adonis", PASSWORD_BCRYPT);
?>