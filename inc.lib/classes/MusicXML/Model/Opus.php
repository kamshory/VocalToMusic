<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Opus
 * -
 * Opus is class of element &lt;opus&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;work&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="opus")
 * @ParentElement(name="work")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/opus-reference/
 * @Data
 */
class Opus extends MusicXMLWriter
{
	/**
	 * Xlink:href
	 *
	 * @Attribute(name="xlink:href")
	 * @Value(type="anyURI" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xlinkHref;

	/**
	 * Xlink:actuate
	 *
	 * @Attribute(name="xlink:actuate")
	 * @Value(type="xlink:actuate" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xlinkActuate;

	/**
	 * Xlink:role
	 *
	 * @Attribute(name="xlink:role")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xlinkRole;

	/**
	 * Xlink:show
	 *
	 * @Attribute(name="xlink:show")
	 * @Value(type="xlink:show" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xlinkShow;

	/**
	 * Xlink:title
	 *
	 * @Attribute(name="xlink:title")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xlinkTitle;

	/**
	 * Xlink:type
	 *
	 * @Attribute(name="xlink:type")
	 * @Value(type="xlink:type" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xlinkType;

    /**
     * X-Link actuate
     *
     * @Attribute(name="xlink:actuate")
     * @var string
     */
    public $xlinkAcute;
}