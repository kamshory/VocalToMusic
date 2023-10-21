<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Fingering
 * -
 * Fingering is class of element &lt;fingering&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;frame-note&gt;, &lt;technical&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="fingering")
 * @ParentElement(name="frame-note,technical")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/fingering/
 * @Data
 */
class Fingering extends MusicXMLWriter
{
	/**
	 * Alternate
	 *
	 * @Attribute(name="alternate")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $alternate;

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
	 * Substitution
	 *
	 * @Attribute(name="substitution")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $substitution;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;

}