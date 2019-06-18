<?php

class Checkunit_test extends UnitTest {

	public function unit_test_check()

	{

	    $output=$this -> request('GET',['Testcase','get_testcase']);

	    $expected = 'Unit Test';

	    $this -> assertContains($expected,$output);

	}

}
