<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Measure
 * -
 * Measure is class of element &lt;measure&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;score-timewise&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="measure")
 * @ParentElement(name="score-timewise")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/measure-timewise/
 * @Data
 */
class Measure extends MusicXMLWriter
{
	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="token" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $number;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Implicit
	 *
	 * @Attribute(name="implicit")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $implicit;

	/**
	 * Non controlling
	 *
	 * @Attribute(name="non-controlling")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $nonControlling;

	/**
	 * Text
	 *
	 * @Attribute(name="text")
	 * @Value(type="measure-text" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $text;

	/**
	 * Width
	 *
	 * @Attribute(name="width")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $width;

}