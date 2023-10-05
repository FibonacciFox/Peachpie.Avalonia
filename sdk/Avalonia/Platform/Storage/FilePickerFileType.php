<?php
namespace Avalonia\Platform\Storage;
/**
 */
class FilePickerFileType extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public $Patterns;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public $MimeTypes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 * @property
	 */
	public $AppleUniformTypeIdentifiers;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_Patterns(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Patterns($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_MimeTypes(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_MimeTypes($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_AppleUniformTypeIdentifiers(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_AppleUniformTypeIdentifiers($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function TryGetExtensions(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
