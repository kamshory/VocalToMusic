<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * PageMargins
 * -
 * PageMargins is class of element &lt;page-margins&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;page-layout&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="page-margins")
 * @ParentElement(name="page-layout")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/page-margins/
 * @Data
 */
class PageMargins extends MusicXMLWriter
{
	/**
	 * Type
	 *
	 * @Attribute(name="type")
	 * @Value(type="margin-type" required="false", allowed="both,even,odd")
	 * @var string
	 */
	public $type;

    /**
     * Left margin
     *
     * @Element(name="left-margin")
     * @var LeftMargin
     */
    public $leftMargin;

    /**
     * Right margin
     *
     * @Element(name="right-margin")
     * @var RightMargin
     */
    public $rightMargin;

    /**
     * Top margin
     *
     * @Element(name="top-margin")
     * @var TopMargin
     */
    public $topMargin;

    /**
     * Bottom margin
     *
     * @Element(name="bottom-margin")
     * @var BottomMargin
     */
    public $bottomMargin;

}