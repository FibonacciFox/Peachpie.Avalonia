<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
interface IStreamPlugin
{
	/**
	 * @param \System\WeakReference_1 $reference
	 */
	public function Match($reference);
	/**
	 * @param \System\WeakReference_1 $reference
	 */
	public function Start($reference);
}
