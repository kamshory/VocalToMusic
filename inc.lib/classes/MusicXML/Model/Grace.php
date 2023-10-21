<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Grace
 * -
 * Grace is class of element &lt;grace&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="grace")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/grace/
 * @Data
 */
class Grace extends MusicXMLWriter
{
	/**
	 * Make time
	 *
	 * @Attribute(name="make-time")
	 * @Value(type="divisions" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $makeTime;

	/**
	 * Slash
	 *
	 * @Attribute(name="slash")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $slash;

	/**
	 * Steal time following
	 *
	 * @Attribute(name="steal-time-following")
	 * @Value(type="percent" required="false", min="0", max="100")
	 * @var float
	 */
	public $stealTimeFollowing;

	/**
	 * Steal time previous
	 *
	 * @Attribute(name="steal-time-previous")
	 * @Value(type="percent" required="false", min="0", max="100")
	 * @var float
	 */
	public $stealTimePrevious;

    /**
     * Make time
     *
     * @Attribute(name="make-time")
     * @var string
     */
    public $nameTime;

}