<?php
namespace Avalonia\Input;
interface IAccessKeyHandler
{


	/**
	 * @param \Avalonia\Input\IInputRoot $owner
	 * @return \System\Void|void
	 */
	public function SetOwner($owner);
	/**
	 * @param \System\Char $accessKey
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	public function Register($accessKey, $element);
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Void|void
	 */
	public function Unregister($element);
}