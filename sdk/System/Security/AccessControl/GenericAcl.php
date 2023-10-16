<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GenericAclMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Security\AccessControl\AceEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
}
/**
 */
class GenericAcl extends \System\Object implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Byte
	 * @field
	 */
	public readonly $AclRevision;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public readonly $AclRevisionDS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $MaxBinaryLength;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Revision;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BinaryLength;
	/**
	 * @var \System\Security\AccessControl\GenericAce
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
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
	 * @return \System\Byte
	 */
	public  function get_Revision(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BinaryLength(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Security\AccessControl\GenericAce
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Security\AccessControl\GenericAce $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	public  function GetBinaryForm($binaryForm, $offset){}
	/**
	 * @uses GenericAclMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses GenericAclMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @uses GenericAclMethodsOverride::GetEnumerator_1 ()
	 * @uses GenericAclMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
