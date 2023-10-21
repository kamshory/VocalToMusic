<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * CreditImage
 * -
 * CreditImage is class of element &lt;credit-image&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;credit&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="credit-image")
 * @ParentElement(name="credit")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/credit-image/
 * @Data
 */
class CreditImage extends MusicXMLWriter
{
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
	 * Halign
	 *
	 * @Attribute(name="halign")
	 * @Value(type="left-center-right" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $halign;

	/**
	 * Height
	 *
	 * @Attribute(name="height")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $height;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

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
	 * Source
	 *
	 * @Attribute(name="source")
	 * @Value(type="anyURI" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $source;

	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Valign
	 *
	 * @Attribute(name="valign")
	 * @Value(type="valign-image" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $valign;

	/**
	 * Width
	 *
	 * @Attribute(name="width")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $width;

}