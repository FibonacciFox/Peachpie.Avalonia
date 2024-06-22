<?php
namespace Avalonia\Platform\Storage;
final class FilePickerFileType extends \System\Object
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 */
	public $Patterns;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 */
	public $MimeTypes;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\String]
	 */
	public $AppleUniformTypeIdentifiers;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[System\String]
	 */
	protected function TryGetExtensions(){}
	/**
	 * @param \System\String|string $name
	 */
	public function __construct($name){}
}