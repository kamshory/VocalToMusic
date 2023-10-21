<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Ending
 * -
 * Ending is class of element &lt;ending&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;barline&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="ending")
 * @ParentElement(name="barline")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/ending/
 * @Data
 */
class Ending extends MusicXMLWriter
{
	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="ending-number" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $number;

	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="start-stop-discontinue" required="true", allowed="start,stop,discontinue")
	 * @var string
	 */
	public $type;

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
	 * End length
	 *
	 * @Attribute(name="end-length")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $endLength;

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
	 * System
	 *
	 * @Attribute(name="system")
	 * @Value(type="system-relation" required="false", allowed="only-top,also-top,none")
	 * @var string
	 */
	public $system;

	/**
	 * Text x
	 *
	 * @Attribute(name="text-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $textX;

	/**
	 * Text y
	 *
	 * @Attribute(name="text-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $textY;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}