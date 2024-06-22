<?php
namespace Avalonia\Platform;
interface IWindowBaseImpl
{


	/**
	 * @param \System\Boolean|bool $activate
	 * @param \System\Boolean|bool $isDialog
	 * @return \System\Void|void
	 */
	public function Show($activate, $isDialog);
	/**
	 * @return \System\Void|void
	 */
	public function Hide();
	/**
	 * @return \System\Void|void
	 */
	public function Activate();
	/**
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function SetTopmost($value);
}