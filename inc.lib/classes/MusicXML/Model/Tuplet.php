<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Tuplet
 * -
 * Tuplet is class of element &lt;tuplet&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;notations&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="tuplet")
 * @ParentElement(name="notations")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/tuplet/
 * @Data
 */
class Tuplet extends MusicXMLWriter
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
	 * Bracket
	 *
	 * @Attribute(name="bracket")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $bracket;

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
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Line shape
	 *
	 * @Attribute(name="line-shape")
	 * @Value(type="line-shape" required="false", allowed="straight,curved")
	 * @var string
	 */
	public $lineShape;

	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="number-level" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $number;

	/**
	 * Placement
	 *
	 * @Attribute(name="placement")
	 * @Value(type="above-below" required="false", allowed="ubove,below")
	 * @var string
	 */
	public $placement;

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
	 * Show number
	 *
	 * @Attribute(name="show-number")
	 * @Value(type="show-tuplet" required="false", allowed="actual,both,none")
	 * @var string
	 */
	public $showNumber;

	/**
	 * Show type
	 *
	 * @Attribute(name="show-type")
	 * @Value(type="show-tuplet" required="false", allowed="actual,both,none")
	 * @var string
	 */
	public $showType;

    /**
     * Tuplet actual
     *
     * @Element
     * @var TupletActual
     */
    public $tupletActual;

    /**
     * Tuplet normal
     *
     * @Element
     * @var TupletNormal
     */
    public $tupletNormal;
}