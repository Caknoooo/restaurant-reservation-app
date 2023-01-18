<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) : bool
    {
      $pickupDate = Carbon::parse($value);
      $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);

      // When the restaurant is open
      $earliestTime = Carbon::createFromTimeString('17:00:00');
      $lastTime = Carbon::createFromTimeString('23:00:00');

      return $pickupTime->between($earliestTime, $lastTime);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please choose the time between 17:00 - 23:00.';
    }
}
