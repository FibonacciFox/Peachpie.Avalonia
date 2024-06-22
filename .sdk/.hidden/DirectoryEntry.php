<?php

final class DirectoryEntry extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Byte*
	 */
	protected $Name;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $NameLength;
	/**
	 * @field
	 * @var \Interop+Sys+NodeType
	 */
	protected $InodeType;
	/**
	 * @param \System\Span_1 $buffer [generic: System\Char]
	 * @return \System\ReadOnlySpan_1[System\Char]
	 */
	protected function GetName($buffer){}
}