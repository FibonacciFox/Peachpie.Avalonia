<?php
namespace Avalonia\Input;
class DataObjectExtensions extends \System\Object
{


	/**
	 * @param \Avalonia\Input\IDataObject $dataObject
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Platform\Storage\IStorageItem]
	 */
	public static function GetFiles($dataObject){}
	/**
	 * @param \Avalonia\Input\IDataObject $dataObject
	 * @return \System\Collections\Generic\IEnumerable_1[System\String]
	 */
	public static function GetFileNames($dataObject){}
	/**
	 * @param \Avalonia\Input\IDataObject $dataObject
	 * @return \System\String|string
	 */
	public static function GetText($dataObject){}
}