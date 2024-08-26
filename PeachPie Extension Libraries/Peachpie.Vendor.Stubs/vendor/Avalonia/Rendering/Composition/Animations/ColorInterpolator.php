<?php
namespace Avalonia\Rendering\Composition\Animations;
class ColorInterpolator extends \System\Object implements
	\Avalonia\Rendering\Composition\Animations\IInterpolator_1
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\ColorInterpolator
	 * @since readonly
	 */
	public $Instance;
	private static function Lerp($a, $b, $p){}
	/**
	 * @param \Avalonia\Media\Color $to
	 * @param \Avalonia\Media\Color $from
	 * @param \System\Single $progress
	 * @return \Avalonia\Media\Color
	 */
	public static function LerpRGB($to, $from, $progress){}
	/**
	 * @param \Avalonia\Media\Color $from
	 * @param \Avalonia\Media\Color $to
	 * @param \System\Single $progress
	 * @return \Avalonia\Media\Color
	 */
	public function Interpolate($from, $to, $progress){}
	/**
	 */
	public function __construct(){}
}