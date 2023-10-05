<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BidiAlgorithmMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Process_1($data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Process_2($types, $pairedBracketTypes, $pairedBracketValues, $paragraphEmbeddingLevel, $hasBrackets, $hasEmbeddings, $hasIsolates, $outLevels){}
}
/**
 */
class BidiAlgorithm extends \System\Object
{
	/**
	 * @var \Avalonia\Utilities\ArraySlice_1[System\SByte]
	 * @property
	 */
	public readonly $ResolvedLevels;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ResolvedParagraphEmbeddingLevel;
	/**
	 * @return \Avalonia\Utilities\ArraySlice_1
	 */
	public  function get_ResolvedLevels(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ResolvedParagraphEmbeddingLevel(){}
	/**
	 * @uses BidiAlgorithmMethodsOverride::Process_1 ($data)
	 * @uses BidiAlgorithmMethodsOverride::Process_2 ($types, $pairedBracketTypes, $pairedBracketValues, $paragraphEmbeddingLevel, $hasBrackets, $hasEmbeddings, $hasIsolates, $outLevels)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Process(mixed ...$args){}
	/**
	 * @param \Avalonia\Utilities\ArraySlice_1 $data
	 * @return \System\SByte
	 */
	public  function ResolveEmbeddingLevel($data){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsIsolateStart($type){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindIsolatePairs(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResolveExplicitEmbeddingLevels(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BuildX9RemovalMap(){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MapX9($index){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 * @param \System\Int32|int $level
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddLevelRun($start, $length, $level){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindLevelRuns(){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindRunForIndex($index){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessIsolatedRunSequences(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $sos
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $eos
	 * @param \System\Int32|int $runLevel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessIsolatedRunSequence($sos, $eos, $runLevel){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LocatePairedBrackets(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BracketPair& $bracketPair
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InspectPairedBracket($bracketPair){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BracketPair& $bracketPair
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $sos
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InspectBeforePairedBracket($bracketPair, $sos){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BracketPair& $pairedBracket
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $direction
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetPairedBracketDirection($pairedBracket, $direction){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResetWhitespaceLevels(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AssignLevelsToCodePointsRemovedByX9(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $biDiClass
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWhitespace($biDiClass){}
	/**
	 * @param \System\Int32|int $level
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DirectionFromLevel($level){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $biDiClass
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsRemovedByX9($biDiClass){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $direction
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNeutralClass($direction){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiClass $direction
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStrongClassN0($direction){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
