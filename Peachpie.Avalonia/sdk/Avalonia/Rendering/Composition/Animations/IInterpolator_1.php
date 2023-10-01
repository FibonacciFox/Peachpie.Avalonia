<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IInterpolator_1
{
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\T $from
	 * @param \Avalonia\Rendering\Composition\Animations\T $to
	 * @param \System\Single $progress
	 */
	public function Interpolate($from, $to, $progress);
}
