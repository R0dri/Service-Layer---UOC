<?php

declare(strict_types=1);

/*
 * ServiceLayerUOCLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ServiceLayerUOCLib\Models;

use stdClass;

class LoginUOCRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $companyDB;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $companyDB
     * @param string $userName
     * @param string $password
     */
    public function __construct(string $companyDB, string $userName, string $password)
    {
        $this->companyDB = $companyDB;
        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * Returns Company DB.
     */
    public function getCompanyDB(): string
    {
        return $this->companyDB;
    }

    /**
     * Sets Company DB.
     *
     * @required
     * @maps CompanyDB
     */
    public function setCompanyDB(string $companyDB): void
    {
        $this->companyDB = $companyDB;
    }

    /**
     * Returns User Name.
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * Sets User Name.
     *
     * @required
     * @maps UserName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * Returns Password.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Sets Password.
     *
     * @required
     * @maps Password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['CompanyDB'] = $this->companyDB;
        $json['UserName']  = $this->userName;
        $json['Password']  = $this->password;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
