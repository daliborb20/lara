<?php
class Konekcija
{
    public static function uspostavi()
    {
        try {
            return  new PDO('mysql:host=127.0.0.1;dbname=task', 'sarenala_boogy', 'NebeskoSarenilo88');
        } catch (PDOException $e) {
            die("Ne moze" . "     " . $e -> getMessage());
        }
    }
}
