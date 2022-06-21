<?php

namespace Booni3\GFS\Type;

class PrintSpecification
{

    /**
     * @var int
     */
    private $TextCN23;

    /**
     * @var bool
     */
    private $MergeDocs;

    /**
     * @var bool
     */
    private $PrintDocs;

    /**
     * @var bool
     */
    private $ThermalPdf;

    /**
     * @var string
     */
    private $LabelPrinter;

    /**
     * @var string
     */
    private $DocumentPrinter;

    /**
     * @var string
     */
    private $LabelSpecType;

    /**
     * @var string
     */
    private $LabelOrientType;

    /**
     * @var string
     */
    private $LabelStock;

    /**
     * @return int
     */
    public function getTextCN23()
    {
        return $this->TextCN23;
    }

    /**
     * @param int $TextCN23
     * @return PrintSpecification
     */
    public function withTextCN23($TextCN23)
    {
        $new = clone $this;
        $new->TextCN23 = $TextCN23;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMergeDocs()
    {
        return $this->MergeDocs;
    }

    /**
     * @param bool $MergeDocs
     * @return PrintSpecification
     */
    public function withMergeDocs($MergeDocs)
    {
        $new = clone $this;
        $new->MergeDocs = $MergeDocs;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrintDocs()
    {
        return $this->PrintDocs;
    }

    /**
     * @param bool $PrintDocs
     * @return PrintSpecification
     */
    public function withPrintDocs($PrintDocs)
    {
        $new = clone $this;
        $new->PrintDocs = $PrintDocs;

        return $new;
    }

    /**
     * @return bool
     */
    public function getThermalPdf()
    {
        return $this->ThermalPdf;
    }

    /**
     * @param bool $ThermalPdf
     * @return PrintSpecification
     */
    public function withThermalPdf($ThermalPdf)
    {
        $new = clone $this;
        $new->ThermalPdf = $ThermalPdf;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelPrinter()
    {
        return $this->LabelPrinter;
    }

    /**
     * @param string $LabelPrinter
     * @return PrintSpecification
     */
    public function withLabelPrinter($LabelPrinter)
    {
        $new = clone $this;
        $new->LabelPrinter = $LabelPrinter;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentPrinter()
    {
        return $this->DocumentPrinter;
    }

    /**
     * @param string $DocumentPrinter
     * @return PrintSpecification
     */
    public function withDocumentPrinter($DocumentPrinter)
    {
        $new = clone $this;
        $new->DocumentPrinter = $DocumentPrinter;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelSpecType()
    {
        return $this->LabelSpecType;
    }

    /**
     * @param string $LabelSpecType
     * @return PrintSpecification
     */
    public function withLabelSpecType($LabelSpecType)
    {
        $new = clone $this;
        $new->LabelSpecType = $LabelSpecType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelOrientType()
    {
        return $this->LabelOrientType;
    }

    /**
     * @param string $LabelOrientType
     * @return PrintSpecification
     */
    public function withLabelOrientType($LabelOrientType)
    {
        $new = clone $this;
        $new->LabelOrientType = $LabelOrientType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelStock()
    {
        return $this->LabelStock;
    }

    /**
     * @param string $LabelStock
     * @return PrintSpecification
     */
    public function withLabelStock($LabelStock)
    {
        $new = clone $this;
        $new->LabelStock = $LabelStock;

        return $new;
    }


}

