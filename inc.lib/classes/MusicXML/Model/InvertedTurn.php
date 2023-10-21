<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * InvertedTurn
 * -
 * InvertedTurn is class of element &lt;inverted-turn&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;ornaments&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="inverted-turn")
 * @ParentElement(name="ornaments")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/inverted-turn/
 * @Data
 */
class InvertedTurn extends MusicXMLWriter
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
	 * Second beat
	 *
	 * @Attribute(name="second-beat")
	 * @Value(type="percent" required="false", min="0", max="100")
	 * @var float
	 */
	public $secondBeat;

	/**
	 * Slash
	 *
	 * @Attribute(name="slash")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $slash;

	/**
	 * Start note
	 *
	 * @Attribute(name="start-note")
	 * @Value(type="start-note" required="false", allowed="below,main,upper")
	 * @var string
	 */
	public $startNote;

	/**
	 * Trill step
	 *
	 * @Attribute(name="trill-step")
	 * @Value(type="trill-step" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $trillStep;

	/**
	 * Two note turn
	 *
	 * @Attribute(name="two-note-turn")
	 * @Value(type="two-note-turn" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $twoNoteTurn;

}