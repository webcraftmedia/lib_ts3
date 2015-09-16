<?php
namespace LIB;
class lib_ts3 extends \LIB\lib_php{
    public static function get_class(){
        return self::class;}
    public static function php_autoload(){
        require_once dirname(__FILE__).'/lib/libraries/TeamSpeak3/TeamSpeak3.php';
        //\TeamSpeak3::autoload('abc');
        \SYSTEM\autoload::registerFunc('TeamSpeak3::autoload');
        return true;}
    public static function version(){
        return '<a href="http://addons.teamspeak.com/directory/addon/integration/TeamSpeak-3-PHP-Framework.html" target="blank">1.1.23</a>';}
}
