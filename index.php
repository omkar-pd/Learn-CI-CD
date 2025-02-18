<?php

// PHPCS Issues: No strict types, missing function docblock, indentation issues, long line, unnecessary space
class TestClass {
  public function sayHello($name) {
    echo "Hello, " . $name; // No space around operators, missing docblock
  }
}

$test = new TestClass();
$test->sayHello("World");
