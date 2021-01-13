<?php
namespace App\Helpers;
class URLHelper {

    public static function getINT(string $name, ?int $default = null): ?int
    {
        if(!isset($_GET[$name])) return $default;
        if($_GET[$name] === '0') return 0;

        if(!filter_var($_GET[$name], FILTER_VALIDATE_INT)) {
            throw new \Exception("Le numéro de la page $name n'est pas un entier");
        }
        return (int)$_GET[$name];
    }

    public static function getPositiveInt(string $name, ?int $default = null) : ?int
    {
        $param = self::getINT($name, $default);
        if($param !== null && $param <= 0){
            throw new \Exception("Le numéro de page n'est pas un entier positif");
        }
        return $param;
    }

    public static function withParam(array $data, string $param, $value): string
    {
        if(is_array($value)) {
            $value = implode(',', $value);
        }
        return http_build_query(array_merge($data, [$param => $value]));
    }

    public static function withParams(array $data, array $params): string
    {
        $params = array_map(function ($v) {
            return is_array($v) ? implode(',', $v) : $v;
        }, $params);
        return http_build_query(array_merge($data, $params));
    }
}