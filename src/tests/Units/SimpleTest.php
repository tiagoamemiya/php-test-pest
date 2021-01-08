<?php

beforeEach(function () {
  $this->sample = 2;
});

test('asserts true from beforeEach Set', function () {
  expect($this->sample === 2)->toBeTrue();
});


test('asserts true is true', function () {
  $this->assertTrue(1===1);
});

test('asserts false is false', function () {
  $this->assertFalse(1==='1');

  expect(1 === '1')->toBeFalse();
});

it('asserts from helper function to be true', function(){
  $this->assertTrue(getNumberOne() === 1);
});

test('Should return a Exception', function () {
  throw new Exception('some error message');
})->throws(Exception::class);

test('Should not empty email', function ($email) {
  expect($email)->not->toBeEmpty();
})->with([
  'teste1@teste.com',
  'teste2@teste.com',
]);