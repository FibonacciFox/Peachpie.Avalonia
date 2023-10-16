<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ResourceReaderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Dispose_2($disposing){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function LoadObject_1($pos){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function LoadObject_2($pos, $typeCode){}
}
/**
 */
class ResourceReader extends \System\Object implements 
	\System\Resources\IResourceReader,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	/**
	 * @var \System\Collections\Generic\Dictionary_2[System\String,System\Resources\ResourceLocator]
	 * @field
	 */
	protected $_resCache;
	/**
	 * @param \System\Int32|int $typeIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DeserializeObject($typeIndex){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeBinaryFormatter(){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateUntypedDelegate($method){}
	/**
	 * @param \System\String|string $readerType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateReaderType($readerType){}
	/**
	 * @param \System\String|string $resourceName
	 * @param \System\String& $resourceType
	 * @param \System\Byte[]& $resourceData
	 * @return \System\Void|void
	 */
	public  function GetResourceData($resourceName, $resourceType, $resourceData){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_AllowCustomResourceTypes(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Close(){}
	/**
	 * @uses ResourceReaderMethodsOverride::Dispose_1 ()
	 * @uses ResourceReaderMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Int32* $p
	 * @return \System\Int32|int
	 */
	protected static function ReadUnalignedI4($p){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SkipString(){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNameHash($index){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNamePosition($index){}
	/**
	 * @uses ResourceReaderMethodsOverride::GetEnumerator_1 ()
	 * @uses ResourceReaderMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Resources\ResourceEnumerator
	 */
	protected  function GetEnumeratorInternal(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	protected  function FindPosForResource($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompareStringEqualsName($name){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32& $dataOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocateStringForNameIndex($index, $dataOffset){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValueForNameIndex($index){}
	/**
	 * @param \System\Int32|int $pos
	 * @return \System\String|string
	 */
	protected  function LoadString($pos){}
	/**
	 * @uses ResourceReaderMethodsOverride::LoadObject_1 ($pos)
	 * @uses ResourceReaderMethodsOverride::LoadObject_2 ($pos, $typeCode)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadObject(mixed ...$args){}
	/**
	 * @param \System\Int32|int $pos
	 * @return \System\Object|object
	 */
	protected  function LoadObjectV1($pos){}
	/**
	 * @param \System\Int32|int $pos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function _LoadObjectV1($pos){}
	/**
	 * @param \System\Int32|int $pos
	 * @param \System\Resources\ResourceTypeCode& $typeCode
	 * @return \System\Object|object
	 */
	protected  function LoadObjectV2($pos, $typeCode){}
	/**
	 * @param \System\Int32|int $pos
	 * @param \System\Resources\ResourceTypeCode& $typeCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function _LoadObjectV2($pos, $typeCode){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReadResources(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function _ReadResources(){}
	/**
	 * @param \System\Int32|int $typeIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindType($typeIndex){}
	/**
	 * @param \System\Int32|int $typeIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UseReflectionToGetType($typeIndex){}
	/**
	 * @param \System\Resources\ResourceTypeCode $typeCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TypeNameFromTypeCode($typeCode){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
