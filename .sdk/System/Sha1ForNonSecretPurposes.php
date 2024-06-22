<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Sha1ForNonSecretPurposesOverride {
	/**
	 * @deprecated
	 * @param \System\Byte $input
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Append_1 ($input){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Byte]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Append_2 ($input){}
}
final class Sha1ForNonSecretPurposes extends \System\ValueType
{
	use Sha1ForNonSecretPurposesOverride;


	/**
	 * @return \System\Void|void
	 */
	public function Start(){}
	/**
	 * @uses Sha1ForNonSecretPurposesOverride::Append_1 <br>public , args: ($input)<br>
	 * @uses Sha1ForNonSecretPurposesOverride::Append_2 <br>public , args: ($input)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Append (\override ...$args){}
	/**
	 * @param \System\Span_1 $output [generic: System\Byte]
	 * @return \System\Void|void
	 */
	public function Finish($output){}
	private function Drain(){}
}