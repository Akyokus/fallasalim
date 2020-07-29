<?php
session_destroy();
header('Location:'.teller_url('login'));
