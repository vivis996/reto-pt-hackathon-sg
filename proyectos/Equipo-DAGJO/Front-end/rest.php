<?php
class Rest
{
    public static $URLBASE = "localhost:3000/";
    
    public function send($method, $path){
        $query = self::$URLBASE.$path;
        //datos a enviar
        //url contra la que atacamos
        $ch = curl_init($query);
        //a true, obtendremos una respuesta de la url, en otro caso, 
        //true si es correcto, false si no lo es
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //establecemos el verbo http que queremos utilizar para la petición
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        //enviamos el array data
        //curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
        //obtenemos la respuesta
        $response = curl_exec($ch);
        // Se cierra el recurso CURL y se liberan los recursos del sistema
        curl_close($ch);
        if(!$response) {
            return false;
        }else{
            return $response;
        }
    }

    public static function sendPost($path, $data , $separate)
    {
        $query = $path.'?'.$data;
        return self::send("POST", $query);       
    }

    public static function sendPut($path, $data, $separate)
    {
        $query = $path.'?'.$data;
        return self::send("PUT", $query);
    }

    public static function sendGet($path, $data, $separate)
    {
        $query = $path.$separate.$data;
        return self::send('GET', $query);
    }

    public static function sendDelete($path, $data, $separate)
    {
        $query = $path.'?'.$data;
        return self::send("DELETE", $query);
    }
}
?>