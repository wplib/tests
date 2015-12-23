<?php
namespace Tests\WPLib\UnitTests {

	use Tests\WPLib\WPLib_Test_Case;
	use \WPLib_Base;

	class Test_Base extends WPLib_Base{

	}

	class Test_WPLib_Base extends WPLIB_Test_Case {

		function setUp() {
			$base = new Test_Base();
		}

	}

}