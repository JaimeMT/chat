<?php
// Create a Real Time Chat App with Pusher in PHP
// Shahroze Nawaz  May 27, 2019
// https://www.cloudways.com/blog/real-time-chat-app-php/

require __DIR__ . '/vendor/autoload.php';

// Change the following with your app details:

// Create your own pusher account @ https://app.pusher.com

$options = array(
    'encrypted' => true
);

$pusher = new Pusher\Pusher('zzzzzzzzzz', 'xxxxxxxxxxxx', 'cccccccccccc', array('cluster' => 'eu'));

// Check the receive message
if (isset($_POST['message']) && !empty($_POST['message'])) {
    $data = $_POST['message'];

// Return the received message
    if ($pusher->trigger('test', 'my-event', $data)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
