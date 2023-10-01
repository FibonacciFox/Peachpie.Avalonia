<?php
namespace Avalonia\X11;
/**
 */
interface IGlobalsSubscriber
{
	/**
	 * @param \System\String|string $wmName
	 */
	public function WmChanged($wmName);
	/**
	 * @param \System\Boolean $compositing
	 */
	public function CompositionChanged($compositing);
}
