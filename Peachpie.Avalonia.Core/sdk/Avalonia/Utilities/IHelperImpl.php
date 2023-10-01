<?php
namespace Avalonia\Utilities;
/**
 */
interface IHelperImpl
{
	/**
	 * @param \System\IntPtr[] $waitHandles
	 * @param \System\Boolean $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 */
	public function Wait($waitHandles, $waitAll, $millisecondsTimeout);
}
