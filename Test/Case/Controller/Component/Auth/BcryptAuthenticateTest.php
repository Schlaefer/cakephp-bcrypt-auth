<?php

  App::uses('BcryptAuthenticate', 'BcryptAuthenticate.Controller/Component/Auth');

  class BcryptAuthenticateTest extends CakeTestCase {

    public function testPassword() {
      $password = 'Rosinenbrötchen';
      $hash = BcryptAuthenticate::hash($password);
      $this->assertTrue(BcryptAuthenticate::checkPassword($password, $hash));

      $this->assertFalse(BcryptAuthenticate::checkPassword(mt_rand(1, 99999), $hash));
    }

  }
