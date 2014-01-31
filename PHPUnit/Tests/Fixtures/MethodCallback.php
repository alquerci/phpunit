<?php
class PHPUnit_Tests_Fixtures_MethodCallback
{
    public static function staticCallback()
    {
        $args = func_get_args();

        if ($args == array('foo', 'bar')) {
            return 'pass';
        }
    }

    public function nonStaticCallback()
    {
        $args = func_get_args();

        if ($args == array('foo', 'bar')) {
            return 'pass';
        }
    }
}
