Oklink PHP Client Library
=========================

PHP wrapper for the Oklink API

Installation
============

    git clone https://github.com/oklink/oklink_php
    



Then, add the following to your PHP script:
    
    require_once("/lib/Oklink.php");
    
Usage
=====

Start by applying an API Key on your account

Next, create an instance of the client using the Oklinnk::withApiKey method

    $client = Oklink::withApiKey($key, $secret);
    
Examples
=
 
Get user information

    $user = $client->userInfoUser();
    var_damp($user);
