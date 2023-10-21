<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Relation
 * -
 * Relation is class of element &lt;relation&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;identification&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="relation")
 * @ParentElement(name="identification")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/relation/
 * @Data
 */
class Relation extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}