<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Arrow
 * -
 * Arrow is class of element &lt;arrow&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;technical&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="arrow")
 * @ParentElement(name="technical")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/arrow/
 * @Data
 */
class Arrow extends MusicXMLWriter
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
	 * Placement
	 *
	 * @Attribute(name="placement")
	 * @Value(type="above-below" required="false", allowed="ubove,below")
	 * @var string
	 */
	public $placement;

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
	 * Smufl
	 *
	 * @Attribute(name="smufl")
	 * @Value(type="smufl-glyph-name" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $smufl;

	/**
	 * ArrowDirection
	 *
	 * @Element(name="arrow-direction")
	 * @var ArrowDirection
	 */
	public $arrowDirection;

	/**
	 * ArrowStyle
	 *
	 * @Element(name="arrow-style")
	 * @var ArrowStyle
	 */
	public $arrowStyle;

	/**
	 * Arrowhead
	 *
	 * @Element(name="arrowhead")
	 * @var Arrowhead
	 */
	public $arrowhead;

	/**
	 * Circular arrow
	 *
	 * @Element(name="circular-arrow")
	 * @var CircularArrow
	 */
	public $circularArrow;
}