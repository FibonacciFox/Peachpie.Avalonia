<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StubHelpersOverride {
	/**
	 * @param \System\Security\Permissions\PermissionState $state
	 */
	#[MethodOverride]public function __construct_1 ($state){}
	/**
	 * @param \System\Security\PermissionSet $permSet
	 */
	#[MethodOverride]public function __construct_2 ($permSet){}
}
class PermissionSet extends \System\Object implements
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Security\ISecurityEncodable,
	\System\Security\IStackWalk
{
	use StubHelpersOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSynchronized;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	public function AddPermission($perm){}
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	protected function AddPermissionImpl($perm){}
	/**
	 * @return \System\Void|void
	 */
	public function Assert(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function ContainsNonCodeAccessPermissions(){}
	/**
	 * @param \System\String|string $inFormat
	 * @param \System\Byte $inData
	 * @param \System\String|string $outFormat
	 * @return \System\Byte[]
	 */
	public static function ConvertPermissionSet($inFormat, $inData, $outFormat){}
	/**
	 * @return \System\Security\PermissionSet
	 */
	public function Copy(){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	public function Demand(){}
	/**
	 * @return \System\Void|void
	 */
	public function Deny(){}
	/**
	 * @param \System\Security\SecurityElement $et
	 * @return \System\Void|void
	 */
	public function FromXml($et){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public function GetEnumerator(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	protected function GetEnumeratorImpl(){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	public function GetPermission($permClass){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	protected function GetPermissionImpl($permClass){}
	/**
	 * @param \System\Security\PermissionSet $other
	 * @return \System\Security\PermissionSet
	 */
	public function Intersect($other){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsEmpty(){}
	/**
	 * @param \System\Security\PermissionSet $target
	 * @return \System\Boolean|bool
	 */
	public function IsSubsetOf($target){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function IsUnrestricted(){}
	/**
	 * @return \System\Void|void
	 */
	public function PermitOnly(){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	public function RemovePermission($permClass){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	protected function RemovePermissionImpl($permClass){}
	/**
	 * @return \System\Void|void
	 */
	public static function RevertAssert(){}
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	public function SetPermission($perm){}
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	protected function SetPermissionImpl($perm){}
	private function OnDeserialization($sender){}
	/**
	 * @return \System\Security\SecurityElement
	 */
	public function ToXml(){}
	/**
	 * @param \System\Security\PermissionSet $other
	 * @return \System\Security\PermissionSet
	 */
	public function Union($other){}
	/**
	 * @uses PermissionSetOverride::__construct_1 <br>public , args: ($state)<br>
	 * @uses PermissionSetOverride::__construct_2 <br>public , args: ($permSet)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}