<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Supports
 * -
 * Supports is class of element &lt;supports&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;encoding&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="supports")
 * @ParentElement(name="encoding")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/supports/
 * @Data
 */
class Supports extends MusicXMLWriter
{
	/**
	 * Element
	 *
	 * @Attribute(name="element")
	 * @Value(type="NMTOKEN" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $element;

	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="yes-no" required="true", allowed="yes,no")
	 * @var string
	 */
	public $type;

	/**
	 * Attribute
	 *
	 * @Attribute(name="attribute")
	 * @Value(type="NMTOKEN" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $attribute;

	/**
	 * Value
	 *
	 * @Attribute(name="value")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $value;

}