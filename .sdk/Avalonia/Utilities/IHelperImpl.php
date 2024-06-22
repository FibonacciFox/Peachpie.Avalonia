<?php
namespace Avalonia\Utilities;
interface IHelperImpl
{


	/**
	 * @param \System\IntPtr $waitHandles
	 * @param \System\Boolean|bool $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	public function Wait($waitHandles, $waitAll, $millisecondsTimeout);
}