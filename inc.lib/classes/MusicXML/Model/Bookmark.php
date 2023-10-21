<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Bookmark
 * -
 * Bookmark is class of element &lt;bookmark&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;credit&gt;, &lt;measure&gt; (partwise), &lt;part&gt; (timewise)
 * 
 * @Xml
 * @MusicXML
 * @Element(name="bookmark")
 * @ParentElement(name="credit,measure (partwise),part (timewise)")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/bookmark/
 * @Data
 */
class Bookmark extends MusicXMLWriter
{
	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Element
	 *
	 * @Attribute(name="element")
	 * @Value(type="NMTOKEN" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $element;

	/**
	 * Name
	 *
	 * @Attribute(name="name")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $name;

	/**
	 * Position
	 *
	 * @Attribute(name="position")
	 * @Value(type="positiveInteger" required="false", min="0", max="infinite")
	 * @var integer
	 */
	public $position;

}