<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Bend
 * -
 * Bend is class of element &lt;bend&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;technical&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="bend")
 * @ParentElement(name="technical")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/bend/
 * @Data
 */
class Bend extends MusicXMLWriter
{
	/**
	 * Accelerate
	 *
	 * @Attribute(name="accelerate")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $accelerate;

	/**
	 * Beats
	 *
	 * @Attribute(name="beats")
	 * @Value(type="trill-beats" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $beats;

	/**
	 * Color
	 *
	 * @Attribute(name="color")
	 * @Value(type="color" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $color;

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
	 * First beat
	 *
	 * @Attribute(name="first-beat")
	 * @Value(type="percent" required="false", min="0", max="100")
	 * @var float
	 */
	public $firstBeat;

	/**
	 * Font family
	 *
	 * @Attribute(name="font-family")
	 * @Value(type="font-family" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontFamily;

	/**
	 * Font size
	 *
	 * @Attribute(name="font-size")
	 * @Value(type="font-size" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontSize;

	/**
	 * Font style
	 *
	 * @Attribute(name="font-style")
	 * @Value(type="font-style" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontStyle;

	/**
	 * Font weight
	 *
	 * @Attribute(name="font-weight")
	 * @Value(type="font-weight" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontWeight;

	/**
	 * Last beat
	 *
	 * @Attribute(name="last-beat")
	 * @Value(type="percent" required="false", min="0", max="100")
	 * @var float
	 */
	public $lastBeat;

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
	 * Shape
	 *
	 * @Attribute(name="shape")
	 * @Value(type="bend-shape" required="false", allowed="angled,curved")
	 * @var string
	 */
	public $shape;

	/**
	 * Bend alter
	 *
	 * @Element(name="bend-alter")
	 * @var BendAlter
	 */
	public $bendAlter;

	/**
	 * Pre bend
	 *
	 * @Element(name="pre-bend")
	 * @var PreBend[]
	 */
	public $preBend;

	/**
	 * Release
	 *
	 * @Element(name="release")
	 * @var Release[]
	 */
	public $release;

	/**
	 * With bar
	 *
	 * @Element(name="with-bar")
	 * @var WithBar
	 */
	public $withBar;
}