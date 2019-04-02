<?php
require '../_header.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

$uuid4 = Uuid::uuid4();
echo $uuid4->toString();



    
?>