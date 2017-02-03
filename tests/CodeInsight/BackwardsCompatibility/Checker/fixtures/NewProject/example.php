<?php
define('SAME_CONST', 1);

function functionSameEmpty() {}
function functionSameNonEmpty($p1) {}

function functionSiFromEmptyToNonEmpty($p1) {}
function functionSiFromNonEmptyToEmpty() {}
function functionSiFromNonEmptyToNonEmpty($p1, $p2) {}

class kEvent {}

abstract class ClassB {}

final class ClassC {}

class ClassD {
	const SAME_CONST = 1;

	protected $publicPropertySr;
	private $publicToPrivatePropertySr;
	private $protectedPropertySr;

	public $publicPropertySame;
	protected $protectedPropertySame;
	private $privatePropertySame;

	public function __construct() {}

	public function publicMethodSameEmpty() {}
	protected function protectedMethodSameEmpty() {}
	private function privateMethodSameEmpty() {}

	public function publicMethodSameNonEmpty($p1) {}
	protected function protectedMethodSameNonEmpty($p1) {}
	private function privateMethodSameNonEmpty($p1) {}

	protected function publicMethodSr() {}
	private function publicToPrivateMethodSr() {}
	private function protectedMethodSr() {}

	public abstract function publicMethodAb();
	protected abstract function protectedMethodAb();
	private abstract function privateMethodAb();

	public final function publicMethodFi() {}
	protected final function protectedMethodFi() {}
	private final function privateMethodFi() {}

	public function publicMethodSiFromEmptyToNonEmpty($p1) {}
	protected function protectedMethodSiFromEmptyToNonEmpty($p1) {}
	private function privateMethodSiFromEmptyToNonEmpty($p1) {}

	public function publicMethodSiFromNonEmptyToEmpty() {}
	protected function protectedMethodSiFromNonEmptyToEmpty() {}
	private function privateMethodSiFromNonEmptyToEmpty() {}

	public function publicMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
	protected function protectedMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
	private function privateMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
}

class ClassE extends ClassD {}

class ClassF {
	public function ClassF() {}
}

// Class that stayed final isn't checked for changes in protected class members.
final class ClassG {
	const SAME_CONST = 1;

	protected $publicPropertySr;
	private $publicToPrivatePropertySr;
	private $protectedPropertySr;

	public $publicPropertySame;
	protected $protectedPropertySame;
	private $privatePropertySame;

	public function __construct() {}

	public function publicMethodSameEmpty() {}
	protected function protectedMethodSameEmpty() {}
	private function privateMethodSameEmpty() {}

	public function publicMethodSameNonEmpty($p1) {}
	protected function protectedMethodSameNonEmpty($p1) {}
	private function privateMethodSameNonEmpty($p1) {}

	protected function publicMethodSr() {}
	private function publicToPrivateMethodSr() {}
	private function protectedMethodSr() {}

	public abstract function publicMethodAb();
	protected abstract function protectedMethodAb();
	private abstract function privateMethodAb();

	public final function publicMethodFi() {}
	protected final function protectedMethodFi() {}
	private final function privateMethodFi() {}

	public function publicMethodSiFromEmptyToNonEmpty($p1) {}
	protected function protectedMethodSiFromEmptyToNonEmpty($p1) {}
	private function privateMethodSiFromEmptyToNonEmpty($p1) {}

	public function publicMethodSiFromNonEmptyToEmpty() {}
	protected function protectedMethodSiFromNonEmptyToEmpty() {}
	private function privateMethodSiFromNonEmptyToEmpty() {}

	public function publicMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
	protected function protectedMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
	private function privateMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
}

// Class, that was made final is checking for all usual stuff.
final class ClassH {
	const SAME_CONST = 1;

	protected $publicPropertySr;
	private $publicToPrivatePropertySr;
	private $protectedPropertySr;

	public $publicPropertySame;
	protected $protectedPropertySame;
	private $privatePropertySame;

	public function __construct() {}

	public function publicMethodSameEmpty() {}
	protected function protectedMethodSameEmpty() {}
	private function privateMethodSameEmpty() {}

	public function publicMethodSameNonEmpty($p1) {}
	protected function protectedMethodSameNonEmpty($p1) {}
	private function privateMethodSameNonEmpty($p1) {}

	protected function publicMethodSr() {}
	private function publicToPrivateMethodSr() {}
	private function protectedMethodSr() {}

	public abstract function publicMethodAb();
	protected abstract function protectedMethodAb();
	private abstract function privateMethodAb();

	public final function publicMethodFi() {}
	protected final function protectedMethodFi() {}
	private final function privateMethodFi() {}

	public function publicMethodSiFromEmptyToNonEmpty($p1) {}
	protected function protectedMethodSiFromEmptyToNonEmpty($p1) {}
	private function privateMethodSiFromEmptyToNonEmpty($p1) {}

	public function publicMethodSiFromNonEmptyToEmpty() {}
	protected function protectedMethodSiFromNonEmptyToEmpty() {}
	private function privateMethodSiFromNonEmptyToEmpty() {}

	public function publicMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
	protected function protectedMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
	private function privateMethodSiFromNonEmptyToNonEmpty($p1, $p2) {}
}

// In-Portal specifics.
class ExampleEventHandler
{
	protected function mapPermissions() {}

	protected function SetCustomQuery() {}

	protected function OnEventSr(kEvent $event) {}

	function OnEventSig1($event) {}

	function OnEventSig2(kEvent $event) {}

	function OnEventSig3(kEvent $event) {}
}

class AdminEventsHandler
{
	protected function mapPermissions() {}

	protected function SetCustomQuery() {}

	protected function OnEventSr(kEvent $event) {}

	function OnEventSig1($event) {}

	function OnEventSig2(kEvent $event) {}

	function OnEventSig3(kEvent $event) {}
}

class ExampleTagProcessor
{
	protected function TagNameOneSr(array $params) {}

	protected function TagNameTwoSr($params) {}

	protected function notTagNameOneSr(array $params) {}

	protected function notTagNameTwoSr($params) {}
}
