<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaResourcesIndexReaderWriterMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIndex_1($output, $entries){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function WriteIndex_2($writer, $entries){}
}
/**
 */
class AvaloniaResourcesIndexReaderWriter extends \System\Object
{
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Collections\Generic\List_1
	 */
	public static function ReadIndex($stream){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadXmlIndex(){}
	/**
	 * @param \System\IO\BinaryReader $reader
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadBinaryIndex($reader){}
	/**
	 * @uses AvaloniaResourcesIndexReaderWriterMethodsOverride::WriteIndex_1 ($output, $entries)
	 * @uses AvaloniaResourcesIndexReaderWriterMethodsOverride::WriteIndex_2 ($writer, $entries)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteIndex(mixed ...$args){}
	/**
	 * @param \System\IO\Stream $output
	 * @param \System\Collections\Generic\List_1 $resources
	 * @return \System\Void|void
	 */
	public static function WriteResources($output, $resources){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
