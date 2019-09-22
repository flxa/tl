<?php

namespace Larowlan\Tl;

/**
 * Utility formatter.
 */
class Formatter {

  /**
   * Formats a duration.
   *
   * @param int $duration
   *   Duration in seconds.
   *
   * @return string
   *   Formatted duration.
   */
  public static function formatDuration($duration) {
    if ($duration < 60) {
      // Less than one minute.
      return str_pad($duration, 2, '0', STR_PAD_LEFT) . ' secs';
    }
    elseif ($duration < 3600) {
      // Less than one hour.
      $minutes = str_pad(floor($duration / 60), 2, '0', STR_PAD_LEFT);
      $seconds = str_pad(($duration - ($minutes * 60)), 2, '0', STR_PAD_LEFT);
      return "$minutes:$seconds m";
    }
    else {
      // Over one hour.
      $hours = floor($duration / 3600);
      $minutes = str_pad(floor((($duration - ($hours * 3600)) / 60)), 2, '0', STR_PAD_LEFT);
      $seconds = str_pad(($duration - ($hours * 3600) - ($minutes * 60)), 2, '0', STR_PAD_LEFT);
      return "$hours:$minutes:$seconds";
    }
  }

}
