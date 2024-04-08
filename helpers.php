<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */
function basePath($path = '') {
    return __DIR__ . "\\" . $path;
}

/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name, $data = []) {
    $viewPath = basePath("App/views/{$name}.view.php");

    if (file_exists($viewPath)) {
      extract($data);
      require $viewPath;
    } else {
      echo "View '{$name} not found!'";
    }
  
}

/**
 * Load a partials
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name = "", $data = []) {
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        extract($data);
        require $partialPath;
      } else {
        echo "Partial '{$name} not found!'";
      }
}

/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
  echo '<pre>';
  die(print_r($value));
  echo '</pre>';
}

/**
 * parse data to string
 *
 * @param string $dirty
 * @return void
 */
function sanitize($dirty)
{
  return filter_var($dirty, FILTER_SANITIZE_SPECIAL_CHARS);
}

function redirect($path)
{
  header("Location: {$path}");
  exit;
}