<?php

namespace common\models\beans;

/**
 * This is the beans class for "player".
 *
 * @category   common
 * @package    common\beans
 * @author     Govind Kumar <govindkumar131989@gmail.com>
 * @copyright  2018 All right reserved.
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1.0.0
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $image
 * @property string $jerseyNumber
 *
 */
class Player extends \yii\base\BaseObject
{
    public $id;
    public $firstName;
    public $lastName;
    public $image;
    public $jerseyNumber;

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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getJerseyNumber()
    {
        return $this->jerseyNumber;
    }

    /**
     * @param mixed $jerseyNumber
     */
    public function setJerseyNumber($jerseyNumber)
    {
        $this->jerseyNumber = $jerseyNumber;
    }
}