<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Time
 * -
 * Time is class of element &lt;time&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;attributes&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="time")
 * @ParentElement(name="attributes")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/time/
 * @Data
 */
class Time extends MusicXMLWriter
{
	/**
	 * Color
	 *
	 * @Attribute(name="color")
	 * @Value(type="color" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $color;

	/**
	 * Default x
	 *
	 * @Attribute(name="default-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $defaultX;

	/**
	 * Default y
	 *
	 * @Attribute(name="default-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $defaultY;

	/**
	 * Font family
	 *
	 * @Attribute(name="font-family")
	 * @Value(type="font-family" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontFamily;

	/**
	 * Font size
	 *
	 * @Attribute(name="font-size")
	 * @Value(type="font-size" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontSize;

	/**
	 * Font style
	 *
	 * @Attribute(name="font-style")
	 * @Value(type="font-style" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontStyle;

	/**
	 * Font weight
	 *
	 * @Attribute(name="font-weight")
	 * @Value(type="font-weight" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontWeight;

	/**
	 * Halign
	 *
	 * @Attribute(name="halign")
	 * @Value(type="left-center-right" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $halign;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="staff-number" required="false", min="1", max="infinite")
	 * @var integer
	 */
	public $number;

	/**
	 * Print object
	 *
	 * @Attribute(name="print-object")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printObject;

	/**
	 * Relative x
	 *
	 * @Attribute(name="relative-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $relativeX;

	/**
	 * Relative y
	 *
	 * @Attribute(name="relative-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $relativeY;

	/**
	 * Separator
	 *
	 * @Attribute(name="separator")
	 * @Value(type="time-separator" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $separator;

	/**
	 * Symbol
	 *
	 * @Attribute(name="symbol")
	 * @Value(type="time-symbol" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $symbol;

	/**
	 * Valign
	 *
	 * @Attribute(name="valign")
	 * @Value(type="valign" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $valign;

	/**
     * Beats
     *
     * @Element(name="beats")
     * @var Beats[]
     */
    public $beats;

    /**
     * BeatType
     *
     * @Element(name="beat-type")
     * @var BeatType[]
     */
    public $beatType;

	/**
     * Interchangeable
     *
     * @Element(name="interchangeable")
     * @var Interchangeable
     */
    public $interchangeable;

    /**
     * Senza misura
     *
     * @Element(name="senza-misura ")
     * @var SenzaMisura
     */
    public $senzaMisura;

}