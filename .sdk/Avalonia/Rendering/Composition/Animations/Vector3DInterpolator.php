<?php
namespace Avalonia\Rendering\Composition\Animations;
class Vector3DInterpolator extends \System\Object implements
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\Vector3DInterpolator
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @param \Avalonia\Vector3D $from
	 * @param \Avalonia\Vector3D $to
	 * @param \System\Single $progress
	 * @return \Avalonia\Vector3D
	 */
	public function Interpolate($from, $to, $progress){}
	/**
	 */
	public function __construct(){}
}