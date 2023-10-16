<?php
namespace System\Security;
/**
 */
class PermissionSet extends \System\Object implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Security\ISecurityEncodable,
	\System\Security\IStackWalk
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	public  function AddPermission($perm){}
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	protected  function AddPermissionImpl($perm){}
	/**
	 * @return \System\Void|void
	 */
	public  function Assert(){}
	/**
	 * @return \System\Boolean
	 */
	public  function ContainsNonCodeAccessPermissions(){}
	/**
	 * @param \System\String|string $inFormat
	 * @param \System\Byte[] $inData
	 * @param \System\String|string $outFormat
	 * @return \System\Byte[]
	 */
	public static function ConvertPermissionSet($inFormat, $inData, $outFormat){}
	/**
	 * @return \System\Security\PermissionSet
	 */
	public  function Copy(){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	public  function Demand(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Deny(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public  function Equals($o){}
	/**
	 * @param \System\Security\SecurityElement $et
	 * @return \System\Void|void
	 */
	public  function FromXml($et){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	protected  function GetEnumeratorImpl(){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	public  function GetPermission($permClass){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	protected  function GetPermissionImpl($permClass){}
	/**
	 * @param \System\Security\PermissionSet $other
	 * @return \System\Security\PermissionSet
	 */
	public  function Intersect($other){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsEmpty(){}
	/**
	 * @param \System\Security\PermissionSet $target
	 * @return \System\Boolean
	 */
	public  function IsSubsetOf($target){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsUnrestricted(){}
	/**
	 * @return \System\Void|void
	 */
	public  function PermitOnly(){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	public  function RemovePermission($permClass){}
	/**
	 * @param \System\Type $permClass
	 * @return \System\Security\IPermission
	 */
	protected  function RemovePermissionImpl($permClass){}
	/**
	 * @return \System\Void|void
	 */
	public static function RevertAssert(){}
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	public  function SetPermission($perm){}
	/**
	 * @param \System\Security\IPermission $perm
	 * @return \System\Security\IPermission
	 */
	protected  function SetPermissionImpl($perm){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @return \System\Security\SecurityElement
	 */
	public  function ToXml(){}
	/**
	 * @param \System\Security\PermissionSet $other
	 * @return \System\Security\PermissionSet
	 */
	public  function Union($other){}
}
