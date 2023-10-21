<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Barre
 * -
 * Barre is class of element &lt;barre&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;frame-note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="barre")
 * @ParentElement(name="frame-note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/barre/
 * @Data
 */
class Barre extends MusicXMLWriter
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
	 * Color
	 *
	 * @Attribute(name="color")
	 * @Value(type="color" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $color;

}