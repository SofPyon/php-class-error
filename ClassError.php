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
  * エラーの数を返す
  * @param  void
  * @return int
  */
  public function countError() {
    
    if( $this->hasError() === TRUE ) {
      return count( $this->errors );
    }else{
      return 0;
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
