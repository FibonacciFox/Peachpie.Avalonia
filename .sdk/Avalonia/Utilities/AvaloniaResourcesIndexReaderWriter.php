<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaResourcesIndexReaderWriterOverride {
	/**
	 * @deprecated
	 * @param \System\IO\Stream $output
	 * @param \System\Collections\Generic\List_1 $entries [generic: Avalonia\Utilities\AvaloniaResourcesIndexEntry]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIndex_1 ($output, $entries){}
	/**
	 * @deprecated
	 * @param \System\IO\BinaryWriter $writer
	 * @param \System\Collections\Generic\List_1 $entries [generic: Avalonia\Utilities\AvaloniaResourcesIndexEntry]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function WriteIndex_2 ($writer, $entries){}
}
class AvaloniaResourcesIndexReaderWriter extends \System\Object
{
	use AvaloniaResourcesIndexReaderWriterOverride;


	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Collections\Generic\List_1[Avalonia\Utilities\AvaloniaResourcesIndexEntry]
	 */
	public static function ReadIndex($stream){}
	private static function ReadXmlIndex(){}
	private static function ReadBinaryIndex($reader){}
	/**
	 * @uses AvaloniaResourcesIndexReaderWriterOverride::WriteIndex_1 <br>public , args: ($output, $entries)<br>
	 * @uses AvaloniaResourcesIndexReaderWriterOverride::WriteIndex_2 <br>private , args: ($writer, $entries)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteIndex (\override ...$args){}
	/**
	 * @param \System\IO\Stream $output
	 * @param \System\Collections\Generic\List_1 $resources [generic: System\ValueTuple_3[System\String,System\Int32,System\Func_1[System\IO\Stream]
	 * @return \System\Void|void
	 */
	public static function WriteResources($output, $resources){}
}