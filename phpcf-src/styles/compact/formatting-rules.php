<?php
$controls['{']['CTX_FUNCTION_D CTX_FUNCTION_LONG_D CTX_CLASS_METHOD_LONG_D CTX_CLASS_D CTX_CLASS_METHOD_D'] = array(
    PHPCF_KEY_DESCR_LEFT => '"{" to start on a new line in function/method/class declaration',
    PHPCF_KEY_LEFT => PHPCF_EX_SHRINK_SPACES,
    PHPCF_KEY_DESCR_RIGHT => 'nothing after "{" on the same line and no empty lines',
    PHPCF_KEY_RIGHT => array(PHPCF_EX_INCREASE_INDENT, PHPCF_EX_SHRINK_NLS),
);
