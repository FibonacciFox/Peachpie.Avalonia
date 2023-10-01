<?php
namespace Avalonia\Input;
/**
 */
interface IDataObject
{
	/**
	 */
	public function GetDataFormats();
	/**
	 * @param \System\String|string $dataFormat
	 */
	public function Contains($dataFormat);
	/**
	 * @param \System\String|string $dataFormat
	 */
	public function Get($dataFormat);
}
