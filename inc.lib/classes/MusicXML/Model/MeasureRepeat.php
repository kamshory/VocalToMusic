<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * MeasureRepeat
 * -
 * MeasureRepeat is class of element &lt;measure-repeat&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;measure-style&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="measure-repeat")
 * @ParentElement(name="measure-style")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/measure-repeat/
 * @Data
 */
class MeasureRepeat extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="start-stop" required="true", allowed="start,stop")
	 * @var string
	 */
	public $type;

	/**
	 * Slashes
	 *
	 * @Attribute(name="slashes")
	 * @Value(type="positiveInteger" required="false", min="0", max="infinite")
	 * @var integer
	 */
	public $slashes;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}