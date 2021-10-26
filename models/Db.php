<?php

class Db extends PDO
{
    public function __construct($DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
    {
        parent::__construct('mysql:host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
    }
    /**
     * @param $squery
     * @param array $array
     * @param int $fetchMode
     * @return mixed
     */
    public function select($squery, $array = array(), $fetchMode = PDO::FETCH_CLASS)
    {

        $sth = $this->prepare($squery);
        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Category');
        return $sth->fetch();
    }

    /**
     * @param $squery
     * @param array $array
     */
    public function update($squery, $array = array())
    {
        $sth = $this->prepare($squery);
        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        $sth->execute();
    }

    /**
     * @param $squery
     * @param array $array
     */
    public function delete($squery, $array = array())
    {
        $sth = $this->prepare($squery);
        foreach ($array as $key => $value):
            $sth->bindValue("$key", $value);
        endforeach;
        $sth->execute();
    }

}