<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * TupletType
 * -
 * TupletType is class of element &lt;tuplet-type&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;tuplet-actual&gt;, &lt;tuplet-normal&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="tuplet-type")
 * @ParentElement(name="tuplet-actual,tuplet-normal")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/tuplet-type/
 * @Data
 */
class TupletType extends MusicXMLWriter
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
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}