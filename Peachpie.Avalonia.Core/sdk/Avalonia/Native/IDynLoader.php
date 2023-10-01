<?php
namespace Avalonia\Native;
/**
 */
interface IDynLoader
{
	/**
	 * @param \System\String|string $dll
	 */
	public function LoadLibrary($dll);
	/**
	 * @param \System\IntPtr $dll
	 * @param \System\String|string $proc
	 * @param \System\Boolean $optional
	 */
	public function GetProcAddress($dll, $proc, $optional);
}
