<?php
require_once 'models/Appearance.php';

class AppearenceDaoMysql implements AppearenceDao
{

    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function findByIp($ip)
    {
        $array = [];
        $sql = $this->pdo->prepare('SELECT * FROM appearance WHERE ip = :ip');
        $sql->bindValue(':ip', $ip);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $array[] = $data;

            return $array;
        }

        return false;
    }

    public function insert(Appearance $a)
    {
        $sql = $this->pdo->prepare('INSERT INTO appearance 
            (body, ip, ul, input, button, letter, footer)
           VALUES
            (:body, :ip, :ul, :input, :button, :letter, :footer)');
        $sql->bindValue(':body', $a->getBody());
        $sql->bindValue(':ip', $a->getIp());
        $sql->bindValue(':ul', $a->getUl());
        $sql->bindValue(':body', $a->getBody());
        $sql->bindValue(':input', $a->getInput());
        $sql->bindValue(':button', $a->getButton());
        $sql->bindValue(':letter', $a->getLetter());
        $sql->bindValue(':footer', $a->getFooter());
        $sql->execute();
        return true;
    }

    public function delete($ip)
    {
    
        $sql = $this->pdo->prepare('DELETE FROM appearance  WHERE ip = :ip');
        $sql->bindValue(':ip', $ip);
        $sql->execute();
    
        return $ip;
    }

}