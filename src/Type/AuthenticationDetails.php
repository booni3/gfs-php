<?php

namespace Booni3\GFS\Type;

class AuthenticationDetails
{

    /**
     * @var \Booni3\GFS\Type\VersionId
     */
    private $VersionId;

    /**
     * @var string
     */
    private $UserID;

    /**
     * @var string
     */
    private $UserPassword;

    /**
     * @return \Booni3\GFS\Type\VersionId
     */
    public function getVersionId()
    {
        return $this->VersionId;
    }

    /**
     * @param \Booni3\GFS\Type\VersionId $VersionId
     * @return AuthenticationDetails
     */
    public function withVersionId($VersionId)
    {
        $new = clone $this;
        $new->VersionId = $VersionId;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return AuthenticationDetails
     */
    public function withUserID($UserID)
    {
        $new = clone $this;
        $new->UserID = $UserID;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->UserPassword;
    }

    /**
     * @param string $UserPassword
     * @return AuthenticationDetails
     */
    public function withUserPassword($UserPassword)
    {
        $new = clone $this;
        $new->UserPassword = $UserPassword;

        return $new;
    }


}

