<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Extend
 * -
 * Extend is class of element &lt;extend&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;figure&gt;, &lt;lyric&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="extend")
 * @ParentElement(name="figure,lyric")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/extend/
 * @Data
 */
class Extend extends MusicXMLWriter
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
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="start-stop-continue" required="false", allowed="start,stop,continue")
	 * @var string
	 */
	public $type;

}