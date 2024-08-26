<?php
namespace Avalonia\Rendering;
final class LayoutPassTiming extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $PassCounter;
	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $Elapsed;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Rendering\LayoutPassTiming $left
	 * @param \Avalonia\Rendering\LayoutPassTiming $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Rendering\LayoutPassTiming $left
	 * @param \Avalonia\Rendering\LayoutPassTiming $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32& &$PassCounter
	 * @param \System\TimeSpan& &$Elapsed
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$PassCounter, &$Elapsed){}
	/**
	 * @param \System\Int32|int $PassCounter
	 * @param \System\TimeSpan $Elapsed
	 */
	public function __construct($PassCounter, $Elapsed){}
}