<?php
namespace Avalonia\Input\GestureRecognizers;
class VelocityEstimate extends \System\Object implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $PixelsPerSecond;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Confidence;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Duration;
	/**
	 * @property
	 * @var \Avalonia\Vector
	 */
	public $Offset;
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @return \System\Boolean|bool
	 */
	protected function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $left
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $left
	 * @param \Avalonia\Input\GestureRecognizers\VelocityEstimate $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Vector& &$PixelsPerSecond
	 * @param \System\Double& &$Confidence
	 * @param \System\TimeSpan& &$Duration
	 * @param \Avalonia\Vector& &$Offset
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$PixelsPerSecond, &$Confidence, &$Duration, &$Offset){}
	/**
	 * @param \Avalonia\Vector $PixelsPerSecond
	 * @param \System\Double|double $Confidence
	 * @param \System\TimeSpan $Duration
	 * @param \Avalonia\Vector $Offset
	 */
	public function __construct($PixelsPerSecond, $Confidence, $Duration, $Offset){}
}