<?php
#Aqui é onde centralizei todas as rotas, assim caso haja necessidade de alterar uma rota, basta mudar apenas aqui.
#Há métodos para cada tipo, desde as interfaces, references, controllers, routers e configs.
class Routes
{
    private static $roots = array(
        "references" => "/app/references/",
        "interfaces" => "/app/interfaces/",
        "controllers" => "/app/controllers/",
        "routers" => "/app/routers/",
        #PHP INCLUDES
        "configs" => "/app/config/",
        "libraries" => "/vendor/"
    );
    private static $references = array();
    private static $interfaces = array();
    private static $controllers = array();
    private static $routers = array();
    private static $configs = array();
    private static $libraries = array();

    public static function getModelsRoutes()
    {
        return self::$references = array(
            "login" => self::$roots["references"] . "LoginReference.php",
            "taskManager" => self::$roots['references'] . "TaskManagerReference.php",
            "accessControl" => self::$roots['references'] . "AccessControlReference.php"
        );
    }

    public static function getViewsRoutes()
    {
        return self::$interfaces = array(
            "includes" =>  self::$roots["interfaces"] . "includes/",
            "login" => self::$roots['interfaces'] . "login/",
            "home" => self::$roots['interfaces'] . "home/",
            "allTasks" => self::$roots['interfaces'] . "all-tasks",
            "accessControl" => self::$roots['interfaces'] . "access-control/"
        );
    }

    public static function getControllersRoutes()
    {
        return self::$controllers = array(
            "login" => self::$roots["controllers"] . "LoginController.php",
            "taskManager" => self::$roots["controllers"] . "TaskManagerController.php",
            "accessControl" => self::$roots["controllers"] . "AccessControlController.php",
        );
    }

    public static function getRouters()
    {
        return self::$routers = array(
            "login" => self::$roots['routers'] . "loginRouter.php",
            "home" => self::$roots['routers'] . "homeRouter.php",
            "accessControl" => self::$roots['routers'] . "accessControlRouter.php",
            "taskManager" => self::$roots['routers'] . "taskManagerRouter.php",
        );
    }

    public static function getLibrariesRoutes()
    {
        return self::$libraries = array(
            "jquery" => self::$roots['libraries'] . "jquery/jquery-3.7.0",
            "bootstrap" => self::$roots['libraries'] . "bootstrap/bootstrap-5.3.0-alpha3",
            "jquery-mask" => self::$roots['libraries'] . "jquery-mask-plugin"
        );
    }

    public static function getConfigsRoutes()
    {
        return self::$configs = array(
            "database" => self::$roots["configs"] . "database.php",
            "authenticator" => self::$roots["configs"] . "authenticator.php",
        );
    }
}
