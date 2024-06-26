<?php
namespace Avalonia\Input;
class DataObject extends \System\Object implements
	\Avalonia\Input\IDataObject
{

	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Boolean|bool
	 */
	public function Contains($dataFormat){}
	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Object|object
	 */
	public function Get($dataFormat){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[System\String]
	 */
	public function GetDataFormats(){}
	/**
	 * @param \System\String|string $dataFormat
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Set($dataFormat, $value){}
	/**
	 */
	public function __construct(){}
}