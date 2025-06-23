<?php 

/**
* Interface: Interfaces define a contract that implementing classes must fulfill.
*/

interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: $message\n";
    }
}

$logger = new FileLogger();
$logger->log("Hello"); // Output: Logging to file: Hello
