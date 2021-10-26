<?php

class Category extends Db
{
    private $id;
    private $title;
    private $description;
    private $picture;
    private $parent;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent): void
    {
        $this->parent = $parent;
    }


    /**
     * @param $dbc
     * @return mixed
     */
    static function getListCategories($dbc)
    {
        $query = ("SELECT * FROM category ORDER BY title");
        $sth = $dbc->query($query);

        //$categories = $sth->fetchAll(PDO::FETCH_CLASS, __CLASS__); //ou
        $categories = $sth->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }

    /**
     * @param $dbc
     * @param $id
     * @return mixed
     */
    public static function getCategory($dbc, $id)
    {

        $query = 'SELECT * FROM category WHERE id = :id';
        $aBindParam = array('id' => $id);
        $oSubject = $dbc->select($query, $aBindParam);

        return $oSubject;
    }

    /**
     * @param $dbc
     * @param $id
     * @param $title
     * @param $description
     * @param $picture
     * @param $parent
     * @return mixed
     */
    public function updateCategory($dbc, $id, $title, $description, $picture, $parent)
    {
        $query = 'UPDATE category SET title = :title, description = :description, picture = :picture, parent = :parent WHERE id = :id';
        $aBindParam = array('id' => $id, 'title' => $title, 'description' => $description, 'picture' => $picture, 'parent' => $parent);
        $oSubject = $dbc->update($query, $aBindParam);

        return $oSubject;
    }

    /**
     * @param $dbc
     * @param $id
     */
    public static function deleteCategory($dbc, $id)
    {
        $query = "DELETE FROM `category` WHERE `category`.`id` = $id";
        $aBindParam = array('id' => $id);
        $oSubject = $dbc->delete($query, $aBindParam);

    }

    /**
     * @param $dbc
     * @param $title
     * @param $description
     * @param $picture
     * @param $parent
     * @return mixed
     */
    public static function addCategory($dbc, $title, $description, $picture, $parent)
    {
        $query = 'INSERT INTO `category` 
                    SET 
                    title = :title,
                    description = :description,
                    picture = :picture,
                    parent = :parent';
        $aBindParam = array('title' => $title, 'description' => $description, 'picture' => $picture, 'parent' => $parent);
        $oSubject = $dbc->select($query, $aBindParam);
        return $oSubject;
    }
}