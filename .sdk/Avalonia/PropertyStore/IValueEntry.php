<?php
namespace Avalonia\PropertyStore;
interface IValueEntry
{


	/**
	 * @return \System\Boolean|bool
	 */
	public function HasValue();
	/**
	 * @return \System\Object|object
	 */
	public function GetValue();
	/**
	 * @param \Avalonia\Data\BindingValueType& &$state
	 * @param \System\Exception& &$error
	 * @return \System\Boolean|bool
	 */
	public function GetDataValidationState(&$state, &$error);
	/**
	 * @return \System\Void|void
	 */
	public function Unsubscribe();
}