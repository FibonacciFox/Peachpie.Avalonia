<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BatchStreamReaderOverride {
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]public function ReadObject_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]public function ReadObject_2 (){}
}
class BatchStreamReader extends \System\Object implements
	\System\IDisposable
{
	use BatchStreamReaderOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsObjectEof;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsStructEof;
	/**
	 * @return \T|object
	 */
	public function Read(){}
	/**
	 * @uses BatchStreamReaderOverride::ReadObject_1 <br>public , args: ()<br>
	 * @uses BatchStreamReaderOverride::ReadObject_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function ReadObject (){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamData $input
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamMemoryPool $memoryPool
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamObjectPool_1 $objectPool [generic: System\Object]
	 */
	public function __construct($input, $memoryPool, $objectPool){}
}