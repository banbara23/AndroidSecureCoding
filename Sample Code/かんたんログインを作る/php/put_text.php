<?php
define('DADAPATH', '/var/upload');

// ���|�C���g7�� �g�[�N�����K�v��API�ł͍ŏ��Ƀg�[�N���̗L�������m�F���A�����Ȃ�Έ�؂̏��������Ȃ�
function check_token($token) {
  // �n���ꂽ�g�[�N���̌`�����`�F�b�N
  if(! preg_match('/\A[0-9a-f]{64}\z/', $token) ) {
    die('invalid token');
  }
  
  // �g�[�N���ɕR�t�����f�[�^�L�����`�F�b�N
  $file = DADAPATH . '/' . $token;
  if(! is_readable($file)) {
    die('invalid token');
  }
}

function write_file($token, $text) {
  $file = DADAPATH . '/' . $token;
  $fp = fopen($file, 'wb');
  if ($fp === FALSE) die('write file error.');
  
  $len = fwrite($fp, $text, strlen($text));
  if ($len === FALSE) die('write file error.');

  fclose($fp);
}

function parse_json() {
  // ���N�G�X�gBODY���擾���AJSON�f�[�^�Ƃ��ăp�[�X����
  $json = file_get_contents('php://input');
  $obj = json_decode($json);

  $text = $obj->{'text'};
  echo($text);
  
  return $text;
}

// cookie�ő��M���ꂽ�g�[�N�����`�F�b�N����
$token = $_COOKIE['token'];
check_token($token);

$text = parse_json();
write_file($token, $text);
?>
