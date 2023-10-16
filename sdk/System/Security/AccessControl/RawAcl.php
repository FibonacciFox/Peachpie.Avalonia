<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RawAclMethodsOverride
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
class RawAcl extends \System\Security\AccessControl\GenericAcl implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Revision;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
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
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @param \System\Byte& $revision
	 * @param \System\Int32& $count
	 * @param \System\Int32& $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyHeader($binaryForm, $offset, $revision, $count, $length){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MarshalHeader($binaryForm, $offset){}
	/**
	 * @param \System\Byte[] $binaryForm
	 * @param \System\Int32|int $offset
	 * @return \System\Void|void
	 */
	protected  function SetBinaryForm($binaryForm, $offset){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Security\AccessControl\GenericAce $ace
	 * @return \System\Void|void
	 */
	public  function InsertAce($index, $ace){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAce($index){}
	/**
	 * @uses RawAclMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses RawAclMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses RawAclMethodsOverride::GetEnumerator_1 ()
	 * @uses RawAclMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}
