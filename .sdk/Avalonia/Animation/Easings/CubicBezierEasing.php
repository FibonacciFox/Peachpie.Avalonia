<?php
namespace Avalonia\Animation\Easings;
final class CubicBezierEasing extends \System\Object implements
	\Avalonia\Animation\Easings\IEasing
{
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $ControlPoint2;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $ControlPoint1;
	private function Ease($progress){}
}