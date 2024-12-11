<?php

namespace Framework_Tu_Code;
use App\Controllers\ErrorController;
use Framework_Tu_Code\Middlewares\Authorize;

class Router{
    protected $routes = [];

    /**
     * Add a new route
     * 
     * @param string $method
     * @param string $uri
     * @param string $action
     * @param string $middleware
     * 
     * @return void
     */
    public function registerRoute($method, $uri, $action, $middleware = []) {
        [$controller, $controllerMethod] = explode('@', $action);

        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod,
            'middleware' => $middleware
        ];
    }

    /**
     * Add a GET route
     * 
     * @param string $uri
     * @param string $controller
     * @param string $middleware
     * 
     * @return void
     */
    public function get($uri, $controller, $middleware = []) {
        $this->registerRoute("GET", $uri, $controller, $middleware);
    }

    /**
     * Add a POST route
     * 
     * @param string $uri
     * @param string $controller
     * @param string $middleware
     * 
     * @return void
     */
    public function post($uri, $controller, $middleware = []) {
        $this->registerRoute("POST", $uri, $controller, $middleware);
    }

    /**
     * Add a PUT route
     * 
     * @param string $uri
     * @param string $controller
     * @param string $middleware
     * 
     * @return void
     */
    public function put($uri, $controller, $middleware = []) {
        $this->registerRoute("PUT", $uri, $controller, $middleware);
    }

    /**
     * Add a DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @param string $middleware
     * 
     * @return void
     */
    public function delete($uri, $controller, $middleware = []) {
        $this->registerRoute("DELETE", $uri, $controller, $middleware);
    }

    /**
     * Route the request
     * 
     * @param string $uri
     * @param string $method
     * 
     * @return void
     */
    public function route($uri) {
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        if ($requestMethod === 'POST' && isset($_POST['_method'])) {
            // Ghi đè requestMethod thành DELETE | UPDATE vì trong form không có method DELETE | UPDATE
            $requestMethod = strtoupper($_POST['_method']);
        }

        foreach ($this->routes as $route) 
        {
            // Chia URI hiện tại thành 2 phần 1 là phần path 2 là phần id ví dụ listing/1 => ["listing", 1]
            $uriSplit = explode('/', trim($uri, '/'));

            // Chia route URI thành 2 phần giống như trên
            $routeSplit = explode('/', trim($route['uri'], '/'));
            // inspect($routeSplit); // hiện tất cả route khai báo trong file routes.php

            $match = true;

            // Kiểm tra xem số phần tử của 2 mảng $uriSplit và $routeSplit có bằng nhau k
            // Đồng thời kiểm tra xem methoad của route có bằng với requestMethod của trình duyệt k
            if 
            (
                count($uriSplit) === count($routeSplit) &&
                strtoupper($route["method"] === $requestMethod)
            ) 
            {
                $params = [];
                
                $match = true;

                for ($i=0; $i < count($uriSplit); $i++) {
                    // inspect($i);
                    // Nếu uri không match với Regular expression thì không có params
                    if ($routeSplit[$i] != $uriSplit[$i] && !preg_match('/\{(.+?)\}/', $routeSplit[$i])) {
                        $match = false;
                        break;
                    }

                    // tham số thứ 3 tức là $matches là tham số để lưu giá trị dưới dạng assoc array
                    if (preg_match('/\{(.+?)\}/', $routeSplit[$i], $matches)) {
                        // inspectAndDie($matches);
                        $params[$matches[1]] = $uriSplit[$i];
                        // inspectAndDie($params); 
                    }

                }
                if ($match) {
                    foreach ($route['middleware'] as $middleware) {
                        (new Authorize())->handle($middleware);
                    }

                    $controller = 'App\\Controllers\\' . $route['controller'];
                    $controllerMethod = $route['controllerMethod'];
    
                    $controllerInstance = new $controller();
    
                    $controllerInstance->$controllerMethod($params);
                    return;
                }
            }
        }
        ErrorController::notFound();
    }
 }
// namespace Framework_Tu_Code;
// use App\Controllers\ErrorController;
// use Framework_Tu_Code\Middlewares\Authorize;

// class Router {
//     protected $routes = [];

//     /**
//      * Add a new route
//      * 
//      * @param string $method
//      * @param string $uri
//      * @param string $action
//      * @param string $middleware
//      * 
//      * @return void
//      */
//     public function registerRoute($method, $uri, $action, $middleware = []) {
//         [$controller, $controllerMethod] = explode('@', $action);

//         $this->routes[] = [
//             'method' => $method,
//             'uri' => $uri,
//             'controller' => $controller,
//             'controllerMethod' => $controllerMethod,
//             'middleware' => $middleware
//         ];
//     }

//     /**
//      * Add a GET route
//      * 
//      * @param string $uri
//      * @param string $controller
//      * @param string $middleware
//      * 
//      * @return void
//      */
//     public function get($uri, $controller, $middleware = []) {
//         $this->registerRoute("GET", $uri, $controller, $middleware);
//     }

//     /**
//      * Add a POST route
//      * 
//      * @param string $uri
//      * @param string $controller
//      * @param string $middleware
//      * 
//      * @return void
//      */
//     public function post($uri, $controller, $middleware = []) {
//         $this->registerRoute("POST", $uri, $controller, $middleware);
//     }

//     /**
//      * Add a PUT route
//      * 
//      * @param string $uri
//      * @param string $controller
//      * @param string $middleware
//      * 
//      * @return void
//      */
//     public function put($uri, $controller, $middleware = []) {
//         $this->registerRoute("PUT", $uri, $controller, $middleware);
//     }

//     /**
//      * Add a DELETE route
//      * 
//      * @param string $uri
//      * @param string $controller
//      * @param string $middleware
//      * 
//      * @return void
//      */
//     public function delete($uri, $controller, $middleware = []) {
//         $this->registerRoute("DELETE", $uri, $controller, $middleware);
//     }

//     /**
//      * Route the request
//      * 
//      * @param string $uri
//      * 
//      * @return void
//      */
//     public function route($uri) {
//         $requestMethod = $_SERVER['REQUEST_METHOD'];

//         // Kiểm tra nếu có phương thức giả như DELETE hay PUT được gửi qua POST
//         if ($requestMethod === 'POST' && isset($_POST['_method'])) {
//             $requestMethod = strtoupper($_POST['_method']);
//         }

//         // Lặp qua tất cả các routes đã đăng ký
//         foreach ($this->routes as $route) {
//             // Chia URI hiện tại thành các phần
//             $uriSplit = explode('/', trim($uri, '/'));

//             // Chia route URI thành các phần
//             $routeSplit = explode('/', trim($route['uri'], '/'));

//             $match = true;

//             // Kiểm tra độ dài của hai mảng và so sánh phương thức HTTP
//             if (count($uriSplit) === count($routeSplit) && strtoupper($route["method"]) === $requestMethod) {
//                 $params = [];
//                 for ($i = 0; $i < count($uriSplit); $i++) {
//                     // Kiểm tra xem có phải tham số động không
//                     if ($routeSplit[$i] != $uriSplit[$i] && !preg_match('/\{(.+?)\}/', $routeSplit[$i])) {
//                         $match = false;
//                         break;
//                     }

//                     if (preg_match('/\{(.+?)\}/', $routeSplit[$i], $matches)) {
//                         $params[$matches[1]] = $uriSplit[$i];
//                     }
//                 }

//                 // Nếu route trùng khớp, tiến hành xử lý
//                 if ($match) {
//                     // Xử lý middleware (nếu có)
//                     foreach ($route['middleware'] as $middleware) {
//                         (new Authorize())->handle($middleware);
//                     }

//                     // Chạy controller và method tương ứng
//                     $controller = 'App\\Controllers\\' . $route['controller'];
//                     $controllerMethod = $route['controllerMethod'];
//                     $controllerInstance = new $controller();
//                     $controllerInstance->$controllerMethod($params);
//                     return;
//                 }
//             }
//         }

//         // Nếu không tìm thấy route, chuyển đến ErrorController
//         ErrorController::notFound();
//     }
// }
