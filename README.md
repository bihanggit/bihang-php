Bihang PHP Client Library
=========================

PHP wrapper for the Bihang API

Installation
============

    git clone https://github.com/bihang/bihang-php
    



Then, add the following to your PHP script:
    
    require_once("/lib/Bihang.php");
    
Usage
=====

Start by applying an API Key on your account

Next, create an instance of the client using the Bihang::withApiKey method

    $client = Bihang::withApiKey($key, $secret);
    
Examples
=
 
Get user information

    $user = $client->userInfoUser();
    var_damp($user);
