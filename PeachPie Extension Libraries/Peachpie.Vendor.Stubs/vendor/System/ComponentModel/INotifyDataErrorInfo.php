<?php
namespace System\ComponentModel;
/**
 * @method \System\Void|void add_ErrorsChanged($value) [modifier: public]
 * @method \System\Void|void remove_ErrorsChanged($value) [modifier: public]
*/
interface INotifyDataErrorInfo
{

	/**
	 * @param \System\String|string $propertyName
	 * @return \System\Collections\IEnumerable
	 */
	public function GetErrors($propertyName);
}