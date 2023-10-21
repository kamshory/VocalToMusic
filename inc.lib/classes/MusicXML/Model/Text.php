<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Text
 * -
 * Text is class of element &lt;text&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;lyric&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="text")
 * @ParentElement(name="lyric")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/text/
 * @Data
 */
class Text extends MusicXMLWriter
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
	 * Dir
	 *
	 * @Attribute(name="dir")
	 * @Value(type="text-direction" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $dir;

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
	 * Letter spacing
	 *
	 * @Attribute(name="letter-spacing")
	 * @Value(type="number-or-normal" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $letterSpacing;

	/**
	 * Line through
	 *
	 * @Attribute(name="line-through")
	 * @Value(type="number-of-lines" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $lineThrough;

	/**
	 * Overline
	 *
	 * @Attribute(name="overline")
	 * @Value(type="number-of-lines" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $overline;

	/**
	 * Rotation
	 *
	 * @Attribute(name="rotation")
	 * @Value(type="rotation-degrees" required="false", min="-180", max="180")
	 * @var float
	 */
	public $rotation;

	/**
	 * Underline
	 *
	 * @Attribute(name="underline")
	 * @Value(type="number-of-lines" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $underline;

	/**
	 * Xml:lang
	 *
	 * @Attribute(name="xml:lang")
	 * @Value(type="xml:lang" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xmlLang;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}