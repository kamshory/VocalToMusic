<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Level
 * -
 * Level is class of element &lt;level&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;attributes&gt;, &lt;backup&gt;, &lt;barline&gt;, &lt;direction&gt;, &lt;figure&gt;, &lt;figured-bass&gt;, &lt;forward&gt;, &lt;harmony&gt;, &lt;lyric&gt;, &lt;notations&gt;, &lt;note&gt;, &lt;part-group&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="level")
 * @ParentElement(name="attributes,backup,barline,direction,figure,figured-bass,forward,harmony,lyric,notations,note,part-group")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/level/
 * @Data
 */
class Level extends MusicXMLWriter
{
	/**
	 * Bracket
	 *
	 * @Attribute(name="bracket")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $bracket;

	/**
	 * Parentheses
	 *
	 * @Attribute(name="parentheses")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $parentheses;

	/**
	 * Reference
	 *
	 * @Attribute(name="reference")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $reference;

	/**
	 * Size
	 *
	 * @Attribute(name="size")
	 * @Value(type="symbol-size" required="false", allowed="cue,full,grace-cue,large")
	 * @var string
	 */
	public $size;

	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="start-stop-single" required="false", allowed="start,stop,single")
	 * @var string
	 */
	public $type;

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}