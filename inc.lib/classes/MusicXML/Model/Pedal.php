<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Pedal
 * -
 * Pedal is class of element &lt;pedal&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;direction-type&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="pedal")
 * @ParentElement(name="direction-type")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/pedal/
 * @Data
 */
class Pedal extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="pedal-type" required="true", allowed="start,stop,sostenuto,change,continue,discontinue,resume")
	 * @var string
	 */
	public $type;

	/**
	 * Abbreviated
	 *
	 * @Attribute(name="abbreviated")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $abbreviated;

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
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Line
	 *
	 * @Attribute(name="line")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $line;

	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="number-level" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $number;

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
	 * Sign
	 *
	 * @Attribute(name="sign")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $sign;

}