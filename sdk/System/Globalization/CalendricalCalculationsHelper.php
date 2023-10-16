<?php
namespace System\Globalization;
/**
 */
class CalendricalCalculationsHelper extends \System\Object
{
	/**
	 * @param \System\Double|double $degree
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RadiansFromDegrees($degree){}
	/**
	 * @param \System\Double|double $degree
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SinOfDegree($degree){}
	/**
	 * @param \System\Double|double $degree
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CosOfDegree($degree){}
	/**
	 * @param \System\Double|double $degree
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TanOfDegree($degree){}
	/**
	 * @param \System\Int32|int $degrees
	 * @param \System\Int32|int $minutes
	 * @param \System\Double|double $seconds
	 * @return \System\Double|double
	 */
	public static function Angle($degrees, $minutes, $seconds){}
	/**
	 * @param \System\Double|double $julianCenturies
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Obliquity($julianCenturies){}
	/**
	 * @param \System\DateTime $date
	 * @return \System\Int64|int
	 */
	protected static function GetNumberOfDays($date){}
	/**
	 * @param \System\Double|double $numberOfDays
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGregorianYear($numberOfDays){}
	/**
	 * @param \System\Double|double $divisor
	 * @param \System\Double|double $dividend
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Reminder($divisor, $dividend){}
	/**
	 * @param \System\Double|double $longitude
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NormalizeLongitude($longitude){}
	/**
	 * @param \System\Double|double $longitude
	 * @return \System\Double|double
	 */
	public static function AsDayFraction($longitude){}
	/**
	 * @param \System\Double[] $coefficients
	 * @param \System\Double|double $indeterminate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PolynomialSum($coefficients, $indeterminate){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CenturiesFrom1900($gregorianYear){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DefaultEphemerisCorrection($gregorianYear){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EphemerisCorrection1988to2019($gregorianYear){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EphemerisCorrection1900to1987($gregorianYear){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EphemerisCorrection1800to1899($gregorianYear){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EphemerisCorrection1700to1799($gregorianYear){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EphemerisCorrection1620to1699($gregorianYear){}
	/**
	 * @param \System\Double|double $time
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EphemerisCorrection($time){}
	/**
	 * @param \System\Double|double $moment
	 * @return \System\Double|double
	 */
	public static function JulianCenturies($moment){}
	/**
	 * @param \System\Double|double $time
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EquationOfTime($time){}
	/**
	 * @param \System\Double|double $apparentMidday
	 * @param \System\Double|double $longitude
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AsLocalTime($apparentMidday, $longitude){}
	/**
	 * @param \System\Double|double $date
	 * @param \System\Double|double $longitude
	 * @return \System\Double|double
	 */
	public static function Midday($date, $longitude){}
	/**
	 * @param \System\Double|double $longitude
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitLongitude($longitude){}
	/**
	 * @param \System\Double|double $date
	 * @return \System\Double|double
	 */
	public static function MiddayAtPersianObservationSite($date){}
	/**
	 * @param \System\Double|double $julianCenturies
	 * @param \System\Int32|int $x
	 * @param \System\Double|double $y
	 * @param \System\Double|double $z
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PeriodicTerm($julianCenturies, $x, $y, $z){}
	/**
	 * @param \System\Double|double $julianCenturies
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SumLongSequenceOfPeriodicTerms($julianCenturies){}
	/**
	 * @param \System\Double|double $julianCenturies
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Aberration($julianCenturies){}
	/**
	 * @param \System\Double|double $julianCenturies
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Nutation($julianCenturies){}
	/**
	 * @param \System\Double|double $time
	 * @return \System\Double|double
	 */
	public static function Compute($time){}
	/**
	 * @param \System\Double|double $longitude
	 * @return \System\Double|double
	 */
	public static function AsSeason($longitude){}
	/**
	 * @param \System\Double|double $longitude
	 * @param \System\Double|double $time
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EstimatePrior($longitude, $time){}
	/**
	 * @param \System\Int64|int $numberOfDays
	 * @return \System\Int64|int
	 */
	protected static function PersianNewYearOnOrBefore($numberOfDays){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
