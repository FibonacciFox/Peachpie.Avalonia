<?php
namespace Avalonia\Rendering\Composition\Animations;
class VectorInterpolator extends \System\Object implements
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\VectorInterpolator
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \Avalonia\Vector $from
	 * @param \Avalonia\Vector $to
	 * @param \System\Single $progress
	 * @return \Avalonia\Vector
	 */
	public function Interpolate($from, $to, $progress){}
	/**
	 */
	public function __construct(){}
}