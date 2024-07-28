<?php
// Interface

interface Logger {
    public function execute($message);
}

class LogToDatabase implements Logger {
    public function execute($message) {
        echo "Log to Message to database: " . $message;
    }
}

class LogToFile implements Logger {
    public function execute($message) {
        echo "Log to Message to file: " . $message;
    }
}

class UserController {
    protected Logger $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function show() {
        $this->logger->execute("User created");
    }
}

$controller = new UserController(new LogToFile());
$controller->show();
?>