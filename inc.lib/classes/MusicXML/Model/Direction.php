<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Direction
 * -
 * Direction is class of element &lt;direction&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;measure&gt; (partwise), &lt;part&gt; (timewise)
 * 
 * @Xml
 * @MusicXML
 * @Element(name="direction")
 * @ParentElement(name="measure (partwise),part (timewise)")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/direction/
 * @Data
 */
class Direction extends MusicXMLWriter
{
	/**
	 * Directive
	 *
	 * @Attribute(name="directive")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $directive;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Placement
	 *
	 * @Attribute(name="placement")
	 * @Value(type="above-below" required="false", allowed="ubove,below")
	 * @var string
	 */
	public $placement;

	/**
	 * System
	 *
	 * @Attribute(name="system")
	 * @Value(type="system-relation" required="false", allowed="only-top,also-top,none")
	 * @var string
	 */
	public $system;

    /**
     * Direction type
     *
     * @Element(name="direction-type")
     * @var DirectionType
     */
    public $directionType;

    /**
     * Staff
     *
     * @Element
     * @var Staff
     */
    public $staff;

    /**
     * Sound
     *
     * @Element
     * @var Sound
     */
    public $sound;
}