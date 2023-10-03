<?php
namespace Avalonia\Win32\Input;
/**
 */
class Imm32CaretManager extends \System\ValueType
{
	/**
	 * @param \System\IntPtr $hwnd
	 * @return \System\Void|void
	 */
	public  function TryCreate($hwnd){}
	/**
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @return \System\Void|void
	 */
	public  function TryMove($x, $y){}
	/**
	 * @return \System\Void|void
	 */
	public  function TryDestroy(){}
}
