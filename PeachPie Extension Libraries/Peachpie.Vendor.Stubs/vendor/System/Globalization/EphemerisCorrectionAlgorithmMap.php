<?php
namespace System\Globalization;
final class EphemerisCorrectionAlgorithmMap extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_lowestYear;
	/**
	 * @field
	 * @var \System\Globalization\CalendricalCalculationsHelper+CorrectionAlgorithm
	 */
	protected $_algorithm;
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Globalization\CalendricalCalculationsHelper+CorrectionAlgorithm $algorithm
	 */
	public function __construct($year, $algorithm){}
}