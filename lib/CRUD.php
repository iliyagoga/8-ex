<?php
use Arhitector\Yandex\Disk;
class CRUD{
    private $client;
    private $token;
    public $disk;
    public function __construct($token){
        $this->token=$token;
        $this->disk= new Disk($token);
        $this->disk->setAccessToken($token);
    }

}
?>
