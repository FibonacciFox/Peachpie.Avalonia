<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class BidiData extends \System\Object
{
	/**
	 * @var \System\SByte
	 * @property
	 */
	public $ParagraphEmbeddingLevel;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasBrackets;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasEmbeddings;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasIsolates;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Length;
	/**
	 * @var \Avalonia\Utilities\ArraySlice_1[Avalonia\Media\TextFormatting\Unicode\BidiClass]
	 * @property
	 */
	public $Classes;
	/**
	 * @var \Avalonia\Utilities\ArraySlice_1[Avalonia\Media\TextFormatting\Unicode\BidiPairedBracketType]
	 * @property
	 */
	public $PairedBracketTypes;
	/**
	 * @var \Avalonia\Utilities\ArraySlice_1[System\Int32]
	 * @property
	 */
	public $PairedBracketValues;
	/**
	 * @return \System\SByte
	 */
	public  function get_ParagraphEmbeddingLevel(){}
	/**
	 * @param \System\SByte $value
	 * @return \System\Void|void
	 */
	public  function set_ParagraphEmbeddingLevel($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasBrackets(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasBrackets($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasEmbeddings(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasEmbeddings($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasIsolates(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasIsolates($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Length($value){}
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function get_Classes(){}
	/**
	 * @param \Avalonia\Utilities\ArraySlice_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Classes($value){}
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function get_PairedBracketTypes(){}
	/**
	 * @param \Avalonia\Utilities\ArraySlice_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_PairedBracketTypes($value){}
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function get_PairedBracketValues(){}
	/**
	 * @param \Avalonia\Utilities\ArraySlice_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_PairedBracketValues($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @return \System\Void|void
	 */
	public  function Append($text){}
	/**
	 * @return \System\Void|void
	 */
	public  function SaveTypes(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RestoreTypes(){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function GetTempLevelBuffer($length){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
