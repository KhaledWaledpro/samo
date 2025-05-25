<?php
// Logout user
session_destroy();
header('Location: index.html');
exit;
