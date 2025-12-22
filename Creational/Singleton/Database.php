<?php

namespace Creational\Singleton;

class Database
{
    private static $instance = null;

    public $connection;

    // 1️⃣ Private constructor → ممنوع تعمل new من برا
    private function __construct()
    {
        $this->connection = "Connected to database";
    }

    // 2️⃣ getInstance → يرجع نفس Object كل مرة
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    // 3️⃣ ممنوع تعمل clone → نفس object فقط
    private function __clone() {}

    // 4️⃣ ممنوع تعمل unserialize
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton.");
    }
}
