<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * MeasureNumbering
 * -
 * MeasureNumbering is class of element &lt;measure-numbering&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;print&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="measure-numbering")
 * @ParentElement(name="print")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/measure-numbering/
 * @Data
 */
class MeasureNumbering extends MusicXMLWriter
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
	 * Multiple rest always
	 *
	 * @Attribute(name="multiple-rest-always")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $multipleRestAlways;

	/**
	 * Multiple rest range
	 *
	 * @Attribute(name="multiple-rest-range")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $multipleRestRange;

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
	 * Staff
	 *
	 * @Attribute(name="staff")
	 * @Value(type="staff-number" required="false", min="1", max="infinite")
	 * @var integer
	 */
	public $staff;

	/**
	 * System
	 *
	 * @Attribute(name="system")
	 * @Value(type="system-relation-number" required="false", allowed="only-top,only-bottom,also-top,also-bottom,none")
	 * @var string
	 */
	public $system;

	/**
	 * Valign
	 *
	 * @Attribute(name="valign")
	 * @Value(type="valign" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $valign;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}