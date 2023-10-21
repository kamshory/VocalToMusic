<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Note
 * -
 * Note is class of element &lt;note&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;measure&gt; (partwise), &lt;part&gt; (timewise)
 * 
 * @Xml
 * @MusicXML
 * @Element(name="note")
 * @ParentElement(name="measure (partwise),part (timewise)")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/note/
 * @Data
 */
class Note extends MusicXMLWriter
{
	/**
	 * Attack
	 *
	 * @Attribute(name="attack")
	 * @Value(type="divisions" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $attack;

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
	 * Dynamics
	 *
	 * @Attribute(name="dynamics")
	 * @Value(type="non-negative-decimal" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $dynamics;

	/**
	 * End dynamics
	 *
	 * @Attribute(name="end-dynamics")
	 * @Value(type="non-negative-decimal" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $endDynamics;

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
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Pizzicato
	 *
	 * @Attribute(name="pizzicato")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $pizzicato;

	/**
	 * Print dot
	 *
	 * @Attribute(name="print-dot")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printDot;

	/**
	 * Print leger
	 *
	 * @Attribute(name="print-leger")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printLeger;

	/**
	 * Print lyric
	 *
	 * @Attribute(name="print-lyric")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printLyric;

	/**
	 * Print object
	 *
	 * @Attribute(name="print-object")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printObject;

	/**
	 * Print spacing
	 *
	 * @Attribute(name="print-spacing")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printSpacing;

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
	 * Release
	 *
	 * @Attribute(name="release")
	 * @Value(type="divisions" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $release;

	/**
	 * Time only
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

    /**
     * @Element
     * @var Rest
     */
    public $rest;

    /**
     * Pitch
     *
     * @Element
     * @var Pitch
     */
    public $pitch;

    /**
     * @Element
     * @var Duration
     */
    public $duration;

	/**
     * Tie
     * @Element
     * @var Tie
     */
    public $tie;

    /**
     * Voice
     * @Element(name="voice")
     * @var Voice
     */
    public $voice;

	/**
     * Type
     *
     * @Element(name="type")
     * @var Type
     */
    public $type;

    /**
     * @Element
     * @var Accidental
     */
    public $accidental;

    /**
	 * Notations
	 *
     * @Element
     * @var Notations[]
     */
    public $notations;

    /**
	 * Unpitched
	 *
     * @Element
     * @var Unpitched
     */
    public $unpitched;

    /**
	 * Staff
	 *
     * @Element
     * @var Staff
     */
    public $staff;

    /**
     * @Element
     * @var Chord
     */
    public $chord;

    /**
     * @Element
     * @var Beam
     */
    public $beam;

    /**
     * Lyric
     *
     * @Element
     * @var Lyric
     */
    public $lyric;

    /**
     * Grace
     *
     * @Element
     * @var Grace
     */
    public $grace;

    /**
     * Time modification
     *
     * @Element(name="time-modification")
     * @var TimeModification
     */
    public $timeModification;

    /**
     * Instrument
     *
     * @Element(name="instrument")
     * @var Instrument
     */
    public $instrument;

    /**
     * Dot
     *
     * @Element(name="dot")
     * @var Dot
     */
    public $dot;

    /**
     * Cue
     *
     * @Element(name="cue")
     * @var Cue
     */
    public $cue;

    /**
     * Stem
     *
     * @Element(name="stem")
     * @var Stem
     */
    public $stem;

    /**
     * Notehead text
     *
     * @Element(name="notehead-text")
     * @var NoteheadText
     */
    public $noteheadText;

}