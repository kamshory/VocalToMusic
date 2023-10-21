<?php

namespace MusicXML\Model;

use MusicXML\MusicXMLWriter;

/**
 * Dynamics
 * -
 * Dynamics is class of element &lt;dynamics&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;direction-type&gt;, &lt;notations&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="dynamics")
 * @ParentElement(name="direction-type,notations")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/dynamics/
 * @Data
 */
class Dynamics extends MusicXMLWriter
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
	 * Id
	 *
	 * @Attribute(name="id")
	 * @Value(type="ID" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $id;

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
         * P
         *
         * @Element(name="p")
         * @var P[]
         */
        public $p;

        /**
         * Pp
         *
         * @Element(name="pp")
         * @var Pp[]
         */
        public $pp;

        /**
         * Ppp
         *
         * @Element(name="ppp")
         * @var Ppp[]
         */
        public $ppp;

        /**
         * Pppp
         *
         * @Element(name="pppp")
         * @var Pppp[]
         */
        public $pppp;

        /**
         * Ppppp
         *
         * @Element(name="ppppp")
         * @var Ppppp[]
         */
        public $ppppp;

        /**
         * Pppppp
         *
         * @Element(name="pppppp")
         * @var Pppppp[]
         */
        public $pppppp;

        /**
         * F
         *
         * @Element(name="f")
         * @var F[]
         */
        public $f;

        /**
         * Ff
         *
         * @Element(name="ff")
         * @var Ff[]
         */
        public $ff;

        /**
         * Fff
         *
         * @Element(name="fff")
         * @var Fff[]
         */
        public $fff;

        /**
         * Ffff
         *
         * @Element(name="ffff")
         * @var Ffff[]
         */
        public $ffff;

        /**
         * Fffff
         *
         * @Element(name="fffff")
         * @var Fffff[]
         */
        public $fffff;

        /**
         * Ffffff
         *
         * @Element(name="ffffff")
         * @var Ffffff[]
         */
        public $ffffff;

        /**
         * Mp
         *
         * @Element(name="mp")
         * @var Mp[]
         */
        public $mp;

        /**
         * Mf
         *
         * @Element(name="mf")
         * @var Mf[]
         */
        public $mf;

        /**
         * Sf
         *
         * @Element(name="sf")
         * @var Sf[]
         */
        public $sf;

        /**
         * Sfp
         *
         * @Element(name="sfp")
         * @var Sfp[]
         */
        public $sfp;

        /**
         * Sfpp
         *
         * @Element(name="sfpp")
         * @var Sfpp[]
         */
        public $sfpp;

        /**
         * Fp
         *
         * @Element(name="fp")
         * @var Fp[]
         */
        public $fp;

        /**
         * Rf
         *
         * @Element(name="rf")
         * @var Rf[]
         */
        public $rf;

        /**
         * Rfz
         *
         * @Element(name="rfz")
         * @var Rfz[]
         */
        public $rfz;

        /**
         * Sfz
         *
         * @Element(name="sfz")
         * @var Sfz[]
         */
        public $sfz;

        /**
         * Sffz
         *
         * @Element(name="sffz")
         * @var Sffz[]
         */
        public $sffz;

        /**
         * Fz
         *
         * @Element(name="fz")
         * @var Fz[]
         */
        public $fz;

        /**
         * N
         *
         * @Element(name="n")
         * @var N[]
         */
        public $n;

        /**
         * Pf
         *
         * @Element(name="pf")
         * @var Pf[]
         */
        public $pf;

        /**
         * Sfzp
         *
         * @Element(name="sfzp")
         * @var Sfzp[]
         */
        public $sfzp;

        /**
         * Other dynamics
         *
         * @Element(name="other-dynamics")
         * @var OtherDynamics[]
         */
        public $otherDynamics;
}