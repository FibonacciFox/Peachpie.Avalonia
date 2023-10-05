<?php
namespace Avalonia\Win32;
/**
 */
class NonPumpingWaitHelperImpl extends \System\Object implements 
	\Avalonia\Utilities\IHelperImpl
{
	/**
	 * @var \Avalonia\Win32\NonPumpingWaitHelperImpl
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @return \Avalonia\Win32\NonPumpingWaitHelperImpl
	 */
	public static function get_Instance(){}
	/**
	 * @param \System\IntPtr[] $waitHandles
	 * @param \System\Boolean $waitAll
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Int32|int
	 */
	public  function Wait($waitHandles, $waitAll, $millisecondsTimeout){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
