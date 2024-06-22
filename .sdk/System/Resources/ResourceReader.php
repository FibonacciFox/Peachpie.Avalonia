<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ResourceReaderOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Dispose_2 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $pos
	 * @return \System\Object|object
	 */
	#[MethodOverride]protected function LoadObject_1 ($pos){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $pos
	 * @param \System\Resources\ResourceTypeCode& &$typeCode
	 * @return \System\Object|object
	 */
	#[MethodOverride]protected function LoadObject_2 ($pos, &$typeCode){}
	/**
	 * @param \System\String|string $fileName
	 */
	#[MethodOverride]public function __construct_1 ($fileName){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_2 ($stream){}
}
final class ResourceReader extends \System\Object implements
	\System\Resources\IResourceReader,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	use ResourceReaderOverride;

	/**
	 * @field
	 * @var \System\Collections\Generic\Dictionary_2[System\String,System\Resources\ResourceLocator]
	 */
	protected $_resCache;
	private function DeserializeObject($typeIndex){}
	private function InitializeBinaryFormatter(){}
	private static function CreateUntypedDelegate($method){}
	private static function ValidateReaderType($readerType){}
	/**
	 * @param \System\String|string $resourceName
	 * @param \System\String& &$resourceType
	 * @param \System\Byte &$resourceData
	 * @return \System\Void|void
	 */
	public function GetResourceData($resourceName, &$resourceType, &$resourceData){}
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses ResourceReaderOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses ResourceReaderOverride::Dispose_2 <br>private , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	private static function ReadUnalignedI4($p){}
	private function SkipString(){}
	private function GetNameHash($index){}
	private function GetNamePosition($index){}
	/**
	 * @uses ResourceReaderOverride::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses ResourceReaderOverride::GetEnumerator_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\IDictionaryEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Resources\ResourceReader+ResourceEnumerator
	 */
	protected function GetEnumeratorInternal(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Int32|int
	 */
	protected function FindPosForResource($name){}
	private function CompareStringEqualsName($name){}
	private function AllocateStringForNameIndex($index, &$dataOffset){}
	private function GetValueForNameIndex($index){}
	/**
	 * @param \System\Int32|int $pos
	 * @return \System\String|string
	 */
	protected function LoadString($pos){}
	/**
	 * @uses ResourceReaderOverride::LoadObject_1 <br>protected , args: ($pos)<br>
	 * @uses ResourceReaderOverride::LoadObject_2 <br>protected , args: ($pos, &$typeCode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverrideProtected]function LoadObject (\override ...$args){}
	private function LoadObjectV1($pos){}
	private function _LoadObjectV1($pos){}
	private function LoadObjectV2($pos, &$typeCode){}
	private function _LoadObjectV2($pos, &$typeCode){}
	private function ReadResources(){}
	private function _ReadResources(){}
	private function FindType($typeIndex){}
	private function UseReflectionToGetType($typeIndex){}
	private function TypeNameFromTypeCode($typeCode){}
	/**
	 * @uses ResourceReaderOverride::__construct_1 <br>public , args: ($fileName)<br>
	 * @uses ResourceReaderOverride::__construct_2 <br>public , args: ($stream)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}