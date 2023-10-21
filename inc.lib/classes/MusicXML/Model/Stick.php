<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Stick
 * -
 * Stick is class of element &lt;stick&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;percussion&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="stick")
 * @ParentElement(name="percussion")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/stick/
 * @Data
 */
class Stick extends MusicXMLWriter
{
	/**
	 * Dashed circle
	 *
	 * @Attribute(name="dashed-circle")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $dashedCircle;

	/**
	 * Parentheses
	 *
	 * @Attribute(name="parentheses")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $parentheses;

	/**
	 * Tip
	 *
	 * @Attribute(name="tip")
	 * @Value(type="tip-direction" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $tip;

	/**
	 * Stick type
	 *
	 * @Element(name="stick-type")
	 * @var StickType
	 */
	public $stickType;

	/**
	 * Stick material
	 *
	 * @Element(name="stick-material")
	 * @var StickMaterial
	 */
	public $stickMaterial;
}