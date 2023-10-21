<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Tied
 * -
 * Tied is class of element &lt;tied&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;notations&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="tied")
 * @ParentElement(name="notations")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/tied/
 * @Data
 */
class Tied extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="tied-type" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Bezier offset
	 *
	 * @Attribute(name="bezier-offset")
	 * @Value(type="divisions" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $bezierOffset;

	/**
	 * Bezier offset2
	 *
	 * @Attribute(name="bezier-offset2")
	 * @Value(type="divisions" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $bezierOffset2;

	/**
	 * Bezier x
	 *
	 * @Attribute(name="bezier-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $bezierX;

	/**
	 * Bezier x2
	 *
	 * @Attribute(name="bezier-x2")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $bezierX2;

	/**
	 * Bezier y
	 *
	 * @Attribute(name="bezier-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $bezierY;

	/**
	 * Bezier y2
	 *
	 * @Attribute(name="bezier-y2")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $bezierY2;

	/**
	 * Color
	 *
	 * @Attribute(name="color")
	 * @Value(type="color" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $color;

	/**
	 * Dash length
	 *
	 * @Attribute(name="dash-length")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $dashLength;

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
	 * Line type
	 *
	 * @Attribute(name="line-type")
	 * @Value(type="line-type" required="false", allowed="dashed,dotted,solid,wavy")
	 * @var string
	 */
	public $lineType;

	/**
	 * Number
	 *
	 * @Attribute(name="number")
	 * @Value(type="number-level" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $number;

	/**
	 * Orientation
	 *
	 * @Attribute(name="orientation")
	 * @Value(type="over-under" required="false", allowed="over,under")
	 * @var string
	 */
	public $orientation;

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
	 * Space length
	 *
	 * @Attribute(name="space-length")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $spaceLength;

}