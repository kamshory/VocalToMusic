<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * PartLink
 * -
 * PartLink is class of element &lt;part-link&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;score-part&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="part-link")
 * @ParentElement(name="score-part")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/part-link/
 * @Data
 */
class PartLink extends MusicXMLWriter
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
     * Instrument link
     *
     * @Element(name="instrument-link")
     * @var InstrumentLink[]
     */
    public $instrumentLink;

    /**
     * Group link
     *
     * @Element(name="group-link")
     * @var GroupLink[]
     */
    public $groupLink;

}