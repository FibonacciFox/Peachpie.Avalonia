<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ResourceSetOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_1 ($disposing){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IDictionaryEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetString_2 ($name, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetObject_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function GetObject_2 ($name, $ignoreCase){}
	/**
	 * @param \System\String|string $fileName
	 */
	#[MethodOverride]public function __construct_1 ($fileName){}
	/**
	 * @param \System\IO\Stream $stream
	 */
	#[MethodOverride]public function __construct_2 ($stream){}
	/**
	 * @param \System\Resources\IResourceReader $reader
	 */
	#[MethodOverride]public function __construct_3 ($reader){}
}
class ResourceSet extends \System\Object implements
	\System\IDisposable,
	\System\Collections\IEnumerable
{
	use ResourceSetOverride;
	/**
	 * @field
	 * @var \System\Resources\IResourceReader
	 */
	protected $Reader;
	/**
	 * @return \System\Void|void
	 */
	public function Close(){}
	/**
	 * @uses ResourceSetOverride::Dispose_1 <br>protected , args: ($disposing)<br>
	 * @uses ResourceSetOverride::Dispose_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	/**
	 * @return \System\Type
	 */
	public function GetDefaultReader(){}
	/**
	 * @return \System\Type
	 */
	public function GetDefaultWriter(){}
	/**
	 * @uses ResourceSetOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ResourceSetOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IDictionaryEnumerator|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function GetEnumeratorHelper(){}
	/**
	 * @uses ResourceSetOverride::GetString_1 <br>public , args: ($name)<br>
	 * @uses ResourceSetOverride::GetString_2 <br>public , args: ($name, $ignoreCase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetString (\override ...$args){}
	/**
	 * @uses ResourceSetOverride::GetObject_1 <br>public , args: ($name)<br>
	 * @uses ResourceSetOverride::GetObject_2 <br>public , args: ($name, $ignoreCase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetObject (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function ReadResources(){}
	private function GetObjectInternal($name){}
	private function GetCaseInsensitiveObjectInternal($name){}
	/**
	 * @uses ResourceSetOverride::__construct_1 <br>public , args: ($fileName)<br>
	 * @uses ResourceSetOverride::__construct_2 <br>public , args: ($stream)<br>
	 * @uses ResourceSetOverride::__construct_3 <br>public , args: ($reader)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}