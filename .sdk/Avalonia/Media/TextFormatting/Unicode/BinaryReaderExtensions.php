<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BinaryReaderExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\IO\BinaryWriter $writer
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteBE_1 ($writer, $value){}
	/**
	 * @deprecated
	 * @param \System\IO\BinaryWriter $writer
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteBE_2 ($writer, $value){}
}
class BinaryReaderExtensions extends \System\Object
{
	use BinaryReaderExtensionsOverride;


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
	 * @uses BinaryReaderExtensionsOverride::WriteBE_1 <br>public , args: ($writer, $value)<br>
	 * @uses BinaryReaderExtensionsOverride::WriteBE_2 <br>public , args: ($writer, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteBE (\override ...$args){}
}