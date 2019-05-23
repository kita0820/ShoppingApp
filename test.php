<?php

if ($aaa == '') {
    print 'AAA';
}

if (isset($aaa) == false) {
    print 'BBB';
}

$aaa = '';

if (isset($aaa) == false) {
    print 'CCC';
}
