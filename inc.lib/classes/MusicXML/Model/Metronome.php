<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Metronome
 * -
 * Metronome is class of element &lt;metronome&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;direction-type&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="metronome")
 * @ParentElement(name="direction-type")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/metronome/
 * @Data
 */
class Metronome extends MusicXMLWriter
{
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
	 * Halign
	 *
	 * @Attribute(name="halign")
	 * @Value(type="left-center-right" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $halign;

	/**
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

	/**
	 * Justify
	 *
	 * @Attribute(name="justify")
	 * @Value(type="left-center-right" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $justify;

	/**
	 * Parentheses
	 *
	 * @Attribute(name="parentheses")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $parentheses;

	/**
	 * Print object
	 *
	 * @Attribute(name="print-object")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printObject;

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
	 * Valign
	 *
	 * @Attribute(name="valign")
	 * @Value(type="valign" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $valign;

    /**
     * Direction type
     *
     * @Element(name="direction-type")
     * @var DirectionType
     */
    public $directionType;

    /**
     * Beat unit
     *
     * @Element(name="beat-unit")
     * @var BeatUnit
     */
    public $beatUnit;

    /**
     * Beat unit dot
     *
     * @Element(name="beat-unit-dot")
     * @var BeatUnitDot[]
     */
    public $beatUnitDot;

    /**
     * Beat unit tied
     *
     * @Element(name="beat-unit-tied")
     * @var BeatUnitTied[]
     */
    public $beatUnitTied;

	/**
     * Metronome relation
     *
     * @Element(name="metronome-relation")
     * @var MetronomeRelation
     */
    public $metronomeRelation;

    /**
     * Per minute
     *
     * @Element(name="per-minute")
     * @var PerMinute
     */
    public $perMinute;

    /**
     * Metronome arrows
     *
     * @Element(name="metronome-arrows")
     * @var MetronomeArrows
     */
    public $metronomeArrows;

    /**
     * Metronome note
     *
     * @Element(name="metronome-note")
     * @var MetronomeNote[]
     */
    public $metronomeNote;

}