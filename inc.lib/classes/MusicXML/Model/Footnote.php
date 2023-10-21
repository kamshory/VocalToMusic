<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Footnote
 * -
 * Footnote is class of element &lt;footnote&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;attributes&gt;, &lt;backup&gt;, &lt;barline&gt;, &lt;direction&gt;, &lt;figure&gt;, &lt;figured-bass&gt;, &lt;forward&gt;, &lt;harmony&gt;, &lt;lyric&gt;, &lt;notations&gt;, &lt;note&gt;, &lt;part-group&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="footnote")
 * @ParentElement(name="attributes,backup,barline,direction,figure,figured-bass,forward,harmony,lyric,notations,note,part-group")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/footnote/
 * @Data
 */
class Footnote extends MusicXMLWriter
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
	 * Dir
	 *
	 * @Attribute(name="dir")
	 * @Value(type="text-direction" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $dir;

	/**
	 * Enclosure
	 *
	 * @Attribute(name="enclosure")
	 * @Value(type="enclosure-shape" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $enclosure;

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
	 * Justify
	 *
	 * @Attribute(name="justify")
	 * @Value(type="left-center-right" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $justify;

	/**
	 * Letter spacing
	 *
	 * @Attribute(name="letter-spacing")
	 * @Value(type="number-or-normal" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $letterSpacing;

	/**
	 * Line height
	 *
	 * @Attribute(name="line-height")
	 * @Value(type="number-or-normal" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $lineHeight;

	/**
	 * Line through
	 *
	 * @Attribute(name="line-through")
	 * @Value(type="number-of-lines" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $lineThrough;

	/**
	 * Overline
	 *
	 * @Attribute(name="overline")
	 * @Value(type="number-of-lines" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $overline;

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
	 * Rotation
	 *
	 * @Attribute(name="rotation")
	 * @Value(type="rotation-degrees" required="false", min="-180", max="180")
	 * @var float
	 */
	public $rotation;

	/**
	 * Underline
	 *
	 * @Attribute(name="underline")
	 * @Value(type="number-of-lines" required="false", min="-infinite", max="infinite")
	 * @var integer
	 */
	public $underline;

	/**
	 * Valign
	 *
	 * @Attribute(name="valign")
	 * @Value(type="valign" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $valign;

	/**
	 * Xml:lang
	 *
	 * @Attribute(name="xml:lang")
	 * @Value(type="xml:lang" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xmlLang;

	/**
	 * Xml:space
	 *
	 * @Attribute(name="xml:space")
	 * @Value(type="xml:space" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $xmlSpace;

    /**
     * @Attribute
     * @var string
     */
    public $staccato;

    /**
     * Text content
     *
     * @TextContent
     * @var string
     */
    public $textContent;

}