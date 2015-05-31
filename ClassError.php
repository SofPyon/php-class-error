<?php

class ClassError {

  protected $errors = array();

  /**
  * エラーをセットする
  * @param string     $text   エラーテキスト
  * @param string|int $status エラーの種類(ご自身で定義してください)
  */
  public function setError( $text, $status ) {

    $this->errors[] = array(
      'text'   => $text,
      'status' => $status
    );

  }

  /**
  * エラーがあるかどうか
  * @param  void
  * @return bool
  */
  public function hasError() {

    if( is_array( $this->errors ) === TRUE && count( $this->errors ) > 0 ) {
      return TRUE;
    }else{
      return FALSE;
    }

  }

  /**
  * エラーテキストとステータスを返す
  * @param  void
  * @return array|null
  */
  public function getError() {

    if( $this->hasError() === TRUE ) {
      return $this->errors;
    }else{
      return NULL;
    }

  }

}
