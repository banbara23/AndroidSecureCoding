<?php
define('DADAPATH', '/var/upload');

// ���|�C���g7�� �g�[�N�����K�v��API�ł͍ŏ��Ƀg�[�N���̗L�������m�F���A�����Ȃ�Έ�؂̏��������Ȃ�
function check_token($token) {
  // �n���ꂽ�g�[�N���̌`�����`�F�b�N
  if(! preg_match('/\A[0-9a-f]{64}\z/', $token) ) {
    die('invalid token');
  }
}

function delete_token($token) {
  $file = DADAPATH . '/' . $token;
  unlink($file);
}

// cookie�ő��M���ꂽ�g�[�N�����`�F�b�N����
$token = $_COOKIE['token'];
check_token($token);

delete_token($token);
setcookie('token', '', 0, '/');
// HTTPS �ڑ��̏ꍇ�ɂ̂݁A�g�[�N���𑗐M����
//setcookie('token', '', 0, '/', 'easylogin.android.jssec.org', true);
?>
