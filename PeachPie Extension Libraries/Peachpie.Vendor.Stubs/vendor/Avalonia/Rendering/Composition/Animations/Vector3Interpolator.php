<?php
namespace Avalonia\Rendering\Composition\Animations;
class Vector3Interpolator extends \System\Object implements
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\Vector3Interpolator
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \System\Numerics\Vector3 $from
	 * @param \System\Numerics\Vector3 $to
	 * @param \System\Single $progress
	 * @return \System\Numerics\Vector3
	 */
	public function Interpolate($from, $to, $progress){}
	/**
	 */
	public function __construct(){}
}