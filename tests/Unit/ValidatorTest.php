<?php 
it('validates a string', function(){
    expect(\Core\Validator::string('foobar'))->toBeTrue();
    expect(\Core\Validator::string(false))->toBeFalse();
    expect(\Core\Validator::string(''))->toBeFalse();
});

it('validates a string with a minium length', function(){
    expect(\Core\Validator::string('foobar',20))->toBeFalse();
});