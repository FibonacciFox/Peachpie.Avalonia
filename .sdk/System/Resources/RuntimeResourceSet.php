<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuntimeResourceSetOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $key
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Boolean|bool $isString
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function GetObject_1 ($key, $ignoreCase, $isString){}
}
final class RuntimeResourceSet extends \System\Resources\ResourceSet implements
	\System\IDisposable,
	\System\Collections\IEnumerable
{
	use RuntimeResourceSetOverride;

	/**
	 * @field
	 * @var \System\Resources\IResourceReader
	 */
	protected $Reader;
	private static function ReadValue($reader, $dataPos, $isString, &$locator){}
}