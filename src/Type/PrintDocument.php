<?php

namespace Booni3\GFS\Type;

class PrintDocument
{

    /**
     * @var int
     */
    private $SequenceID;

    /**
     * @var string
     */
    private $Image;

    /**
     * @var bool
     */
    private $Printed;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var int
     */
    private $NumberOfCopies;

    /**
     * @var string
     */
    private $DocumentType;

    /**
     * @return int
     */
    public function getSequenceID()
    {
        return $this->SequenceID;
    }

    /**
     * @param int $SequenceID
     * @return PrintDocument
     */
    public function withSequenceID($SequenceID)
    {
        $new = clone $this;
        $new->SequenceID = $SequenceID;

        return $new;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param string $Image
     * @return PrintDocument
     */
    public function withImage($Image)
    {
        $new = clone $this;
        $new->Image = $Image;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrinted()
    {
        return $this->Printed;
    }

    /**
     * @param bool $Printed
     * @return PrintDocument
     */
    public function withPrinted($Printed)
    {
        $new = clone $this;
        $new->Printed = $Printed;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return PrintDocument
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfCopies()
    {
        return $this->NumberOfCopies;
    }

    /**
     * @param int $NumberOfCopies
     * @return PrintDocument
     */
    public function withNumberOfCopies($NumberOfCopies)
    {
        $new = clone $this;
        $new->NumberOfCopies = $NumberOfCopies;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }

    /**
     * @param string $DocumentType
     * @return PrintDocument
     */
    public function withDocumentType($DocumentType)
    {
        $new = clone $this;
        $new->DocumentType = $DocumentType;

        return $new;
    }


}

