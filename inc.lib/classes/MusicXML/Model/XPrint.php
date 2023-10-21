<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * XPrint
 * -
 * XPrint is class of element &lt;print&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;measure&gt; (partwise), &lt;part&gt; (timewise)
 * 
 * @Xml
 * @MusicXML
 * @Element(name="print")
 * @ParentElement(name="measure (partwise),part (timewise)")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/print/
 * @Data
 */
class XPrint extends MusicXMLWriter
{
	/**
	 * Blank page
	 *
	 * @Attribute(name="blank-page")
	 * @Value(type="positiveInteger" required="false", min="0", max="infinite")
	 * @var integer
	 */
	public $blankPage;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * New page
	 *
	 * @Attribute(name="new-page")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $newPage;

	/**
	 * New system
	 *
	 * @Attribute(name="new-system")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $newSystem;

	/**
	 * Page number
	 *
	 * @Attribute(name="page-number")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $pageNumber;

	/**
	 * Staff spacing
	 *
	 * @Attribute(name="staff-spacing")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $staffSpacing;

	/**
     * Page layout
     *
     * @Element(name="page-layout")
     * @var PageLayout
     */
    public $pageLayout;

    /**
     * System layout
     *
     * @Element(name="system-layout")
     * @var SystemLayout
     */
    public $systemLayout;

    /**
     * Staff layout
     *
     * @Element(name="staff-layout")
     * @var StaffLayout[]
     */
    public $staffLayout;

    /**
     * Measure layout
     *
     * @Element(name="measure-layout")
     * @var MeasureLayout
     */
    public $measureLayout;

    /**
     * Measure numbering
     *
     * @Element(name="measure-numbering")
     * @var MeasureNumbering
     */
    public $measureNumbering;

    /**
     * Part name display
     *
     * @Element(name="part-name-display")
     * @var PartNameDisplay
     */
    public $partNameDisplay;

    /**
     * Part abbreviation display
     *
     * @Element(name="part-abbreviation-display")
     * @var PartAbbreviationDisplay
     */
    public $partAbbreviationDisplay;
}