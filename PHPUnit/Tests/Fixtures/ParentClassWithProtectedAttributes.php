<?php

class PHPUnit_Tests_Fixtures_ParentClassWithProtectedAttributes extends PHPUnit_Tests_Fixtures_ParentClassWithPrivateAttributes
{
    protected static $protectedStaticParentAttribute = 'foo';
    protected $protectedParentAttribute = 'bar';
}
