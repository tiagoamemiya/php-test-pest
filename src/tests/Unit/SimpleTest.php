<?php

test('asserts true is true', function () {
  $this->assertTrue(1===1);

  expect(true)->toBeTrue();
});

test('asserts false is false', function () {
  $this->assertFalse(1==='1');

  expect(false)->toBeFalse();
});