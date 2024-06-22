<?php
namespace System\Resources;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ResourceFallbackManagerOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_2 (){}
}
final class ResourceFallbackManager extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use ResourceFallbackManagerOverride;


	/**
	 * @uses ResourceFallbackManagerOverride::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses ResourceFallbackManagerOverride::GetEnumerator_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerator|\System\Collections\Generic\IEnumerator_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
}