<?php
namespace Avalonia\Input;
interface IDataObject
{


	/**
	 * @return \System\Collections\Generic\IEnumerable_1[System\String]
	 */
	public function GetDataFormats();
	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Boolean|bool
	 */
	public function Contains($dataFormat);
	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Object|object
	 */
	public function Get($dataFormat);
}