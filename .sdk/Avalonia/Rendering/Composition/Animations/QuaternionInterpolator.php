<?php
namespace Avalonia\Rendering\Composition\Animations;
class QuaternionInterpolator extends \System\Object implements
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\QuaternionInterpolator
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \System\Numerics\Quaternion $from
	 * @param \System\Numerics\Quaternion $to
	 * @param \System\Single $progress
	 * @return \System\Numerics\Quaternion
	 */
	public function Interpolate($from, $to, $progress){}
	/**
	 */
	public function __construct(){}
}