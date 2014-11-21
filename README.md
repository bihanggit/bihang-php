# Oklink PHP Client Library

PHP wrapper for the Oklink API

# Installation

    git clone https://github.com/oklink/oklink_php
    `</pre>

    Then, add the following to your PHP script:

    <pre>`require_once("/lib/Oklink.php");
    `</pre>

    # Usage

    Start by applying an API Key on your account

    Next, create an instance of the client using the Oklinnk::withApiKey method

    <pre>`$client = Oklink::withApiKey($key, $secret);
    `</pre>

    # Examples

    Get user information

    <pre>`$user = $client->userInfoUser();
    var_damp($user);
    