<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BinaryReaderExtensionsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteBE_1($writer, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteBE_2($writer, $value){}
}
/**
 */
class BinaryReaderExtensions extends \System\Object
{
	/**
	 * @param \System\IO\BinaryReader $reader
	 * @return \System\Int32|int
	 */
	public static function ReadInt32BE($reader){}
	/**
	 * @param \System\IO\BinaryReader $reader
	 * @return \System\UInt32
	 */
	public static function ReadUInt32BE($reader){}
	/**
	 * @uses BinaryReaderExtensionsMethodsOverride::WriteBE_1 ($writer, $value)
	 * @uses BinaryReaderExtensionsMethodsOverride::WriteBE_2 ($writer, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteBE(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
