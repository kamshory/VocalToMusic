<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Beam
 * -
 * Beam is class of element &lt;beam&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="beam")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/beam/
 * @Data
 */
class Beam extends MusicXMLWriter
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
	 * Fan
	 *
	 * @Attribute(name="fan")
	 * @Value(type="fan" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fan;

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
	 * @Value(type="beam-level" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $number;

	/**
	 * Repeater
	 *
	 * @Attribute(name="repeater")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $repeater;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;

}