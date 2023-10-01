<?php
namespace Avalonia\PropertyStore;
/**
 */
interface IValueEntry
{
	/**
	 */
	public function get_HasValue();
	/**
	 */
	public function get_Property();
	/**
	 */
	public function GetValue();
	/**
	 * @param \Avalonia\Data\BindingValueType& $state
	 * @param \System\Exception& $error
	 */
	public function GetDataValidationState($state, $error);
	/**
	 */
	public function Unsubscribe();
}
