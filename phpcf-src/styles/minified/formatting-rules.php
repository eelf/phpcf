<?php
$nospace = array(
    PHPCF_KEY_DESCR_LEFT => 'no space',
    PHPCF_KEY_LEFT => PHPCF_EX_DELETE_SPACES_STRONG,
    PHPCF_KEY_DESCR_RIGHT => 'no space',
    PHPCF_KEY_RIGHT => PHPCF_EX_DELETE_SPACES_STRONG,
);
unset($controls['{'], $controls['}'], $controls[';'], $controls[','], $controls['( (_LONG'], $controls[')'],
    $controls['T_DOUBLE_ARROW']);
$controls['{'][PHPCF_KEY_ALL] = $controls['}'][PHPCF_KEY_ALL] = $controls[';'][PHPCF_KEY_ALL] =
    $controls[','][PHPCF_KEY_ALL] = $controls['( (_LONG'][PHPCF_KEY_ALL] = $controls[')'][PHPCF_KEY_ALL] =
    $controls[$binary_operators][PHPCF_KEY_ALL] = $controls['T_DOUBLE_ARROW'][PHPCF_KEY_ALL] = $nospace;
$controls['T_OPEN_TAG'] = array(
    PHPCF_KEY_ALL => array(
        PHPCF_KEY_DESCR_RIGHT => 'space',
        PHPCF_KEY_RIGHT => PHPCF_EX_SHRINK_SPACES_STRONG,
    )
);