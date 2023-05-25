<?php
class EnvLoader {
    public static function LoadEnv() {
        $envFile = __DIR__ . '/.env';

        if (file_exists($envFile)) {
            $envVariables = parse_ini_file($envFile);
            
            foreach ($envVariables as $key => $value) {
                putenv("$key=$value");
            }
            
            return $envVariables;
        }
        return [];
    }
}
